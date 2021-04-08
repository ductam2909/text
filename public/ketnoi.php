<?php
	/*kết nối CSDL*/
	$conn = mysqli_connect("localhost","root","","new_laravel2")
							or die("Kết nối CSDL thất bại");
	mysqli_set_charset($conn, "utf8");
?>
