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
	 				<button class="Nvlink" onclick="red('index.php')">HOME</button>
	 				<button class="Nvlink" onclick="red('login.php')">PERFIL</button>
	 			</div>
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
	 				<i class="fa-solid fa-computer btnCheck" id="btncheck0" onclick="backColorcheck('btncheck0', 'var(--WhiteBrown)', 'var(--Gray)')"></i>
	 				<i class="fa-solid fa-shirt btnCheck" id="btncheck1" onclick="backColorcheck('btncheck1', 'var(--WhiteBrown)', 'var(--Gray)')"></i>
	 			</div>
	 			<input class="ocultar" type="checkbox" name="produto">
	 			<input class="ocultar" type="checkbox" name="cosmesticos">
	 		</div>
	 	</form>
		<div class="pages">
			<div class="pag">
				<i class="iconPage fa-sharp fa-solid fa-layer-group"></i>
				<label class="pagNumber">34/56</label>
			</div>
			<div class="page">
				<div class="PgCard">
					<div class="PgCd-Img"></div>
					<div class="PgCd-Data">
						<label class="PgCdDt-Name">name</label>
						<label class="PgCdDt-Price">000000,00</label>
					</div>
				</div>
				<div class="PgCard">
					<div class="PgCd-Img"></div>
					<div class="PgCd-Data">
						<label class="PgCdDt-Name">name</label>
						<label class="PgCdDt-Price">000000,00</label>
					</div>
				</div>
				<div class="PgCard">
					<div class="PgCd-Img"></div>
					<div class="PgCd-Data">
						<label class="PgCdDt-Name">name</label>
						<label class="PgCdDt-Price">000000,00</label>
					</div>
				</div>
				<div class="PgCard">
					<div class="PgCd-Img"></div>
					<div class="PgCd-Data">
						<label class="PgCdDt-Name">name</label>
						<label class="PgCdDt-Price">000000,00</label>
					</div>
				</div>
				<div class="PgCard">
					<div class="PgCd-Img"></div>
					<div class="PgCd-Data">
						<label class="PgCdDt-Name">name</label>
						<label class="PgCdDt-Price">000000,00</label>
					</div>
				</div>
				<div class="PgCard">
					<div class="PgCd-Img"></div>
					<div class="PgCd-Data">
						<label class="PgCdDt-Name">name</label>
						<label class="PgCdDt-Price">000000,00</label>
					</div>
				</div>
				<div class="PgCard">
					<div class="PgCd-Img"></div>
					<div class="PgCd-Data">
						<label class="PgCdDt-Name">name</label>
						<label class="PgCdDt-Price">000000,00</label>
					</div>
				</div>
				<div class="PgCard">
					<div class="PgCd-Img"></div>
					<div class="PgCd-Data">
						<label class="PgCdDt-Name">name</label>
						<label class="PgCdDt-Price">000000,00</label>
					</div>
				</div>
			</div>
			<div class="pags">
				<button class="pagbutton">01</button>
				<label class="pontospag">...</label>

				<button class="pagbutton">30</button>
				<button class="pagbutton">31</button>
				<button class="pagbutton">32</button>
				<button class="pagbutton">33</button>
				<button class="pagbutton pagEs">34</button>
				<button class="pagbutton">35</button>
				<button class="pagbutton">36</button>
				<button class="pagbutton">37</button>
				<button class="pagbutton">38</button>

				<label class="pontospag">...</label>
				<button class="pagbutton">56</button>
			</div>
		</div>
	 	<script src="https://kit.fontawesome.com/39cab4bf95.js" crossorigin="anonymous"></script>
	 	<script src="java/java.js"></script>
	</body>
</html>