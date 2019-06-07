<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body style="background: #eaeaea">
	
<div class="col-12 row">

	<div class="col-3 bd-primary"></div>

	<div class="col-6">
		<div class="row">
			<div class="col-6 mt-5">
					<img src="images/телефон.jpg">
			</div>
			<div class="col-6 mt-5" style="height: 500px; background: white;">
				<img src="images/insta.png " style="width: 250px; margin-left: 15px; margin-top: 20px">
				<p style="text-align: center">Зарегистрируйтесь, чтобы смотреть фото и видео ваших друзей.</p>
				<div class="row">
					<div style="height: 1px; width: 100px;
					background: grey;
					margin-left: 18px;
					margin-top: 10px">	
					 </div>
					<p style="margin-left: 20px">ИЛИ</p>
					<div style="height: 1px; width: 100px;
					background: grey;
					margin-top: 10px;
					margin-left: 15px"></div>
				</div>
				<form action="send.php" method="POST">
					<input name="email" placeholder="Моб.телефон или эл.адрес:" 
					style="margin-bottom: 6px; 
					width: 280px; 
					border-radius: 3px; 
					border-top: white;
					border-left: white;
					opacity: 1;">
					<input name="name" placeholder="Имя и фамилия:" 
					style="margin-bottom: 6px; 
					width: 280px; 
					border-radius: 3px; 
					border-top: white;
					border-left: white;
					opacity: 1;">
					<input name="nick" placeholder="Имя пользователя:" 
					style="margin-bottom: 6px; 
					width: 280px; 
					border-radius: 3px; 
					border-top: white;
					border-left: white;
					opacity: 1;">
					<input name="pass" placeholder="Пароль:" 
					style="margin-bottom: 6px; 
					width: 280px; 
					border-radius: 3px; 
					border-top: white;
					border-left: white;
					opacity: 1;">
					<button class="bg-primary text-white" type="submit" style="border: none; border-radius: 3px; width: 280px">Регистрация</button>
				</form>
				<p style="text-align: center; margin-top: 20px">Регистрируясь, вы принимаете наши Условия, Политику использования данных и Политику в отношении файлов cookie.</p>
				<div class="col-12" style="background: grey; height: 100px;">
						<p>Есть аккаунт? <a href="login.php">Войти</a>.</p>
				</div>
			</div>
			
		</div>
	</div>

	<div class="col-3 bd-primary"></div>
 </div>	
</form>
</body>
</html>