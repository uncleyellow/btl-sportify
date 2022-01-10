<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["pass"];
		$name = $_POST["name"];
		$email = $_POST["email"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $name == "" || $email == "") {
			echo "bạn vui lòng nhập đầy đủ thông tin";
		}else{
			$sql = "INSERT INTO users(
										username,
										password,
										name,
										email
									) VALUES (
										'$username',
										'$password',
										'$name',
										'$email'
									)";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($conn,$sql);
			echo "chúc mừng bạn đã đăng ký thành công";
		}
	}

?>