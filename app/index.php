<?php
    $productosURL = "http://pymesv.com/datos05w/gamestoreapi/productos/lista";
    $variable=file_get_contents($productosURL);
    $variable=json_decode($variable);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
     <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>	
     <link rel="stylesheet" href="css/estilo.css">
       <link href="css/style.css" rel="stylesheet">  
       <link rel="stylesheet" type="text/css" href="css/slick.css">

</head>
<body>
        

	<!-- *********************************************PAGINA 1************************************************ -->
		
		<section id="page1" data-role="page" data-poisition="fixed" data-theme="b" style="background:url('../imagenes/fondo5.jpg');color:white; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
	
			<header data-role="header">
				<h1>Cátalogo de Juegos</h1>
			</header>
				

			<article data-role="content" >
			
				<div class="aa-product-catg-body">
                       <ul class="aa-product-catg">
                        <?php
                        
                        foreach ($variable as $value) 
                          {
                  					
                            echo '<!-- start single product item -->
                                      <li>
                                        <figure>
                                          <a class="aa-product-img" href="#"><img style="width: 150px; height: 300px;" src="http://pymesv.com/datos05w/'.$value->imagen.'" alt="game cover img"></a>
                                          <a class="aa-add-card-btn"href="javascript:void();" data="'.htmlspecialchars(json_encode($value), ENT_QUOTES, 'UTF-8'). '"><span class="fa fa-shopping-cart"></span>Agregar al carrito</a>
                                          <figcaption>
                                            <h4 class="aa-product-title"><a href="#">'.$value->nombre.'</a></h4>
                                            <span class="aa-product-price">'.$value->precio.'</span>
                                            
                                          </figcaption>
                                        </figure>                         
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">Comprar ahora!</span>
                                      </li>';
                          }
                        ?>
                </ul>
              </div>

			  <a href="#page2" data-role="button" data-inline="true">Vamos a la página 2</a>
			</article>
			<div data-role="footer" data-position="fixed"> 
	            <h4>CopyRight@ by MMMReyes</h4> 
           </div> 
       
		</section>

		<!-- ********************************************* FIN PAGINA 1************************************************ -->


		<!-- *********************************************PAGINA 2************************************************ -->
		
		<section id="page2" data-role="page" data-poisition="fixed" data-theme="b" style="background:url('../imagenes/fondo4.jpg');color:white; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
			
			<header data-role="header">
				<h1>Descripción de Juegos a Disposición</h1>
			</header>
			<article data-role="content">
				<div class="aa-product-catg-body">
                       <ul class="aa-product-catg">
                        <?php
                        
                        foreach ($variable as $value) 
                          {
                  					
                            echo '<!-- start single product item -->
                                      <li>
                                        <figure>
                                            <figcaption>
                                            <h4 class="aa-product-title"><a href="#">'.$value->nombre.'</a></h4>
                                            <p class="aa-product-descrip">'.$value->descripcion.'</p>
                                            <a class="aa-product-img" href="#"><img style="width: 100px; height: 200px;" src="http://pymesv.com/datos05w/'.$value->imagen.'" alt="game cover img"></a>
                                          
                                          </figcaption>
                                        </figure>                         
                                        <!-- product badge -->
                                        </li>';
                          }
                        ?>
                </ul>
              </div>
        <a href="#page1" data-role="button" data-inline="true">Regresa a la Página 1</a>
				<a href="#page3" data-role="button" data-inline="true">Ir a la página 3</a>
				
			</article>
			<div data-role="footer" data-position="fixed"> 
	            <h4>CopyRight@ by MMMReyes</h4> 
           </div> 
		</section>

		<!-- ********************************************* FIN PAGINA 2************************************************ -->


		<!-- *********************************************PAGINA 3************************************************ -->
		
		<section id="page3" data-role="page" data-poisition="fixed" data-theme="b" style="background:url('../imagenes/fondo3.jpg');color:white;">
			
			<header data-role="header">
				<h1>Misión</h1>
			</header>
			<article data-role="content">
        <br>
        <br>
        <br>
     <p>Nuestra Misión:
      Satisfacer las necesidades de las personas interesadas en los videojuegos y articulos de novedad, 
      prestandoles el mejor servicio por parte de todo el personal de la empresa, y manteniendo siempre 
      actualizado nuestro catálogo de juegos y articulos para las diferentes plataformas.</p>
      <br>
      <br>
      <br>
			<a href="#page2" data-role="button" data-inline="true">Regresar a la Página 2</a>
      <a href="#page4" data-role="button" data-inline="true">Ir a la página 4</a>
			
		</article>
			<div data-role="footer" data-position="fixed"> 
	            <h4>CopyRight@ by MMMReyes</h4> 
      </div> 
		</section>

		<!-- ********************************************* FIN PAGINA 3************************************************ -->


        <!-- *********************************************PAGINA 4************************************************ -->
		
		<section id="page4" data-role="page" data-poisition="fixed" data-theme="b" style="background:url('../imagenes/fondo2.jpg');color:white;">
			
			<header data-role="header">
				<h1>Visión</h1>
			</header>
			<article data-role="content">
        <br>
        <br>
        <br>
				<p>Llegar a más lugares de la república mexicana e incluso a diferentes partes del mundo, con el mejor servicio a clientes, con los juegos y artículos más nuevos y actualizados y principalmente con la mejor comodidad y seguridad del mundo.
				</p>
        <br>
        <a href="#page3" data-role="button" data-inline="true">Regresar a la Página 3</a>
				<a href="#page5" data-role="button" data-inline="true">Ir a la página 5</a>
				
			</article>
			<div data-role="footer" data-position="fixed"> 
	            <h4>CopyRight@ by MMMReyes</h4> 
           </div> 
		</section>

		<!-- ********************************************* FIN PAGINA 5************************************************ -->

		<section id="page5" data-role="page" data-poisition="fixed" data-theme="b" style="background:url('../imagenes/fondo1.jpg');color:white;">
			
			<header data-role="header">
				<h1>Valores</h1>
			</header>
			<article data-role="content">
        <br>
        <br>
				<p>
          RESPETO: Buscamos constantemente mantener la armonía en la relación con compañeros de trabajo, clientes y proveedores. </p>
          <br>
          <p>LEALTAD: Tenemos un fuerte compromiso y mostramos fidelidad. Hacemos con respeto nuestras responsabilidades y manifestamos confidencialidad en los aconteceres de la Organización.</p>
          <br> 
          <p>HONESTIDAD: Siendo íntegros para recibir a cambio la confianza de clientes internos y externos. </p>
          <br>
          <p>RESPONSABILIDAD: Cumplimos de manera oportuna y precisa con las actividades propias de cada puesto para escalar y llegar a las metas fijadas.</p> 
          <br>
          <p>COMPROMISO: Nos dedicamos a llegar al objetivo establecido y cumplimos responsablemente con las actividades propias del puesto. </p>
          <br>
          <p>INNOVADOR: Promovemos el cambio permanente en nuestros procesos, productos y servicios como el medio más importante para estar cumpliendo las expectativas de nuestros clientes.</p>
				  <br>
        <a href="#page4" data-role="button" data-inline="true">Regresar a la Página 4</a>
				
			</article>
			<div data-role="footer" data-position="fixed"> 
	            <h4>CopyRight@ by MMMReyes</h4> 
           </div> 
		</section>

		<!-- ********************************************* FIN PAGINA 5************************************************ -->

	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>

  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="resources/js/custom.js"></script>
  <script>
    $(document).ready(function () {

      var total=0;
    $(".aa-add-card-btn").on("click",function(e){
    e.preventDefault();
    var _data = $(this).attr("data");
    console.log(_data);
    var jsonData = JSON.parse(_data);
    if(jsonData.client!==null){
        //ajax request.... 
    $.ajax({
      type: "POST",
      url: 'http://pymesv.com/datos05w/gamestoreapi/agregar_carrito/lista',
      data: {jsonData: jsonData},
      dataType: "json",
      success: function(data)
      {
		$('.error').html(data); 
        //add too checkout
		$(".aa-cartbox-summary ul").append('<li><a class="aa-cartbox-img" href="#"><img src="http://pymesv.com/datos05w/'+jsonData.imagen+'" alt="img">'+
                          '</a>  <div class="aa-cartbox-info">'+
                          '<h4><a href="#">'+jsonData.nombre+'</a></h4>'+
                          '<p>1 x '+jsonData.precio+'</p>'+
                        '</div>'+
                      '</li>');
    total=parseInt(total)+parseInt(jsonData.precio);
    $('.aa-cartbox-total-price').text('$'+total);
      },
      error: function(data)
      {
		  $(".aa-cartbox-summary ul").append('<li><a class="aa-cartbox-img" href="#"><img src="http://pymesv.com/datos05w/'+jsonData.imagen+'" alt="img">'+
                          '</a>  <div class="aa-cartbox-info">'+
                          '<h4><a href="#">'+jsonData.nombre+'</a></h4>'+
                          '<p>1 x '+jsonData.precio+'</p>'+
                        '</div>'+
                      '</li>');
		$('.error').html(data);
			console.log(data);
        console.log("error");
      }

    });
    }
       
    });

    });
  </script>



</body>
</html>