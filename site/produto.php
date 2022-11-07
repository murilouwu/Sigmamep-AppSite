<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/cssProduto.css">
	<link rel="shortcut icon" href="imgs/logo.png">
	<title>Home</title>
</head>
<body>
	<div class="topo-nav">
		<div class="topo-nvlogo" onclick="red('adm.php')"></div>
		<div class="topo-nvlinks">
			<button class="Nvlink" onclick="red('perfil.php')">PEDIDOS</button>
			<button class="Nvlink" onclick="red('perfil.php')">PERFIL</button>
			<button class="Nvlink" onclick="red('search.php')">PRODUTOS</button>
			<button class="Nvlink" onclick="red('search.php')">COSMÉTICOS</button>
		</div>
		<i class="fa-solid fa-magnifying-glass NvLupa" onclick="red('search.php')"></i>
		<button class="topo-nvLogin" onclick="red('login.php')">SIGN IN OR LOGIN</button>
	</div>
	<div class="product">
		<div class="produtoUseble">
			<div class="produtoImgs">
				<div class="outerImgsProd">
					<div class="OutImgProd"></div>
					<div class="OutImgProd"></div>
					<div class="OutImgProd"></div>
				</div>
				<div class="ImgProduct"></div>
			</div>
			<div class="produtoSell">
				<div class="productSellInfo">
					<div class="pdtSelInfos">
						<div class="price">
							<label class="priceText"><h5>R$</h5>100.000,00</label>
							<div class="nota">
								<!--icons-->
							</div>
						</div>
						<div class="adverbe">
							<!--icons-->
						</div>
						<div class="theme">
							<!--icons-->
						</div>
					</div>
					<div class="textTecnic">
						<p class="tecnicP">...</p>
					</div>
				</div>
				<div class="productSellBtn">
					<button class="pdtSlbtn">Comprar</button>
				</div>
			</div>
		</div>
		<div class="produtoDes">
			<div class="desFormProduct">
			</div>
			<div class="comentProduct">
				<div class="comentProductScroll">
					<div class="comentCard">
						<div class="TopComentCard">
							<h1 class="nickCard">name</h1>
							<div class="notaComent">
								<!--icons star-->
							</div>
						</div>
						<div class="ToBodyComentCard">
							<div class="imgPerfilComent"></div>
							<div class="comentCardInfo">
								<p class="PerfilComentCom">...</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 	<script src="https://kit.fontawesome.com/39cab4bf95.js" crossorigin="anonymous"></script>
 	<script src="java/java.js"></script>
</body>
</html>