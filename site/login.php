<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/cssLogin.css">
		<link rel="shortcut icon" href="imgs/logo.png">
		<title>Login</title>
	</head>
	<body>
		<div class="page">
			<div class="login">
				<div class="logo"></div>
				<form class="form" method="post">
					<i class="fa-solid fa-envelope LogIconA"></i>
					<input type="email" name="email" class="input" placeholder="email" id="email">
					<i class="fa-solid fa-lock LogIconB"></i>
					<input type="password" name="senha" class="input" placeholder="senha" id="senha"maxlength="25">
					<input type="submit" name="logar" class="Enviar" value="LOGAR">
				</form>
				<button class="link">Esqueceu a Senha?</button>
			</div>
			<button class="cadastrar" onclick="mostrar(['#cadFormAb','#blur'], 0)">Criar Conta</button>
		</div>
		<div class="blur" id="blur"></div>
		<div class="sing-in" id="cadFormAb">
			<button class="X"><i class="fa-solid fa-circle-xmark" onclick="mostrar(['#cadFormAb','#blur'], 2)"></i></button>
			<div class="Sg-header">
				<div class="Sg-logo"></div>
				<h1 class="Sg-title">CADASTRO</h1>
			</div>
			<div class="body">
				<form class="cadForm" method="post">
					<!--Nome-->
					<div class="Cdinput">
						<i class="fa-solid fa-user CdIcon"></i>
						<input type="text" name="nome" placeholder="Nome Completo" class="CdInInput">
					</div>
					<!--Apelido-->
					<div class="Cdinput">
						<i class="fa-solid fa-user-secret CdIcon"></i>
						<input type="text" name="nick" placeholder="Nickname" class="CdInInput">
					</div>
					<!--EMAIL-->
					<div class="Cdinput">
						<i class="fa-solid fa-envelope CdIcon"></i>
						<input type="email" name="email" placeholder="@EMAIL" class="CdInInput">
					</div>
					<!--Idade-->
					<div class="Cdinput">
						<i class="fa-solid fa-calendar-days CdIcon"></i>
						<input type="number" name="idade" placeholder="Idade" class="CdInInput" maxlength="3" min="18" max="120">
					</div>
					<!--Numero de telefone-->
					<div class="Cdinput">
						<i class="fa-solid fa-phone CdIcon"></i>
						<input type="tel" name="telefone" placeholder="Telefone(DD_0000-0000)" class="CdInInput" pattern="[0-9]{2}_[0-9]{4}-[0-9]{4}">
					</div>
					<!--Endereço-->
					<div class="Cdinput">
						<i class="fa-solid fa-map CdIcon"></i>
						<input type="text" name="endereso" placeholder="Endereço" class="CdInInput">
					</div>
					<!--Senha-->
					<div class="Cdinput">
						<i class="fa-solid fa-key CdIcon"></i>
						<input type="password" name="senha" placeholder="Senha" class="CdInInput" maxlength="25">
					</div>
					<!--Confimar senha-->
					<div class="Cdinput">
						<i class="fa-solid fa-envelope CdIcon"></i>
						<input type="password" name="consenha" placeholder="Comfirme a senha" class="CdInInput" maxlength="25">
					</div>
					<input type="submit" name="logar" value="cadastrar" class="CadEnv">
				</form>
			</div>
		</div>
	 	<script src="https://kit.fontawesome.com/39cab4bf95.js" crossorigin="anonymous"></script>
	 	<script src="java/java.js">
	 	</script>
	</body>
</html>