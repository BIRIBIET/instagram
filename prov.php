<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
$query = mysqli_query($con, "SELECT * FROM instagram WHERE email = '" . $_POST['email'] ."' AND pass='" . $_POST['pass'] ."' "); 
$res = $query->fetch_assoc();

if ( $query->num_rows == 0) {
	header("Location: http://sasha/tworeg/login.php?error=Ошибка");
}else{
	header("Location: http://sasha/tworeg/post.php?id=$res[id]");
}
?>

