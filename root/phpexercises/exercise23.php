<!DOCTYPE html>
<html>
<head>
	<title>Exercise23</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
</head>
<body>
<?php
if(version_compare(PHP_VERSION,'6.0.0') >=0){
echo 'I am at least PHP version 6.0.0,my version:'.PHP_VERSION. "\n";
}
if(version_compare(PHP_VERSION,'5.3.0') >=0){
echo 'I am at least PHP version 5.3.0,my version:'.PHP_VERSION. "\n";
}
if(version_compare(PHP_VERSION,'6.0.0') >=0){
echo 'I am at least PHP 5, my version:'.PHP_VERSION. "\n";
}
if(version_compare(PHP_VERSION,'5.0.0') >=0){
echo 'I am at least PHP 4, my version:'.PHP_VERSION. "\n";


}

?>
</body>
</html>