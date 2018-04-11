<!DOCTYPE html>
<html>
<head>
	<title>Exercise32</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<?php
function armstrong_number($num){
$sl = strlen($num);
$sum = 0;
$num = (string)$num;
for($i = 0;$i < $sl; $i++){
	$sum = $sum + pow ((string)$num{$i},$sl);

}
if((string)$sum == (string)$num){
	return "True";

}else{
	return "False";
}
}
echo "ls 153 Armstrong number?".armstrong_number(153);
echo "nls 21 Armstrong number?".armstrong_number(21);
echo "nls 4587 Armstrong number?".armstrong_number(4587);"\n";

	?>

</body>
</html>