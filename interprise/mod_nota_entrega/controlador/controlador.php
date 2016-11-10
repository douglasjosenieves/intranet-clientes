 
  <script type="text/javascript">



 



  $(document).ready(function() {

$("body").on("click",".arti",function(event){
  event.preventDefault();
  alert('hola');
  /* Act on the event */
});
  

      $('.cargando').hide();
$('#id_cat').val('<?php echo $data['data'][0]['id_cat'] ?>').change();
$('#estado').val('<?php echo $data['data'][0]['estado'] ?>').change();
$('#stock').val('<?php echo $data['data'][0]['stock'] ?>').change();

    
   var imgr = $('#imgRemover').val();

   if (imgr=='') {
 $('#imgRemover').remove();
   }
  
$('#borrar-img').on('click',  function(event) {
  event.preventDefault();
  $.ajax({
url: "imagen_borrar.php",
type: "POST",
data: { "name" : '<?php echo $img[0] ?>' }
});
$('#img_muestra').hide();
 $('#imgRemover').remove();
alert('Borrado');
  /* Act on the event */
});
   



   
  });

/*========================================
=            Buscar clientes            =
========================================*/


$(document).ready(function() {
  

$('#buscar').on('keyup',  function(event) {
  event.preventDefault();
  buscarArticulos($(this).val());
  /* Act on the event */
});


function buscarArticulos(texto) {


$.ajax({
  url: '../mod_clientes/async/buscar.php',
  type: 'POST',
 
  data: {parametro: texto},
})
.done(function(data) {
  console.log("success");
  $('#resultado_busqueda').html(data);
//alert(data);

})
.fail(function() {
  console.log("error");
})
.always(function() {
  console.log("complete");
});

  
}

});
/*=====  End of Buscar clientes  ======*/



 



/*========================================
=            Buscar items            =
========================================*/


$(document).ready(function() {
  

$('.buscarItems').on('keyup',  function(event) {
  event.preventDefault();
  buscarArticulos($(this).val());
  /* Act on the event */
});


function buscarArticulos(texto) {


$.ajax({
  url: '../mod_inventario/async/buscar_detalle.php',
  type: 'POST',
 
  data: {parametro: texto},
})
.done(function(data) {
  console.log("success");
  $('.respuestaItems').html(data);
//alert(data);

})
.fail(function() {
  console.log("error");
})
.always(function() {
  console.log("complete");
});

  
}

});
/*=====  End of Buscar items  ======*/


 




  /*==========================================================
=            AJAX REQUES        =
==========================================================*/

$(document).ready(function() {



$('#formulario').on('submit',  function(event) {
    event.preventDefault();
    
       content();
 var question_html = $('#question_html').val();
if (question_html == '') {
alert('Describa una descripción!');
return true
    }
 


 
//alert('aaa');
$('.cargando').show();
$.ajax({
    url: '<?php echo $url; ?>',
    type: 'POST',
 
    data: $('#formulario').serialize(),
})
.done(function(data) {
    console.log("success");
    console.log(data);

   
    if (data==1) {

swal({ 
  title: "Enviado!",
   text: "Se ha procesado con éxito!",
    type: "success" 
  },
  function(){
 $('#formulario')[0].reset();
location.reload();
});

}

 

else {

sweetAlert("Oops...", "Consulte este error con su programador!", "error");
}

 


 
})
.fail(function() {
    console.log("error");
sweetAlert("Oops...", "Consulte este error con su programador!", "error");
})
.always(function() {
    console.log("complete");
$('.cargando').hide();

});



});



});

/*=====  AJAX  ======*/
 

  
  
  
    tinymce.init({
  selector: '#mytextarea',
  height: 200,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
 
});

function content() {
  //alert(tinyMCE.get('mytextarea').getContent());
  $('#question_html').val(tinyMCE.get('mytextarea').getContent());
}




</script>

 





 