<?php

try {
	$db = new mysqli("localhost","root","","site_data");

} catch (Exception $e) {
	
}


if(isset($_POST['submit'])){
	session_start();
	$_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$is_insert = $db->query("INSERT INTO `contactdata`(`Name`, `Email`, `Subject`, `Messgae`) VALUES ('$name','$mailFrom','$subject','$message')");
   
	if($is_insert == TRUE){
		//echo "";
	    header("Location:index.php");
	
		exit();

	}
}





/*

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$mailTo = "ritika.17631@knit.ac.in";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an Email from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt,$headers);
	
	header("Location: index.php?mailsend");

}

*/



?>

<html>
<head>
<script type="text/javascript">
	var time = null;
	function move(){
		window.location = "<?php echo $ref ?>";
	}
</script>
</head>
<body onload="timer= setTimeout('move()',1000)">
	
</body>
</html>