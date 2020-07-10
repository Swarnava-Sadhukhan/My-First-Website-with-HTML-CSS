<?php 

	if(isset($_POST['submit'])) {
		$to="sadhu.man11@gmail.com";
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$txt=$_POST['message'];
		$headers="From: {$email}"."\r\n".
		"CC: maanta.babu@gmail.com";
		$name=$_POST['name'];
		
		echo "hi {$name} ";
		echo "<br>";
		echo " Your mail has been sent ";
		echo "<br>";
		echo "We will get back to you at {$email}  ";
		echo "<br>";
		echo "The subject is {$subject}  ";
		echo "<br>";
		echo " Thank you for this message '{$txt}'  ";
		echo "<br>";
		echo " {$headers} \n ";
	}
?>