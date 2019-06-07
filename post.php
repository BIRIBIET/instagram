<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
<?php 
$con = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
$con2=mysql_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
$query = mysqli_query($con, "SELECT * FROM  instagram ORDER BY id DESC WHERE id=$_GET[id]"); 
?>

<?php echo $_GET['id'] ?>

<form action="postprov.php" method="POST">
	<input name="text">
	<button type="submit" class="btn btn-primary">Сделать пост</button>
</form>
</body>
</html>