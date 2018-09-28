<?php

if (isset($_POST['submit'])) {

	$username = $_POST['user'];
	$password = $_POST['pass'];
	$user = array(
		"user" => "valent",
		"pass" => "1205"
	);

	if ($username == $user['user'] && $password == $user['pass']) {
		echo "Berhasil Masuk!"."<br>";
		# code...
?>

<center><h1>Isi Data</h1></center>

		<form method="post">
			<tr>
				<td>Futsal <input type="checkbox" name="hobi[]"></td><br>
			</tr>
			<tr>
				<td>Basket <input type="checkbox" name="hobi[]"></td><br>
			</tr>
			<tr>
				<td>Badminton <input type="checkbox" name="hobi[]"></td><br>
			</tr>
			<tr>
				<td>Voli <input type="checkbox" name="hobi[]"></td><br>
			</tr>
			<tr>
				<td>Gambar <input type="file" name="gambar"></td><br>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</form>

<?php
		error_reporting(0);

			if (isset($_POST['submit'])) {
				$data = $_POST['hobi'];

				foreach ($data as $hobbi) {
					echo $hobbi;
					# code...
				}
				# code...
?>

<?php
			}else{
				echo "Gagal";
			}
	}
	# code...
}

?>
