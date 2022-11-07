<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/cssPerfil.css">
	<link rel="shortcut icon" href="imgs/logo.png">
	<title>Perfil</title>
</head>
<body>
 	<div class="topo">
 		<button class="backButton" onclick="red('index.php')">Home</button>
 	</div>
 	<div class="perfil">
 		<div class="mostruarioPerfil">
 			<div class="formMos">
 				<div class="imgPerfil"></div>
 				<div class="divForm">
 					<label class="textMosPerfil">Nome</label>
 					<label class="textMosPerfil">Telefone</label>
 				</div>
 				<div class="divForm">
 					<label class="textMosPerfil">Senha</label>
 					<i class="fa-solid fa-eye senhaIcon"></i>
 					<label class="textMosPerfil">Endereço</label>
 				</div>
 				<div class="divForm">
 					<p class="LongTextMosPerfil">Bio</p>
 				</div>
 			</div>
 			<button class="btnUp" onclick="mostrar(['#modals', '#formUpdateUser'], 0)">Atualizar Perfil</button>
 		</div>
 	</div>
 	<div class="pedidos">
 		<h1 class="titlePedidos">Pedidos</h1>
 		<table class="tablePedidos">
		    <tr class="top">
		        <th class="th1">Ordem</th>
		        <th class="th2">Quantidade</th>
		        <th class="th3">Preço (R$)</th>
		        <th class="th4">Nome</th>
		        <th class="th5">Status</th>
		    </tr>
		    <tr class="body">
		        <td class="th1">1</td>
		        <td class="th2">1</td>
		        <td class="th3">00,00</td>
		        <td class="th4">Produto</td>
		        <td class="status th5" onclick="mostrar(['#modals', '#formComent'], 0)">A Caminho</td>
		    </tr>
		</table>
 	</div>
 	<div class="modals ocultar" id="modals">
		<form class="PerfilUpdate ocultar" method="post" enctype="multipart/form-data" id="formUpdateUser">
			<i class="fa-solid fa-circle-xmark X" onclick="mostrar(['#modals', '#formUpdateUser'], 2)"></i>
			<div class="fotoPerfilInput">
				<div class="imgMostragem"></div>
				<label for="InputImgEnv">Trocar Foto</label>
				<input type="file" name="foto" id="InputImgEnv">
			</div>
			<div class="IntputsTexts">
				<div class="InputTextIc">
					<i class="fa-solid fa-user-secret iconInput"></i>
					<input type="text" name="nick" class="InputText" placeholder="Nome">		
				</div>
				<div class="InputTextIc">
					<i class="fa-solid fa-key iconInput"></i>
					<input type="password" name="senha" minlength="5" maxlength="25" class="InputText"  placeholder="Nova Senha">
					<input type="password" name="Confsenha" minlength="5" maxlength="25" class="InputText" placeholder="Confirmar senha">	
				</div>
				<div class="InputTextIc">
					<i class="fa-solid fa-phone iconInput"></i>
					<input type="tel" name="telefone" pattern="[0-9]{2}_[0-9]{4}-[0-9]{4}" class="InputText" placeholder="Telefone">
				</div>
				<div class="InputTextIc">
					<i class="fa-solid fa-map iconInput"></i>
					<input type="text" name="endereso" class="InputText" placeholder="endereço">
				</div>
				<div class="InputTextIc">
					<i class="fa-solid fa-scroll iconInput"></i>
					<textarea name="bio" class="InputTextTextarea" placeholder="Biografia"></textarea>
				</div>
			</div>
			<input type="submit" name="UpdateUser" class="submitInputUpdateUser" value="Atualizar">
		</form>
		<form class="comentProductBox ocultar" method="post" enctype="multipart/form-data" id="formComent">
			<i class="fa-solid fa-circle-xmark X2" onclick="mostrar(['#modals', '#formComent'], 2)"></i>
			<div class="avalCaoProd">
				<i class="fa-solid fa-star starIcon" id="starA" onclick="backColorcheck('starA', 'red', 'var(--transEx)')"></i>
				<i class="fa-solid fa-star starIcon" id="starB" onclick="backColorcheck('starB', 'red', 'var(--transEx)')"></i>
				<i class="fa-solid fa-star starIcon" id="starC" onclick="backColorcheck('starC', 'red', 'var(--transEx)')"></i>
				<i class="fa-solid fa-star starIcon" id="starD" onclick="backColorcheck('starD', 'red', 'var(--transEx)')"></i>
				<i class="fa-solid fa-star starIcon" id="starE" onclick="backColorcheck('starE', 'red', 'var(--transEx)')"></i>
			</div>
			<input type="checkbox" name="starA" class="ocultar">
			<input type="checkbox" name="starB" class="ocultar">
			<input type="checkbox" name="starC" class="ocultar">
			<input type="checkbox" name="starD" class="ocultar">
			<input type="checkbox" name="starE" class="ocultar">
			<textarea name="coment" class="ComentProductInput" placeholder="comentario"></textarea>
			<input type="submit" name="ComentProtuto" class="ComentEnv" value="Avaliar">
		</form>
 	</div>
 	<script src="https://kit.fontawesome.com/39cab4bf95.js" crossorigin="anonymous"></script>
 	<script src="java/java.js"></script>
</body>
</html>