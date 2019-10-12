function loadComponent(url, divCarga){

    $.ajax({
        type:"POST",
        url:url,
        dataType:"html",
        data:$(this).serialize(),
        beforeSend:function(){
            //imagenesCarga();
        },
        error: function(response, quepaso, otroobj){
            alert('error recargando la pagina');
//            console.log(response);
        },
        success:function(response){
          
            $(divCarga).html(response);
            
           
        }
    });
    //return false;
}

   

function recargaPagina(url, divCarga){

    $.ajax({
        type:"POST",
        url:url,
        dataType:"html",
        data:$(this).serialize(),
        beforeSend:function(){
            //imagenesCarga();
        },
        error: function(response, quepaso, otroobj){
            alert('error recargando la pagina');
//            console.log(response);
        },
        success:function(response){
          
            $(divCarga).html(response);
            var map = document.getElementById('map-main');
            alert("ajax success")
            if (typeof (map) != 'undefined' && map != null) {
                //google.maps.event.addDomListener(window, 'load', mainMap);
                
                mainMap();
            }else{
                alert("ajax error ")
            }
           
        }
    });
    //return false;
}

function elimiarActividad(url, diveliminar){
    $.ajax({
        type:"POST",
        url:url,
        dataType:"html",
        data:$(this).serialize(),
        beforeSend:function(){
            //imagenesCarga();
        },
        error: function(response, quepaso, otroobj){
            alert('errooor');
        },
        success:function(response){
           console.log(response);
            $(diveliminar).hide(5000);
            $(diveliminar).remove();
            
           
        }
    });
    return false;
}

//Abre los formularios con ajax y envia los datos de un formulario especifico


//Carga de formularios en base a otro eniado
function agregarComentario(url, formulario, divCarga){

    $.ajax({
        type:"POST",
        url:url,
        dataType:"html",
        data:$(formulario).serialize(),
        beforeSend:function(){},
        error: function(response, quepaso, otroobj){
            alert(quepaso);
            
        },
        success:function(response){
            console.log(response);
            var dataComent = response.split(",");
            $('#lista-comentarios-actividad-'+dataComent[4]+'').append('<div class="sl-item">'+
                                                '<div class="sl-left">'+
                                                   ' <img src="'+dataComent[3]+'" class="img-circle">'+
                                                '</div>'+
                                                '<div class="sl-content">'+
                                                   ' <div class="sl-date text-muted">'+dataComent[1]+'</div>'+
                                                   ' <p>'+dataComent[0]+'</p>'+
                                                '</div>'+
                                              '</div>');
          
            //$(divCarga).html(response);
        }
    });
    return false;
}

//Carga de formularios en base a otro eniado
function enviaFomularioCarga(url, formulario, divCarga){

    $.ajax({
        type:"POST",
        url:url,
        dataType:"html",
        data:$(formulario).serialize(),
        beforeSend:function(){
            imagenesCarga();
        },
        error: function(response, quepaso, otroobj){
            alert(quepaso);
            error();
        },
        success:function(response){
            
            $(divCarga).html(response);
            
            imagenesFinCarga();
        }
    });
    return false;
}

function enviaFomularioRecargaPagina(url, formulario, divCarga, divMensajes, urlRecarga){

    $.ajax({
        type:"POST",
        url:url,
        dataType:"html",
        data:$(formulario).serialize(),

        beforeSend:function(){
           // imagenesCarga();
           console.log($(formulario).serialize());
        },
        error: function(response, quepaso, otroobj){
            var title = 'Operación Terminada';
            var text = 'Sin Exito';
            alert('Error...');
            console.log(response);
            console.log(quepaso);
            console.log(otroobj);
            //$.pnotify({title: title, text: text, opacity: .8, type: 'error'}); 
        },
        success:function(response){
            $(divMensajes).html(response);
            recargaPagina(urlRecarga, divCarga);
            
           // imagenesFinCarga();
          
            var title = 'Operación Terminada';
            var text = 'Con Exito';
            alert(text+' '+title);
           // $.pnotify({title: title, text: text, opacity: .8, type: 'success'});            

        }
    });
    return false;
}

function enviaFormularioArchivo(url, formulario, divMensajes){
    //Envio del formulario
    var formularioFile = dataForm(formulario);

    $.ajax({
        contentType: false,
        processData: false,
        data: formularioFile,                         // Setting the data attribute of ajax with file_data
        type: 'post',
        url:url,
        beforeSend:function(){
            imagenesCarga();
        },
        error: function(response, quepaso, otroobj){
            error();
            var title = 'Operación Terminada';
            var text = 'Sin  Exito';
            $.pnotify({title: title, text: text, opacity: .8, type: 'error'});
        },
        success:function(response){
            
            $(divMensajes).html(response);
            
            imagenesFinCarga();
            
            
            var title = 'Operación Terminada';
            var text = 'Con Exito';
            $.pnotify({title: title, text: text, opacity: .8, type: 'success'}); 
        }
    });
}

function enviaFormularioArchivoRecargaPagina(url, formulario, divCarga, divMensajes, urlRecarga){

    //Envio del formulario
    var formularioFile = dataForm(formulario);

    $.ajax({
        contentType: false,
        processData: false,
        data: formularioFile,                         // Setting the data attribute of ajax with file_data
        type: 'POST',
        url:url,
        beforeSend:function(){
            //alert('Antessss');
        },
        error: function(response, quepaso, otroobj){
            alert('errrooooor')
        },
        success:function(response){
            
            $(divMensajes).html(response);
            //window.location.replace(urlRecarga);
           // recargaPagina(urlRecarga, divCarga);                        
            
        }
    });
}

function dataForm(formulario){
    
    var nuevoFormulario = new FormData();   
    
    $(document).ready(function(){
        $(formulario).find(':input').each(function() {
            var elemento= this;
            
            
            //Si recibe tipo archifo 'file'
            if(elemento.type === 'checkbox'){
                if(elemento.checked)
                    nuevoFormulario.append(elemento.name, elemento.value);
            }
            else if(elemento.type === 'file'){
                if(elemento.value !== ''){
                    archivo = $('#'+elemento.id).prop("files")[0]; 
                    nuevoFormulario.append(elemento.name, archivo);
                }
            }
            else if(elemento.type === 'text'){
                nuevoFormulario.append(elemento.name, elemento.value);
            }
            else if(elemento.type === 'radio'){
                if(elemento.checked)
                    nuevoFormulario.append(elemento.name, elemento.value);
            }
            else if(elemento.type === 'number'){
                nuevoFormulario.append(elemento.name, elemento.value);
            }
            else if(elemento.type === 'email'){
                nuevoFormulario.append(elemento.name, elemento.value);
            }
            else if(elemento.type === 'month'){
                nuevoFormulario.append(elemento.name, elemento.value);
            }
             else if(elemento.type === 'date'){
                nuevoFormulario.append(elemento.name, elemento.value);
            }
            else if(elemento.type === 'password'){
                nuevoFormulario.append(elemento.name, elemento.value);
            }
        });
        //Analiza todos los select que existen en el formulario
        $(formulario).find('select').each(function() {
            var elemento= this;
            var selectedArray = [];
            for(i = 0; i < elemento.options.length; i++ ){
                if (elemento.options[i].selected) 
                    selectedArray.push(elemento.options[i].value);
            }
            nuevoFormulario.append(elemento.name, selectedArray);
        });
        
        $(formulario).find('textarea').each(function() {
            var elemento= this;
            nuevoFormulario.append(elemento.name, elemento.value);
        });
        
    });
    
    return nuevoFormulario;
}


function envia_Formulario_Multiples_Archivos_Recarga_Pagina(url, formulario, divCarga, divMensajes, urlRecarga){

    //Envio del formulario
    var formularioFile = dataForm_Archivos(formulario);

    $.ajax({
        contentType: false,
        processData: false,
        data: formularioFile,                         // Setting the data attribute of ajax with file_data
        type: 'post',
        url:url,
        beforeSend:function(){
            imagenesCargaFtos();
        },
        error: function(response, quepaso, otroobj){
            var text = 'Sin Exito';
            alert(text);
        },
        success:function(response){
            
//            $(divMensajes).html(response);
//            cargaFormularios(urlRecarga, divCarga);
            
            imagenesFinCargaFotos();
             
            var title = 'Operación Terminada';
            var text = 'Con Exito';
           alert(text); 
        }
    });
}




function dataForm_Archivos(formulario){
    
   
    var nuevoFormulario = new FormData();   
    
    $(document).ready(function(){
        $(formulario).find(':input').each(function() {
            var elemento= this;
            
            
            
            //Si recibe tipo archifo 'file'
            if(elemento.type === 'checkbox'){
                if(elemento.checked)
                    nuevoFormulario.append(elemento.name, elemento.value);
            }
            
            else if(elemento.type === 'file'){
                if(elemento.value !== ''){
                    
                        for(var i=0; i< $('#'+elemento.id).prop("files").length; i++){
                                nuevoFormulario.append(elemento.name, $('#'+elemento.id).prop("files")[i]);
                        }

                }
            }
            else if(elemento.type === 'text'){
                nuevoFormulario.append(elemento.name, elemento.value);
            }
            else if(elemento.type === 'radio'){
                if(elemento.checked)
                    nuevoFormulario.append(elemento.name, elemento.value);
            }
            else if(elemento.type === 'number'){
                nuevoFormulario.append(elemento.name, elemento.value);
            }
            else if(elemento.type === 'email'){
                nuevoFormulario.append(elemento.name, elemento.value);
            }
            else if(elemento.type === 'month'){
                nuevoFormulario.append(elemento.name, elemento.value);
            }
             else if(elemento.type === 'date'){
                nuevoFormulario.append(elemento.name, elemento.value);
            }
            else if(elemento.type === 'password'){
                nuevoFormulario.append(elemento.name, elemento.value);
            }
        });
        //Analiza todos los select que existen en el formulario
        $(formulario).find('select').each(function() {
            var elemento= this;
            var selectedArray = [];
            for(i = 0; i < elemento.options.length; i++ ){
                if (elemento.options[i].selected) 
                    selectedArray.push(elemento.options[i].value);
            }
            nuevoFormulario.append(elemento.name, selectedArray);
        });
        
        $(formulario).find('textarea').each(function() {
            var elemento= this;
            nuevoFormulario.append(elemento.name, elemento.value);
        });
        
    });
    
    return nuevoFormulario;
}




function imagenesCargaFtos(){
    
    //$("#loaderFotos").show();
    
  
    
    
}


function imagenesFinCargaFotos(){
    $("#loaderFotos").hide();
    

   
}
function imagenesCarga(){
    
    $("#loading").show();
    
    if($("#loadingModal").length)
        $("#loadingModal").show();
    
    $(function() {
        $( "#loadingModal" ).dialog({
          modal: true
        });
    });
}

function imagenesFinCarga(){
    $("#loading").hide();
    
    if($("#loadingModal").length)
        $("#loadingModal").dialog( "close" );
}

function cambiarLocacion(url){
    window.location = url;
}

function error(){
    /*
    document.getElementById("cargaInformacion").innerHTML = "";
    var imagen= document.createElement("img"); //creas un elemento de imagen.
     imagen.setAttribute("src", "../Recursos/Imagen Error.png");
     document.getElementById("cargaInformacion").appendChild(imagen);
     
     cerrarVentanaEmergente();
     */
}

function consultaMunicipios(){
 
    idEstado = document.getElementById('estados').value;
    
    selectMunicipios = document.getElementById('municipio');
    selectMunicipios.options.length = 0;
    
     $.ajax({
        url:'../Controller/json/Generales.php?idEstado='+idEstado, 
        dataType:"json",
        async: false,
        error: function(response, quepaso, otroobj){
            alert("error");
        },
        success:function(response){
            for (var i = 0; i < response.length; i++)
                selectMunicipios.options[i] = new Option(response[i]['nombre'], response[i]['id'],"0");
         
        }  
    }); 
    
   
}

       function consultaColegios(){
  
   var contrato_id = document.getElementById('contrato').value;
   
      
//          CARGA EL DIV COLEGIOS EN UN ARCHIVO DIFERENTE EL CUAL CONTENIENE LOS COLEGIOS ASOCIADOS AL CONTRATO_ID ENVIADO POR URL
            cargaFormularios('../View/Planificacion/Colegios.php?contrato_id='+contrato_id,'#colegios');
    
   
    }
    
    function carga_divs_consolidados()
    {
                    cargaFormularios('../View/Planificacion/Resumenes_Consolidados/ConsolidadoMinutas.php','#ConsoMinuta');
                    
    }
    
    function AsignarMinuta(radioMinutas)
    {
      minuta=radioMinutas.value;
      
      if(minuta !=null)
     
         cargaFormularios('../View/Planificacion/AsignacionFecha.php?minuta='+minuta,'#MenusMinuta');
    }
    
    
//   @@@@@@@@@@@@@--CALENDARIO--@@@@@@@@@@

function calndario(){
    /*
    
        var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();
        
           $.ajax({
        url:'../Controller/json/CargaFechasCalendario.php', 
        dataType:"json",
        async: false,
        error: function(response, quepaso, otroobj){
            alert("error calendario");
        },
        success:function(response){*/
      
    //  for (var i = 0; i < response.length; i++)
    
    otrosEventos = [{"title":"Volkswagen Passat","start":"2013-04-28"},{"title":"Seat Alhambra","start":"2013-04-21"},{"title":"Ford  Focus","start":"2011-04-20"},{"title":"BMW  5-Serie","start":"2011-04-20"},{"title":"Ford  Mondeo","start":"2011-04-20"},{"title":"Volkswagen Caddy","start":"2011-04-20"},{"title":"Opel  Zafira","start":"2011-04-18"},{"title":"Mazda  3","start":"2011-04-14"},{"title":"Opel  Vectra","start":"2011-04-14"},{"title":"Peugeot  207","start":"2011-04-14"}];
var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();
$('.calendar').fullCalendar({
    header: {
			left: 'prev,next',
			center: 'title',
			right: 'month,basicWeek,basicDay'
		},
   editable: true,

        events: '../Controller/json/CargaFechasCalendario.php'
});
	
    
    
}


//////////////////////
