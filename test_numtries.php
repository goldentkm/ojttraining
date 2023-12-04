<?php
$num_to_guess = 42;
$message = "";
if ( ! isset( $_POST['guess'] ) ) {
   $message = "Welcome!";
} else if ( $_POST['guess'] > $num_to_guess ) {
   $message = $_POST['guess']." is too big!";
} else if ( $_POST['guess'] < $num_to_guess ) {
   $message = $_POST['guess']." is too small!";
} else { 
   $message = "Well done!";
}
if(isset($_POST['guess']))
{  $num_tries=$_POST['guess'];
   $num_tries++;
}else {$num_tries=0;}

?>
<html>
<head>
<title>A PHP Number Guessing Script</title>
</head>
<body>
<h1><?php print $message ?></h1>
<p><strong>Guess number: </strong><?php echo $num_tries; ?></p>
<form method="post" action="
<?php print $_SERVER['PHP_SELF'];?>">
<p>
<input type="hidden" name="num_tries" value="<?php echo $num_tries; ?>"/></p>
Type your guess here: <input type="text" name="guess" />
</p>
</form>
</body>
</html>

