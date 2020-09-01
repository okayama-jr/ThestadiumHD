<?php
include('../src/connect_db.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากช่องกรอกอีเมลล์
	$email = $_POST["email"];
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO email(email)
			VALUES('$email')";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('ขอบคุณที่สนับสนุน');";
	echo("window.location = '../index.php';");
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('ผิดผลาด');";
	echo "</script>";
}
?>