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

?>
</body>
</html>