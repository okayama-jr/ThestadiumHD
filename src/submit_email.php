<?php
include('../src/connect_db.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากช่องกรอกอีเมลล์
	$email = $_POST["email"];
	
	$check = "SELECT * from email where email = '$email'";
	$query = mysqli_query($con,$check) or die(mysqli_error());
	$ck = mysqli_num_rows($query); 
	
	if ($ck<=0){ //ถ้า ไม่มีตัวซ้ำ
	
		echo "<script type='text/javascript'>";
		echo "alert('ขอบคุณที่สนับสนุน');";
		echo("window.location = '../index.php';");
		echo "</script>";		
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO email(email)
			VALUES ('$email')";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	}
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	else {
		echo "<script type='text/javascript'>";
		echo "alert('คุณลงทะเบียนเเล้ว');";
		echo("window.location = '../index.php';");
		echo "</script>";
		die;
	} 

	
	
?>