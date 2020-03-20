        var i = 1;
	function zmianaforografii() {

    	setTimeout(function () {

    		if(i == 5)
    		{
                        
    			var foto = "./wp-content/themes/STRONAPROJEKT/img/zdjecie_name"+i+".jpg";
    			document.getElementById("box").innerHTML = "<img class='fotojs' src='"+foto+"' alt='change fotos'>"; 
    			i = 1;
    		}
    		else {
    			var foto = "./wp-content/themes/STRONAPROJEKT/img/zdjecie_name"+i+".jpg";
    			document.getElementById("box").innerHTML = "<img class='fotojs' src='"+foto+"' alt='change fotos'>";
    			i++;
    		}
        	zmianaforografii();

    	}, 4000);
	}