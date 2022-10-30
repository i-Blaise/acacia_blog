<?php
// require 'vendor/autoload.php';
// use League\CommonMark\CommonMarkConverter;
// echo $_POST['comment'];
// $output = (new CommonMarkConverter())->convert($_POST['comment'])->getContent();


// echo 'hi';

$a = 'qmExzBIJmdELxyOFWv LOCmefk TwPhargKSPEqSxzveiun';
$alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g','h','i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
// $pangram = true;
$s = strtolower($a);
$result = array_diff($alphabet, str_split($s));
// $a = array_keys($arr, 98);
// print_r($result);
// print_r(str_split($a));
// return 'hi';
// require 'vendor/autoload.php';
// use League\CommonMark\CommonMarkConverter;

// $converter = new CommonMarkConverter();
// echo $converter->convert('# Hello World!');
?>

<!-- <!DOCTYPE html>
<head>
<title>
</titlt>
</head>
<body>
<form method="POST">
<textarea row=4 name="test_body" require>
</textarea>
</form>
</body>
</html> --> -->

<!DOCTYPE html>
<html>
    <head>
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' /><script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    </head>
<body>

<h1>The textarea form attribute</h1>

<form method="POST" id="usrform">
  Name: <textarea rows="4" cols="50" name="comment" id="example" form="usrform" required>
</textarea>

<!-- <div id="example"></div> -->
  <input type="submit">
</form>
<br>


<p>The text area above is outside the form element, but should still be a part of the form.</p>



<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>  
		<script> 
			var editor = new FroalaEditor('#example');
		</script>
</body>

</html>