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
 					<label class="textMosPerfil">Nome</label>
 					<label class="textMosPerfil">Telefone</label>
 				</div>
 				<div class="divForm">
 					<p class="LongTextMosPerfil">Nome</p>
 				</div>
 			</div>
 			<button class="btnUp">Atualizar Perfil</button>
 		</div>
 		<form class="ocultar" method="post" enctype="multipart/form-data">
 			<input type="file" name="foto">
 			<input type="text" name="nick">
 			<input type="password" name="senha" maxlength="25">
 			<input type="tel" name="telefone" pattern="[0-9]{2}_[0-9]{4}-[0-9]{4}">
 			<input type="text" name="endereso">
 			<textarea name="bio"></textarea>
 			<input type="submit" name="UpdateUser">
 		</form>
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
		        <td class="status th5">A Caminho</td>
		    </tr>
		    <tr class="body">
		        <td class="th1">1</td>
		        <td class="th2">1</td>
		        <td class="th3">00,00</td>
		        <td class="th4">Produto</td>
		        <td class="status th5">A Caminho</td>
		    </tr>
		    <tr class="body">
		        <td class="th1">1</td>
		        <td class="th2">1</td>
		        <td class="th3">00,00</td>
		        <td class="th4">Produto</td>
		        <td class="status th5">A Caminho</td>
		    </tr>
		    <tr class="body">
		        <td class="th1">1</td>
		        <td class="th2">1</td>
		        <td class="th3">00,00</td>
		        <td class="th4">Produto</td>
		        <td class="status th5">A Caminho</td>
		    </tr>
		    <tr class="body">
		        <td class="th1">1</td>
		        <td class="th2">1</td>
		        <td class="th3">00,00</td>
		        <td class="th4">Produto</td>
		        <td class="status th5">A Caminho</td>
		    </tr>
		    <tr class="body">
		        <td class="th1">1</td>
		        <td class="th2">1</td>
		        <td class="th3">00,00</td>
		        <td class="th4">Produto</td>
		        <td class="status th5">A Caminho</td>
		    </tr>
		    <tr class="body">
		        <td class="th1">1</td>
		        <td class="th2">1</td>
		        <td class="th3">00,00</td>
		        <td class="th4">Produto</td>
		        <td class="status th5">A Caminho</td>
		    </tr>
		</table>
 	</div>
 	<script src="https://kit.fontawesome.com/39cab4bf95.js" crossorigin="anonymous"></script>
 	<script src="java/java.js"></script>
</body>
</html>