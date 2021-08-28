<?php 
/*
* Shortcode interview questions
*/

add_shortcode('CodeBlockFile', 'code_block_file');
function code_block_file($atts) {

    extract(shortcode_atts(array(
      'mode' => 'php',
      'file' => '/tutscodes/programs/php/hello-world.php',
    ), $atts));

		ob_start();
    $themeLocation = get_stylesheet_directory();
    $fileLocation = $themeLocation . $file;

    if (!file_exists($fileLocation)) {
      echo "File not exists.";
      $newCodeFile = fopen($fileLocation, 'w');
      $newCodeFileText = "<?php // Start writing your code here. ?>";
      fwrite($fileLocation, $newCodeFileText);
      fclose();
    } else {
      $fileContent = htmlspecialchars(file_get_contents($fileLocation));
      $randCode = rand(5,10);
    ?> 
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/xml.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/javascript.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/css.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/clike.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/php.js"></script> 
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/python.js"></script> 

      <textarea id='<?php echo $randCode; ?>'><?php echo $fileContent; ?></textarea>
      <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("<?php echo $randCode; ?>"), {
          lineNumbers: true,
          styleActiveLine: true,
          matchBrackets: true,
          mode: "<?php echo $mode; ?>",
          readOnly: true
      });
      </script> 
    <?php
    }
		return ob_get_clean();
} 