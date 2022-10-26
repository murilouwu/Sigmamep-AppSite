//ocultar lista de div
function mostrar(ocu, chave){

	//loop de ocultamento
	for (var i=0; i<ocu.length; i++){
		
		//enquanto i for menor que a chave
		if (i<chave){
			//oculta
			ocultar(ocu[i], 0);	
		}else{
			//mostra
			ocultar(ocu[i], 1);
		};

	};
};

//ocultar one div
function ocultar(obj, es){
	
	//pegar a div
	let div = document.querySelector(obj);
	
	//verificar se quer se ocultado
	if(es==1){
		//mostrar
		div.style.display = 'flex';
	}else{
		//ocultar
		div.style.display = 'none';
	};
};

//dropdown java bro
function drop(bt, id, fun){

	//variavel para deixar no onclick mudando o fun
	var res = 0;

	//pegar o que vai mostrar
	let drop = document.querySelector(id);

	//decide se oculta ou mostra
	if(fun==0){
		//mudar res
		res=1;
		//mostra
		drop.style.display = 'flex';
	}else{
		//oculta
		drop.style.display = 'none';
	};

	//var para onclick
	let onclick = "drop(this,'"+id+"',"+res+")";
	
	//definir onclick
	bt.setAttribute('onclick', onclick);
}

//dropdown java bro
function drop2(bt, id, id2, fun){
	//variavel para deixar no onclick mudando o fun
	let res;
	//texto para colocar todos os ids no onclick começando por abrir []
	let textA = "[";
	let textB  = "[";
	//para o res ser sempre diferente do res
	if(fun==0){
		res = 1;
	}else{
		res = 0;
	}
	//loop de mostrar divs
	for (var i=0; i<id.length; i++){
		let drop = document.querySelector(id[i]);
		//verificar
		if(fun==0){
			//mostra
			drop.style.display = 'flex';
		}else{
			//oculta
			drop.style.display = 'none';
		};
		//adicionar para a var textoA
			if(i==0){
				textA += "'"+id[i]+"'";
			}else{
				textA += ",'"+id[i]+"'";
			};
	};
	//fechando[]
	textA += "]";
	//loop de ocultar outras divs
	for (var i=0; i<id2.length; i++){
		//peguar id
		let drop = document.querySelector(id2[i]);
		//verificar
		if(fun==0){
			//oculta
			drop.style.display = 'none';
		};
		//adicionar para a var textoA
		if(i==0){
			textB += "'"+id2[i]+"'";
		}else{
			textB += ",'"+id2[i]+"'";
		};
	};
	textB += "]";
	//var para onclick
	let onclick = "drop2(this,"+textA+", "+textB+", "+res+")";	
	//definir onclick
	bt.setAttribute('onclick', onclick);
}
//mudar pagina
function red(page){
	//mudar pagina
	window.location = page;
}
//mudar class
function altClass(bt, newClass, oldClass){
	let clasA = "";
	let clasB = "";
	for (var i=0; i < oldClass.length; i++) {
		bt.classList.remove(oldClass[i]);
		if(i = 0){
			clasA += "'"+oldClass[i]+"'";
		}else{
			clasA += ", '"+oldClass[i]+"'";
		}
	}
	for (var i=0; i < newClass.length; i++) {
		bt.classList.add(newClass[i]);
		if(i = 0){
			clasB += "'"+newClass[i]+"'";
		}else{
			clasB += ", '"+newClass[i]+"'";
		}
	}

    let onclick = "altClass(this, ["+clasA+"], ["+clasB+"])";
    bt.setAttribute('onclick', onclick);
}