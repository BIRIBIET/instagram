	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
	$query = mysqli_query($connect, "INSERT INTO  instagram(name,img,logo,text,nick) VALUES('user', 'original.jpg', 'телефон.jpg' , '" . $_POST['text'] . "',  '" . $_POST['nick'] . "')");		
	  ?>
	