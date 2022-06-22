<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['Email'];
		$Company=$_POST['Company'];
		$Phone=$_POST['Phone'];
		$msg=$_POST['msg'];

		$to='mayuruikey5678@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$Phone."\n"."Company :".$Company."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>