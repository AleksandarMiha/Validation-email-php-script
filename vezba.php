<html>
<head>
	<title></title>
	<style>
	

	</style>
</head>
<body>
<?php
//function which validate email did email correct or not
function valid_email($email){
	$result = trim($email);
	if(filter_var($result, FILTER_VALIDATE_EMAIL))
{

return "true";
}
else {
	echo "false";
}
}
echo valid_email("abcexample.com")."\n";
echo valid_email("abcexafsafdsample.com");
	
	//this is second way
$email = "john.doe@example.com";

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email. is a valid email address");
} else {
  echo("$email is not a valid email address");
}

?>
</body>
</html>
