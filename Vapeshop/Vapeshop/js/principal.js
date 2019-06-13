/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


	function validarEdad(){
	var valor =confirm ("¿Eres mayor de edad?");
     if (valor == true){
          alert ("Has presionado mayor de edad");
     }else{
         
          window.location.replace("https://www.google.com");
     }

 }

 function validarEdadBonito(){
 	alertify.confirm("Confirmacion de edad","¿Eres mayor de edad?",
  function() {
    alertify.success('Puede acceder a esta página');
  },
  function() {
    alertify.error('No puede acceder a esta pagina');
     window.location.replace("https://www.google.com");
 	 }
	).set('labels',{ok:"Si",cancel:"No"});
 }
 //JQUERY OCULTAR BOTON
 	$(document).ready(function(){
 		$("#logID").click(function(){
 			$(".oculto").toggle();
      $("#registrarseOculto").toggle();
 			$("#reg").toggle();
 				if($("#reg").is(":hidden")){
 						$("#logID").html("Identifiquese mas tarde");
 				}else{
						$("#logID").html("Identifiquese");
 				}

 	});
    $("#reg").click(function(){
      $(".oculto").toggle();
      $("#loginOculto").toggle();
      $("#logID").toggle();
        if($("#logID").is(":hidden")){
            $("#reg").html("Registrarse mas tarde");
        }else{
            $("#reg").html("Registrarse");
        }

  });











    $(".cantidad").keyup(function(e){
      if($(this).val()!=''){
        if(e.keycode==13){
          var id=$(this).attr('data-id');
          var precio = $(".subprecio").val();
          var cantidad=$(".cantidad").val();
          $(this).parentsUntil('.producto').find('.subtotal').text('Subtotal : '(precio+cantidad));
            $.post('./js/modificarDatos.php'),{
              Id:id,
              Precio:precio,
              Cantidad:cantidad
            },function(e){
                $("#total").text("Total :" +e);
            }
        }
        
      }
        });
    });