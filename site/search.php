<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/cssSearch.css">
		<link rel="shortcut icon" href="imgs/logo.png">
		<title>Sigmamep</title>
	</head>
	<body>
		<div class="topo">
	 		<div class="topo-nav">
	 			<div class="topo-nvlogo"></div>
	 			<div class="topo-nvlinks">
	 				<button class="Nvlink">PEDIDOS</button>
	 				<button class="Nvlink">PERFIL</button>
	 				<button class="Nvlink">PRODUTOS</button>
	 				<button class="Nvlink">COSMÉTICOS</button>
	 			</div>
	 			<i class="fa-solid fa-magnifying-glass NvLupa"></i>
	 			<button class="topo-nvLogin" onclick="red('login.php')">SIGN IN OR LOGIN</button>
	 		</div>
	 	</div>
	 	<form class="pesquisa" method="post">
	 		<div class="bars">
	 			<div class="barA">
	 				<i class="fa-solid fa-magnifying-glass ISearch"></i>
	 				<input class="barInputA" type="text" name="nome" placeholder="Pesquise por nome o produto">
	 				<i class="fa-solid fa-bars IMenu" onclick="dropIcon(this, '#moneySearchBar', 'fa-solid fa-bars IMenu', 'fa-sharp fa-solid fa-circle-xmark IMenu', 0)"></i>
	 			</div>
	 			<div class="barB" id="moneySearchBar">
	 				<i class="fa-solid fa-dollar-sign ISearchB"></i>
	 				<input class="barInputB" type="number" name="min" placeholder="minimo de preço" min="0" step="0.010">
	 				<input class="barInputB" type="number" name="max" placeholder="maximo de preço" max="999999,99" step="0.010">
	 			</div>
	 		</div>
	 		<div class="checks">
	 			<div class="botons">
	 				<button class="btnCheck" id="checkBtnA"><i class="fa-solid fa-computer IBtn"></i><input type="checkbox" class="checkbtn" id="checkA"></button>
	 				<button class="btnCheck" id="checkBtnB"><i class="fa-solid fa-shirt IBtn"></i></i><input type="checkbox" class="checkbtn" id="checkB"></button>
	 			</div>
	 			<input class="ocultar" type="checkbox" name="produto">
	 			<input class="ocultar" type="checkbox" name="cosmesticos">
	 		</div>
	 	</form>
		<div class="pages">
			<div class="pag">
				<i class="iconPage fa-sharp fa-solid fa-layer-group"></i>
				<label class="pagNumber">1/56</label>
			</div>
			<div class="page">
				<div class="PgCard">
					<div class="PgCd-Img"></div>
					<div class="PgCd-Data">
						<label class="PgCdDt-Name">name</label>
						<label class="PgCdDt-Price">000000,00</label>
					</div>
				</div>
			</div>
		</div>
	 	<script src="https://kit.fontawesome.com/39cab4bf95.js" crossorigin="anonymous"></script>
	 	<script src="java/java.js"></script>
		<script>
			document.querySelector('#checkA').addEventListener('click', ()=>{
				let div = document.querySelector('#checkBtnA');
				let check = document.querySelector('#checkA');
				if(check.checked){
					div.style.backgroundColor = 'var(--text2Ex)';
				}else{
					div.style.backgroundColor = 'var(--baseEx)';
				}
			});
			document.querySelector('#checkB').addEventListener('click', ()=>{
				let div = document.querySelector('#checkBtnB');
				let check = document.querySelector('#checkB');
				if(check.checked){
					div.style.backgroundColor = 'var(--text2Ex)';
				}else{
					div.style.backgroundColor = 'var(--baseEx)';
				}
			});
		</script>
	</body>
</html>