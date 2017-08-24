//==>>Inicio de los Rubros<<==
//creamos una funcion para listar atravez de ajax
function listarRubro(){
	$.ajax({
		type:'get',
		url:'/mos_rubros',
		success: function(data){
			$('#listar-rubro').empty().html(data);
		}
	});
}
//creamos la paginacion usando ajax
//dentro del documento se produce un click en la clase pagination
$(document).on("click",".pagination li a",function(e){
	//se produce un evento
	e.preventDefault();
	var url = $(this).attr("href");
	$.ajax({
		type:'get',
		url:url,
		success:function(data){ //data contiene toda la informacion generada
			$("#listar-rubro").empty().html(data);
		}
	});
});		
//ACTUALIZAR-
//creamos la function para mostrar datos en el modal. y esta va en boton editar 
function MostrarRubro(id){
	var route = "rubros/"+id+"/edit";
	$.get(route, function(data){
		//alert(id);
		$("#id").val(data.id);
		$("#descripcion").val(data.descripcion);
		$("#cantidad").val(data.cantidad);
		$("#costo").val(data.costo);
		$("#tipo").val(data.tipo);
	});
}
//btn para actualizar con ajax
$("#actualizarRubro").click(function(){
	//recuperamos la informacion del modal atravez de los id
	var id = $("#id").val();
	var descripcion = $("#descripcion").val();
	var cantidad = $("#cantidad").val();
	var costo = $("#costo").val();
	var tipo = $("#tipo").val();
	var route = "rubros/"+id+"";
	var token = $("#token").val();
	$.ajax({
		url:route,
		headers:{'X-CSRF-TOKEN':token},
		type:'PUT',
		dataType:'json',
		data:{descripcion:descripcion,cantidad:cantidad,costo:costo,tipo:tipo},
		success:function(data){
			//si es true la informacion es actualizada
			if(data.success == 'true'){
				listarRubro();
				//despues de actualizar desaperece la ventana
				$("#myModal").modal('toggle');
				//pintamos un mensaje
				$("#message-update").fadeIn();
				$("#message-update").show().delay(3000).fadeOut(3);
			}
		},
		/*error:function(data){
			$("#error").html(data.responseJson.nombre);
			$("#message-error").fadeIn();
			if(data.status == 422){
				console.clear();
			}
		}*/
	});
});
//Funcion para Guardar Rubro
$("#guardarRubro").click(function(event){
	var descripcion = $("#adddescripcion").val();
	var cantidad = $("#addcantidad").val();
	var costo = $("#addcosto").val();
	var tipo = $("#addtipo").val();
  	//recuperamos la informacion del token
  	var token = $("input[name=_token]").val();
  	//la ruta donde se envia la informacion del formulario
  	var route = "/rubros";
    $.ajax({
     	url:route,
      	headers:{'X-CSRF-TOKEN':token},
      	type:'POST',
      	datatype:'json',
      	data:{descripcion:descripcion,cantidad:cantidad,costo:costo,tipo:tipo},
      	success:function(data){
			if(data.success=='true'){
                //alert('Se registro');
            	listarRubro();
            	$("#myModalCreate").modal('toggle');
            	$("#message-save").fadeIn();
        	}
    	},
        //aqui atrapamos los errores una vez validados atraves de un request
       	error:function(data){
            //obtenemos el mensaje de validacion console.log(data.responseJSON.nombre);
            $("#message-error").fadeIn();
            $("#message-error").show().delay(3000).fadeOut(3);
        },
    });
});
//==>>Fin Rubros<<==

//==>>Inicio Colores<<==
function listarColores(){
	$.ajax({
		type:'get',
		url:'lisColores',
		success: function(data){
		$('#listar-colores').empty().html(data);
		}
	});
}	
$(document).on("click",".pagination li a",function(e){
	//se produce un evento
	e.preventDefault();
	var url = $(this).attr("href");	
	$.ajax({
		type:'get',
		url:url,
		success:function(data){ //data contiene toda la informacion generada
			$("#listar-colores").empty().html(data);
		}
	});
});	
function MostrarColor(id){
	var route = "colores/"+id+"/edit";
	$.get(route, function(data){
		$("#id").val(data.id);
		$("#color").val(data.color);
	});
}
//-->>btn para actualizar con ajax
$("#actualizarColor").click(function(){
	//recuperamos la informacion del modal atravez de los id
	var id = $("#id").val();
	var color = $("#color").val();	
	var route = "/colores/"+id+"";
	var token = $("#token").val();
	$.ajax({
		url:route,
		headers:{'X-CSRF-TOKEN':token},
		type:'PUT',
		dataType:'json',
		data:{color:color}, 
		success:function(data){
			//si es true la informacion es actualizada
			if(data.success == 'true'){
				listarColores();
				//despues de actualizar desaperece la ventana
				$("#myModal").modal('toggle');
				//pintamos un mensaje
				$("#message-update").fadeIn();
				$("#message-update").show().delay(3000).fadeOut(3);
			}
		},
	});
});	
//Funcion para Guardar Color
$("#guardarColor").click(function(event){	
  	var color = $("#addcolor").val();
  	//recuperamos la informacion del token
  	var token = $("input[name=_token]").val();
  	//la ruta donde se envia la informacion del formulario
  	var route = "/colores";
      $.ajax({
     	url:route,
      	headers:{'X-CSRF-TOKEN':token},
      	type:'POST',
      	datatype:'json',
      	data:{color:color},
        	success:function(data){
				if(data.success=='true'){
                	//alert('Se registro');
            		listarColores();
            		$("#myModalCreate").modal('toggle');
            		$("#message-save").fadeIn();
        		}
    		},
        	//aqui atrapamos los errores una vez validados atraves de un request
       		error:function(data){
            	//obtenemos el mensaje de validacion console.log(data.responseJSON.nombre);
            	$("#message-error").fadeIn();
            	$("#message-error").show().delay(3000).fadeOut(3);
        },
    });
});
//==>>Fin de Colores<<==

//==>>Inicio Formatos<<==
function listarFormato(){
	$.ajax({
		type:'get',
		url:'listar-formatos',
		success: function(data){
			$('#listar-formato').empty().html(data);
		}
	});
}
//creamos la paginacion usando ajax
//dentro del documento se produce un click en la clase pagination
$(document).on("click",".pagination li a",function(e){
	//se produce un evento
	e.preventDefault();
	var url = $(this).attr("href");
	$.ajax({
		type:'get',
		url:url,
		success:function(data){ //data contiene toda la informacion generada
			$("#listar-formato").empty().html(data);
		}
	});
});
//funcion para el boton de editar, aqui traemos los datos.
function MostrarFormato(id){
	var route = "formatos/"+id+"/edit";
	$.get(route, function(data){
		//alert(id); // traemos todos los datos
		$("#id").val(data.id);
		$("#upFormato").val(data.formato);
		$("#upEstado").val(data.estado);
	});
}
//btn para actualizar con ajax
$("#actualizarFormato").click(function(){
	//recuperamos la informacion del modal atravez de los id
	var id = $("#id").val();
	var formato = $("#upFormato").val();
	var estado = $("#upEstado").val();
	var route = "formatos/"+id+"";
	var token = $("#token").val();
	$.ajax({
		url:route,
		headers:{'X-CSRF-TOKEN':token},
		type:'PUT',
		dataType:'json',
		data:{formato:formato,estado:estado},//aqui pasomos todo el parametro de datos
		success:function(data){
			//si es true la informacion es actualizada
			if(data.success == 'true'){
				listarFormato();
				//despues de actualizar desaperece la ventana
				$("#myModal").modal('toggle');
				//pintamos un mensaje
				$("#message-update").fadeIn();
				$("#message-update").show().delay(3000).fadeOut(3);
			}
		},
		error:function(data){
			$("#formatosError").html(data.responseJSON.formato);
          	$("#formatosMessage-error").fadeIn();
				if(data.status == 422){
					console.clear();
				}
		}
	});
});	
//Limpiamos el mensaje del modal
$("#myModal").on("hidden.bs.modal", function(){
	$("#formatosMessage-error").fadeOut();
});

//Función para guardar formato
$("#guardarFormato").click(function(event){
  	//recuperamos el valor del input descripcion
    var formato = $("#formato").val();
    var estado = $("#estado").val();
    //recuperamos la informacion del token
    var token = $("input[name=_token]").val();
    //la ruta donde se envia la informacion del formulario
    var route = "formatos";
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type:'post',
        datatype:'json',
        data:{formato:formato,estado:estado},
        success:function(data){
            if(data.success=='true'){
            	listarFormato();
            	$("#myModalCreate").modal('toggle');
            	$("#message-save").fadeIn();
            }
        },
        //aqui atrapamos los errores una vez validados atraves de un request
        error:function(data){
            //obtenemos el mensaje de validacion console.log(data.responseJSON.nombre);
            $("#error").html(data.responseJSON.formato);
            $("#message-error").fadeIn();
            $("#message-error").show().delay(3000).fadeOut(3);
        }
    });
});
//==>>Fin de Formatos<<==

//==>>Inicio de Productos<<==
function listarProducto(){
	$.ajax({
		type:'get',
		url:'listar-productos',
		success: function(data){
			$('#listar-producto').empty().html(data);
		}
	});
}
$(document).on("click",".pagination li a",function(e){
	//se produce un evento
	e.preventDefault();
	var url = $(this).attr("href");
	$.ajax({
		type:'get',
		url:url,
		success:function(data){ 
			$("#listar-producto").empty().html(data);
		}
	});
});
function MostrarProducto(id){
	var route = "productos/"+id+"/edit";
	$.get(route, function(data){
		$("#id").val(data.id);
		$("#descripcion").val(data.descripcion);
	});
}
//btn para actualizar con ajax
$("#actualizarProducto").click(function(){
	var id = $("#id").val();
	var descripcion = $("#descripcion").val();
	var route = "productos/"+id+"";
	var token = $("#token").val();
	$.ajax({
		url:route,
		headers:{'X-CSRF-TOKEN':token},
		type:'PUT',
		dataType:'json',
		data:{descripcion:descripcion},
		success:function(data){
			if(data.success == 'true'){
				listarProducto();
				//despues de actualizar desaperece la ventana
				$("#myModalProducto").modal('toggle');
				//pintamos un mensaje
				$("#message-update").fadeIn();
				$("#message-update").show().delay(3000).fadeOut(3);
			}
		},
		error:function(data){
			$("#errorProducto").html(data.responseJSON.descripcion);
        	$("#message-errorProducto").fadeIn();
			if(data.status == 422){
				console.clear();
			}
		}
	});
});
//Limpiamos el mensaje del modal
$("#myModalProducto").on("hidden.bs.modal", function(){
	$("#message-errorProducto").fadeOut();
});
//Funcion para guardar producto

$("#addProducto").click(function(event){
	//recuperamos el valor del input descripcion
  	var descripcion = $("#addDescripcion").val();
  	//recuperamos la informacion del token
  	var token = $("input[name=_token]").val();
  	//la ruta donde se envia la informacion del formulario
  	var route = "productos";
  	var dataSting = "descripcion="+descripcion;
      $.ajax({
     	url:route,
      	headers:{'X-CSRF-TOKEN':token},
      	type:'post',
      	datatype:'json',
      	data:dataSting,
        success:function(data){
          	if(data.success=='true'){
            	listarProducto();
            	$("#myModalCreateProd").modal('toggle');
            	$("#message-save").fadeIn();
            	$("#message-save").show().delay(3000).fadeOut(3);
         	}
        },
        //aqui atrapamos los errores una vez validados atraves de un request
        error:function(data){
          	//obtenemos el mensaje de validacion console.log(data.responseJSON.nombre);
          	$("#addProdError").html(data.responseJSON.descripcion);
          	$("#addProdMessage-error").fadeIn();
            $("#addProdMessage-error").show().delay(3000).fadeOut(3);
        }
    });
});
//==>>Fin de Productos<<==

//==>>Inicio de Clientes<<==
$("#guardarCliente").click(function(event){
  	var nombre = $("#addnombre").val();
    var apellido = $("#addapellido").val();
    var telefono = $("#addtelefono").val();
    var email= $("#addemail").val();
    var fax = $("#addfax").val();
  	//recuperamos la informacion del token
  	var token = $("input[name=_token]").val();
  	//la ruta donde se envia la informacion del formulario
  	var route = "clientes";
    $.ajax({
    	url:route,
    	headers:{'X-CSRF-TOKEN':token},
    	type:'post',
    	datatype:'json',
    	data:{nombre:nombre,apellido:apellido,telefono:telefono,email:email,fax:fax},
    	success:function(data){
			if(data.success=='true'){
                //alert('Se registro');
            	listarClientes();
            	$("#myModalCreate").modal('toggle');
            	$("#message-save").fadeIn();
                //alert('Se registro');
        	}
    	},
        //aqui atrapamos los errores una vez validados atraves de un request
        error:function(data){
            //obtenemos el mensaje de validacion console.log(data.responseJSON.nombre);
            $("#message-error").fadeIn();
            $("#message-error").show().delay(3000).fadeOut(3);
        }
    });
});
//creamos una funcion para listar atravez de ajax
function listarClientes(){
    $.ajax({
		type:'get',
		url:'lis_clientes',
		success: function(data){
			$('#listar-cliente').empty().html(data);
		}
	});
}	
//creamos la paginacion usando ajax
//dentro del documento se produce un click en la clase pagination
$(document).on("click",".pagination li a",function(e){
	//se produce un evento
	e.preventDefault();
	var url = $(this).attr("href");
	$.ajax({
		type:'get',
		url:url,
		success:function(data){ //data contiene toda la informacion generada
			$("#listar-cliente").empty().html(data);
		}
	});
});		
//ACTUALIZAR----------------------------------------
//creamos la function para mostrar datos en el modal. y esta va en boton editar 
function MostrarCliente(id){
	var route = "clientes/"+id+"/edit";
	$.get(route, function(data){
		//alert(id);
		$("#id").val(data.id);
		$("#nombre").val(data.nombre);
		$("#apellido").val(data.apellido);
		$("#telefono").val(data.telefono);
		$("#email").val(data.email);
		$("#fax").val(data.fax);
	});
}
//btn para actualizar con ajax
$("#actualizarCliente").click(function(){
	//recuperamos la informacion del modal atravez de los id
	var id = $("#id").val();
	var nombre = $("#nombre").val();
	var apellido = $("#apellido").val();
	var telefono = $("#telefono").val();
	var email = $("#email").val();
	var fax = $("#fax").val();
	var route = "clientes/"+id+"";
	var token = $("#token").val();
	$.ajax({
		url:route,
		headers:{'X-CSRF-TOKEN':token},
		type:'PUT',
		dataType:'json',
		data:{nombre:nombre,apellido:apellido,telefono:telefono,email:email,fax:fax},
		success:function(data){
			//si es true la informacion es actualizada
			if(data.success == 'true'){
				listarClientes();
				//despues de actualizar desaperece la ventana
				$("#myModal").modal('toggle');
				//pintamos un mensaje
				$("#message-update").fadeIn();
				$("#message-update").show().delay(3000).fadeOut(3);
			}
		}
	});
});
//==>>Inicio de Usuarios<<==
//creamos una funcion para listar atravez de ajax
function listarUsuario(){
	$.ajax({
		type:'get',
		url:'listar-usuarios',
		success:function(data){
			$('#listar-usuarios').empty().html(data);
		}
	});
}
$(document).on("click",".pagination li a",function(e){
	//se produce un evento
	e.preventDefault();
	var url = $(this).attr("href");
	$.ajax({
		type:'get',
		url:url,
		success:function(data){ //data contiene toda la informacion generada
			$("#listar-usuarios").empty().html(data);
		}
	});
});
//funcion para el boton de editar, aqui traemos los datos.
function MostrarUsuario(id){
	var route = "usuarios/"+id+"/edit";
	$.get(route, function(data){
		//alert(id); traemos todos los datos
		$("#id").val(data.id);
		$("#name").val(data.name);
		$("#cargo").val(data.cargo);
		$("#type").val(data.type);
	});
}
//btn para actualizar con ajax
$("#actualizarUsuario").click(function(){
	//recuperamos la informacion del modal atravez de los id
	var id = $("#id").val();
	var name = $("#name").val();
	var cargo = $("#cargo").val();
	var type = $("#type").val();
	var route = "usuarios/"+id+"";
	var token = $("#token").val();
	$.ajax({
		url:route,
		headers:{'X-CSRF-TOKEN':token},
		type:'PUT',
		dataType:'json',
		data:{name:name,cargo:cargo,type:type},//aqui pasomos todo el parametro de datos
		success:function(data){
			//si es true la informacion es actualizada
			if(data.success == 'true'){
				listarUsuario();
				//despues de actualizar desaperece la ventana
				$("#myModal").modal('toggle');
				//pintamos un mensaje
				$("#message-update").fadeIn();
				$("#message-update").show().delay(4000).fadeOut(4);
			}
		},
		error:function(data){
			$("#error").html(data.responseJSON.name);
          	$("#message-error").fadeIn();
			if(data.status == 422){
				console.clear();
			}
		}
	});
});	
//Limpiamos el mensaje del modal
$("#myModal").on("hidden.bs.modal", function(){
	$("#message-error").fadeOut();
});

$("#addUsuario").click(function(event){
	//recuperamos el valor del input descripcion
  	var name = $("#addName").val();
    var cargo = $("#addCargo").val();
    var email = $("#addEmail").val();
    var password = $("#addPassword").val();
    var type = $("#addType").val();
  	//recuperamos la informacion del token
  	var token = $("input[name=_token]").val();
  	//la ruta donde se envia la informacion del formulario
  	var route ="usuarios";
    $.ajax({
     	url:route,
      	headers:{'X-CSRF-TOKEN':token},
      	type:'post',
      	datatype:'json',
      	data:{name:name,cargo:cargo,email:email,password:password,type:type},
        success:function(data){
          	if(data.success=='true'){
          		listarUsuario();
				$("#myModalcreateUser").modal('toggle');
				//pintamos un mensaje
				$("#message-save").fadeIn();
				$("#message-save").show().delay(3000).fadeOut(3);
            }
        },
        //aqui atrapamos los errores una vez validados atraves de un request
        error:function(data){
         	//obtenemos el mensaje de validacion console.log(data.responseJSON.nombre);
         	$("#error").html(data.responseJSON.name);
         	$("#message-error").fadeIn();
            $("#message-error").show().delay(3000).fadeOut(3);
        }
    });
});
//==>>Fin de Usuarios<<==

//Inicio de metodos para mostrar la descripcion y el costo del papel
var id_rubro = $('#id_rubroport');//Obtenemos el select
var materialCalc = $('#Matpor');//Obtenemos el text atraves del id
var costUnit = $('#cotunitport');//obtenemos el text de costo unitario
var idmat0=$('#idmate0');

//console.log(id_rubro);
//Función para saber cuando se ha hecho un cambio en el select
id_rubro.on('change', function(){
	//aqui almacenamos el texto del select en una variable
	var esteVal = $('#id_rubroport option:selected').text();
      //aqui almacenamos el id de la seleccion en una variable
	var idport = $('#id_rubroport option:selected').val();
	//aqui mostramos el material seleccionado en la caja de texto
	materialCalc.val(esteVal);
	idmat0.val(idport);

	/*Funcion con ajax atraves de la cual obtenemos el costo despues de aver
	seleccionado un tipo de mateial en el select*/
	$.ajax({
        method: "GET",
        url: "/rubros/"+idport
	})
    .done(function(data){
        costUnit[0].value = data.costo;
    });
});

//separación de métodos
var id_rubro1 = $('#id_rubro1');
var materialCalc1 = $ ('#Mat1');
var id_r1 = $('#id1');
var costUnit1 = $('#cotunit1');
var idmat1=$('#idmate1');

id_rubro1.on('change', function(){
	var valMat1 = $('#id_rubro1 option:selected').text();
	var id1 = $('#id_rubro1 option:selected').val();
	materialCalc1.val(valMat1);
	idmat1.val(id1);
	$.ajax({
    	method:"GET",
    	url: "/rubros/"+id1 
  	})
  	.done(function(data){
   		costUnit1[0].value=data.costo;
  	});
});


//separación de métodos
var id_rubro2 = $('#id_rubro2');
var materialCalc2 = $ ('#Mat2');
var costUnit2 = $('#cotunit2');
var idmat2=$('#idmate2');

function rubro2Cambio(){
  	var valMat2 = $('#id_rubro2 option:selected').text();
  	var id2 = $('#id_rubro2 option:selected').val();
  	materialCalc2.val(valMat2);
	idmat2.val(id2);

  	$.ajax({
    	method:"GET",
    	url: "/rubros/"+id2 
  	})
  	.done(function(data){
    	costUnit2[0].value=data.costo;
  	});
};

//separación de métodos
var id_rubro3 = $('#id_rubro3');
var materialCalc3 = $ ('#Mat3');
var costUnit3 = $('#cotunit3');
var idmat3=$('#idmate3');
function rubro3Cambio(){ 
    var valMat3 = $('#id_rubro3 option:selected').text();
    var id3 = $('#id_rubro3 option:selected').val();
    materialCalc3.val(valMat3);
	idmat3.val(id3);
    $.ajax({
    	method:"GET",
       	url: "/rubros/"+id3 
    })
    .done(function(data){
    	costUnit3[0].value=data.costo;
    });
};
//Fín

var caras = $('#caras');
//seleccion de caras
caras.on('change', function(){
    var carasval = $('#caras option:selected').val();
    caras= carasval;
    console.log(caras);
});

var formato = $('#id_formats');
//seleccion de formato
formato.on('change', function(){
    var valFormato = $('#id_formats option:selected').text();
    var elemento = valFormato.split('/');
    var tam_pap = elemento[1];
    formato = parseInt(tam_pap);
    console.log(formato);
});

//calculos de las laminas por color
$btnCalColor = $('#mostrarcolor');
$calTotal=$("#totLaminas");
$costUnitLam=$("#costUnitLam");
$cosMOfot=$("#cosMOfot");
$costotalMOfot=$("#costotalMOfot");
$cosImOf= $("#cosImOf"); 
$costotalImOf= $("#costotalImOf");
var gastos= $('#gastos');
var subtotal = $('#subtotal');
var costo_total= $('#costoTotal');
var desc= $('#descuento');
var volGeneral = $('#vol_total');
var utilidad=$('#utilBruta');
var valor_venta=$('#valor_venta');
var precio_venta=$('#precio_venta');
desc.val(0);
precio_venta.val(0);
valor_venta.val(0);

$btnCalColor.click(function(){
    $cantPag = $(".este-color");
    $colorselect = $(".select-color");
    $selectport=$('#selectPort');
    var port = $('#selectPort option:selected').val();
    cantPortada = $('#papelPort');
    var format= formato/2;
    //calculo de cantidad de láminas x color portada 
    var aux = (cantPortada.val() / format) * port;
    var totGral=aux;
    /*$colorselect.each(function(index){
        console.log($(this));
    });*/
    //recorre los colores del cuerpo
    $cantPag.each(function(index) {
		aux=index+1;
		console.log(index);
		var col=$('#col'+ aux);
		var num = $('#numcolor'+aux);
		num.val(aux);
		console.log(num.val());
		var color=$('#cant'+aux);
		col.val(color.val());
		//console.log(col.val());
		var idcol = $('#idcol'+aux);
		idcol.val($colorselect[index].value);

		//console.log(idcol.val());
		//console.log(idcol.val());

        //calculo de cantidad de láminas x color del cuerpo
        totGral += ( ( (parseInt($(this).val())) / format ) * $colorselect[index].value);
        totalxColor=  Math.round(totGral);
    });   
    //console.log(totalxColor);
    $laminas =$("#laminas");
    $volMOfot = $("#volMOfot");
    $volImOf = $("#volImOf");
    $laminas.val(totalxColor);
    $volMOfot.val(totalxColor);
    $volImOf.val(totalxColor);  

    //calculo total del costo de las laminas x colores
    $calTotal.val($laminas.val()*$costUnitLam.val());
    $costotalMOfot.val($cosMOfot.val()*$costUnitLam.val());
    $costotalImOf.val($cosImOf.val()*$costUnitLam.val());

	//Calculo del Subtotal
    subtotal.val(0);

   	var caltotl=parseInt( $calTotal.val());
   	var caltotMOF=parseInt($costotalMOfot.val());
   	var caltotImp=parseInt($costotalImOf.val());
	var sub=costo0 + costo1 + costo2 + costo3 + caltotl + caltotMOF + caltotImp;
    subtotal.val(sub);
    //console.log(subtotal.val());
	var tem=0;
    var vct=0;
	var valVent=0;
	var util=0;
	var precV=0;
	
	volumen=parseInt(volGeneral.val());
	//calculo del gasto y el costo total
    subT=parseInt(sub);
    	if (subT>=1 && subT<=5000){
    		tem=subT*5/100;
    		vct=subT+tem;
    		gastos.val(tem);
    		costo_total.val(vct);
			costo_t= parseInt(costo_total.val());
			//utilidad bruta
			util=45*costo_t/100;
			utilidad.val(util);			
    	}
    	else if (subT>5000 && subT<=10000){
			tem=subT*4/100;
    		vct=subT+tem;
    		gastos.val(tem);
    		costo_total.val(vct);
			costo_t= parseInt(costo_total.val());
			//utilidad bruta
			util=40*costo_t/100;
			utilidad.val(util);	
        }
        else if(subT>10000 && subT<=15000){
        	tem=subT*3/100;
    		vct=subT+tem;
    	    gastos.val(tem);
    		costo_total.val(vct);
			costo_t= parseInt(costo_total.val());
			//utilidad bruta
			util=30*costo_t/100;
			utilidad.val(util);		
        }
        else if(subT>15000 && subT<=20000){
        	tem=subT*2/100;
    		vct=subT+tem;
    	    gastos.val(tem);
    		costo_total.val(vct);
			costo_t= parseInt(costo_total.val());
			//utilidad bruta
			util=25*costo_t/100;
			utilidad.val(util);	
        }
         else if(subT>20000 ){
        	tem=subT*1/100;
    		vct=subT+tem;
    		gastos.val(tem);
    		costo_total.val(vct);
			costo_t= parseInt(costo_total.val());
			//utilidad bruta
			util=20*costo_t/100;
			utilidad.val(util);	    		
        }
		//calculo de la utilidad bruta
});

var col0=$('#selectPort');
col0.on('change', function(){
    var col=$('#col0');
	var idcolor=$('#idcol0');
	var num = $('#numcolor0');
	num.val(0);
	var color=$('#papelPort');
	col.val(color.val());
	//console.log(col.val());
	var idcol = $('#selectPort option:selected').val();
	idcolor.val(idcol);
	console.log(idcolor.val());
	//console.log(idcol.val())
});


desc.on('change',function(){
	subT=parseInt(subtotal.val());
	var util=utilidad.val();
	var costo_t= parseInt(costo_total.val());
    if (subT>=1 && subT<=5000){
		u=parseFloat(util);
		c=parseFloat(costo_t);
		valVent= u + c;
	    totalvv=valVent-(parseInt($(this).val()));
	    precV=totalvv/volumen;

		valor_venta.val(totalvv);
		precio_venta.val(precV);
	}
    else if (subT>5000 && subT<=10000){
		u=parseFloat(util);
		c=parseFloat(costo_t);
		valVent= u + c;
	    totalvv=valVent-(parseInt($(this).val()));
	    precV=totalvv/volumen;

		utilidad.val(util);
		valor_venta.val(totalvv);
		precio_venta.val(precV);
 	}
    else if(subT>10000 && subT<=15000){
		u=parseFloat(util);
		c=parseFloat(costo_t);
		valVent= u + c;
	    totalvv=valVent-(parseInt($(this).val()));
	    precV=totalvv/volumen;

		valor_venta.val(totalvv);
		precio_venta.val(precV);
 	}
    else if(subT>15000 && subT<=20000){
		u=parseFloat(util);
		c=parseFloat(costo_t);
		valVent= u + c;
	    totalvv=valVent-(parseInt($(this).val()));
	    precV=totalvv/volumen;

		valor_venta.val(totalvv);
		precio_venta.val(precV);
  	}
    else if(subT>20000 ){
		u=parseFloat(util);
		c=parseFloat(costo_t);
		valVent= u + c;
	    totalvv=valVent-(parseInt($(this).val()));
	    precV=totalvv/volumen;

		valor_venta.val(totalvv);
		precio_venta.val(precV);
	}
});
//separación
$sepcolores = $("#sepcolores");
$aydis = $("#aydis");
$levtext = $("#levtext");
$electro = $("#electro");
	$sepcolores.val(0);
	$aydis.val(0);
	$levtext.val(0);
	$electro.val(0);

$sepcolores.on('blur', function(){
	var sep= parseInt($sepcolores.val());
	var subt =parseInt(subtotal.val());
	var aux=(subt + sep);
	//console.log(aux);
	subtotal.val(aux);
}); 
//separación
$aydis.on('blur', function(){
	var ayd= parseInt($aydis.val());
	var subt =parseInt(subtotal.val());
	var aux=(subt + ayd);
	//console.log(aux);
	subtotal.val(aux);
});  
//separación
$levtext.on('blur', function(){
	var levtxt= parseInt($levtext.val());
	var subt =parseInt(subtotal.val());
	var aux=(subt + levtxt);
	//console.log(aux);
	subtotal.val(aux);
}); 
//separación
$electro.on('blur', function(){
	var electro= parseInt($electro.val());
	var subt =parseInt(subtotal.val());
	var aux=(subt + electro);
	//console.log(aux);
	subtotal.val(aux);
}); 

$btnMostrar = $('#mostrar1');

$btnMostrar.click(function(){
    $materiales = $(".este-material");
    var totPapelxMat = 0;
    var totxMt = 0;
    //recorre los materiales del cuerpo
    $materiales.each(function(index) {
 	    totPapelxMat += parseInt($(this).val());
            
        volGral(totPapelxMat);
        //var totEsteMat = ( ( parseInt( $(this).val() ) * 1.20) / formato ) / caras.val();
        //var totGral = ( (volGeneral.val() * 1.20) * (volGeneral.val() / formato) ) / 2;
        var totGral = ( (parseInt($(this).val()) * 1.20) * (parseInt($(this).val()) / formato) ) / caras;
        console.log(index)
        var ide = "#vol"+(index+1);
        totalmat=  Math.round(totGral);
        $(ide).val(totalmat);       
    });

    //calculo de portada
    var volport = $('#vol0');
    cantPortada = $('#papelPort');
    portada=cantPortada.val();
    totportada= ((portada * 1.20) * (portada/formato) )/ caras;
    aux = Math.round(totportada);
    volport.val(aux);

    var volumen1 = $('#vol1');
    var cosun1 = $('#cotunit1');
    var cost1 = $('#costotal1');
    costo1 = volumen1.val() * cosun1.val();
    cost1.val(costo1);

    var volumen2 = $('#vol2');
    var cosun2 = $('#cotunit2');
    var cost2 = $('#costotal2');
    costo2 = volumen2.val() * cosun2.val();
    cost2.val(costo2);

    var volumen3 = $('#vol3');
    var cosun3 = $('#cotunit3');
    var cost3 = $('#costotal3');
    costo3 = volumen3.val() * cosun3.val();
    cost3.val(costo3);

    var volumen0 = $('#vol0');
    var cosun0 = $('#cotunitport');
    var cost0 = $('#costotalport');
    costo0 = volumen0.val() * cosun0.val();
    cost0.val(costo0);
});

//recalcular 
var recalcular=$('#editcalc');

recalcular.on('click', function()
{
	//Inicio de metodos para mostrar la descripcion y el costo del papel
	var id_rubro = $('#id_rubroport');//Obtenemos el select
	var materialCalc = $('#Matpor');//Obtenemos el text atraves del id
	var costUnit = $('#cotunitport');//obtenemos el text de costo unitario
	var idmat0=$('#idmate0');
	//console.log(id_rubro);
	//aqui almacenamos el texto del select en una variable
	var esteVal = $('#id_rubroport option:selected').text();
    //aqui almacenamos el id de la seleccion en una variable
	var idport = $('#id_rubroport option:selected').val();
	//aqui mostramos el material seleccionado en la caja de texto
	materialCalc.val(esteVal);
	idmat0.val(idport);
	/*Funcion con ajax atraves de la cual obtenemos el costo despues de aver
	seleccionado un tipo de mateial en el select*/
	$.ajax({
        method: "GET",
        url: "/rubros/"+idport
	})
    .done(function(data){
    	costUnit[0].value = data.costo;
    });
	//======separación de métodos==============
	var id_rubro1 = $('#id_rubro1');
	var materialCalc1 = $ ('#Mat1');
	var id_r1 = $('#id1');
	var costUnit1 = $('#cotunit1');
	var idmat1=$('#idmate1');
	var valMat1 = $('#id_rubro1 option:selected').text();
	var id1 = $('#id_rubro1 option:selected').val();
	materialCalc1.val(valMat1);
	idmat1.val(id1);
	$.ajax({
    	method:"GET",
    	url: "/rubros/"+id1 
  	})
  	.done(function(data){
   		costUnit1[0].value=data.costo;
  	});
	//======separación de métodos==============
	var id_rubro2 = $('#id_rubro2');
	var materialCalc2 = $ ('#Mat2');
	var costUnit2 = $('#cotunit2');
	var idmat2=$('#idmate2');
  	var valMat2 = $('#id_rubro2 option:selected').text();
  	var id2 = $('#id_rubro2 option:selected').val();
  	materialCalc2.val(valMat2);
	idmat2.val(id2);
  	$.ajax({
    	method:"GET",
    	url: "/rubros/"+id2 
  	})
  	.done(function(data){
    	costUnit2[0].value=data.costo;
  	});
	//======separación de métodos==============
	var id_rubro3 = $('#id_rubro3');
	var materialCalc3 = $ ('#Mat3');
	var costUnit3 = $('#cotunit3');
	var idmat3=$('#idmate3');
    var valMat3 = $('#id_rubro3 option:selected').text();
    var id3 = $('#id_rubro3 option:selected').val();
    materialCalc3.val(valMat3);
	idmat3.val(id3);
    $.ajax({
    	method:"GET",
       	url: "/rubros/"+id3 
    })
    .done(function(data){
    	costUnit3[0].value=data.costo;
	});

	//======Obtener el valor de las caras==============
	var caras = $('#caras');
	//seleccion de caras
    var carasval = $('#caras option:selected').val();
    caras= carasval;
    console.log("las caras "+caras);
	//======Obtener el valos de los formatos==============
	var formato = $('#id_formats');
	//seleccion de formato
    var valFormato = $('#id_formats option:selected').text();
    var elemento = valFormato.split('/');
    var tam_pap = elemento[1];
    formato = parseInt(tam_pap);
    console.log(formato);

	//======Inicio de Recalculacion de los datos==============
	$materiales = $(".este-material");
    var totPapelxMat = 0;
    var totxMt = 0;
    //recorre los materiales del cuerpo
    $materiales.each(function(index) {
 	    totPapelxMat += parseInt($(this).val());       
        volGral(totPapelxMat);
        //var totEsteMat = ( ( parseInt( $(this).val() ) * 1.20) / formato ) / caras.val();
        //var totGral = ( (volGeneral.val() * 1.20) * (volGeneral.val() / formato) ) / 2;
        //var totGral = ( (parseInt($(this).val()) * 1.20) * (parseInt($(this).val()) / formato) ) / caras;
		var totGral = ( (parseInt($(this).val()) * 1.20) * (parseInt($(this).val()) / formato) ) / caras;
		console.log("--"+ totGral);
        console.log(index);
        var ide = "#vol"+(index);
		console.log("numeros"+ ide);
        totalmat=  Math.round(totGral);
        $(ide).val(totalmat);       
    });

	//======Inicio de Recalculacion de los datos==============
	var volumen0 = $('#vol0');
    var cosun0 = $('#cotunitport');
    var cost0 = $('#costotalport');
    costo0 = volumen0.val() * cosun0.val();
    cost0.val(costo0);
	console.log(cost0.val());
    var volumen1 = $('#vol1');
    var cosun1 = $('#cotunit1');
    var cost1 = $('#costotal1');
    costo1 = volumen1.val() * cosun1.val();
    cost1.val(costo1);

    var volumen2 = $('#vol2');
    var cosun2 = $('#cotunit2');
    var cost2 = $('#costotal2');
    costo2 = volumen2.val() * cosun2.val();
    cost2.val(costo2);

    var volumen3 = $('#vol3');
    var cosun3 = $('#cotunit3');
    var cost3 = $('#costotal3');
    costo3 = volumen3.val() * cosun3.val();
    cost3.val(costo3);
});
//sirve para recalcular los costos totales de los papeles
var calsiguiente=$('#calprueba');
calsiguiente.on('click',function(){
	var volumen0 = $('#vol0');
    var cosun0 = $('#cotunitport');
    var cost0 = $('#costotalport');
    costo0 = volumen0.val() * cosun0.val();
    cost0.val(costo0);
	console.log(cost0.val());
    var volumen1 = $('#vol1');
    var cosun1 = $('#cotunit1');
    var cost1 = $('#costotal1');
    costo1 = volumen1.val() * cosun1.val();
    cost1.val(costo1);

    var volumen2 = $('#vol2');
    var cosun2 = $('#cotunit2');
    var cost2 = $('#costotal2');
    costo2 = volumen2.val() * cosun2.val();
    cost2.val(costo2);

    var volumen3 = $('#vol3');
    var cosun3 = $('#cotunit3');
    var cost3 = $('#costotal3');
    costo3 = volumen3.val() * cosun3.val();
    cost3.val(costo3);
});
//======Inicio de Recalculacion de los colores==============
var recalcolor =$('#recalcolor');

recalcolor.on('click',function(){
	$cantPag = $(".este-color");
    $colorselect = $(".select-color");
    $selectport=$('#selectPort');
    var port = $('#selectPort option:selected').val();
    cantPortada = $('#papelPort');
	var formato = $('#id_formats');
	//==============seleccion de formato=======================
    var valFormato = $('#id_formats option:selected').text();
    var elemento = valFormato.split('/');
    var tam_pap = elemento[1];
    formato = parseInt(tam_pap);
    //console.log(formato);
    var format= formato/2;
    //calculo de cantidad de láminas x color portada 
    var aux = (cantPortada.val() / format) * port;
	//console.log(" aux "+aux);
    var totGral=aux;
	console.log(" Tot "+ totGral);

			
	$cantPag.each(function(index) {
		var aux1;
		aux1=index+1;
		console.log(aux1);
		//console.log(index);
		
		//console.log(col1.val());
		/*console.log(index);
		var col=$('#col'+ aux2);*/
		
		//console.log(num.val());
		var color=$('#cant'+aux1);
		//console.log(" " + color.val());
		if($('#cant'+aux1) === 0){
			console.log(color + " Vacio")
		}else{
			var col1=$('#col'+ aux1);
			var num = $('#numcolor'+aux1);
			num.val(aux1);
			col1.val(color.val());
			//console.log(col.val());
			var idcol = $('#idcol'+aux1);
			idcol.val($colorselect[index].value);
			//console.log(idcol.val());
        	//calculo de cantidad de láminas x color del cuerpo
        	totGral += ( ( (parseInt($(this).val())) / format ) * $colorselect[index].value);
       		console.log(totGral);
			totalxColor=  Math.round(totGral);
		}	
 	});  
    //console.log(totalxColor);
    $laminas =$("#laminas");
    $volMOfot = $("#volMOfot");
    $volImOf = $("#volImOf");
    $laminas.val(totalxColor);
    $volMOfot.val(totalxColor);
    $volImOf.val(totalxColor);  

    //calculo total del costo de las laminas x colores
    $calTotal.val($laminas.val()*$costUnitLam.val());
    $costotalMOfot.val($cosMOfot.val()*$costUnitLam.val());
    $costotalImOf.val($cosImOf.val()*$costUnitLam.val());

	//Calculo del Subtotal
    subtotal.val(0);

   	var caltotl=parseInt( $calTotal.val());
   	var caltotMOF=parseInt($costotalMOfot.val());
   	var caltotImp=parseInt($costotalImOf.val());
	var sub=costo0 + costo1 + costo2 + costo3 + caltotl + caltotMOF + caltotImp;
    subtotal.val(sub);
    //console.log(subtotal.val());
	var tem=0;
    var vct=0;
	var valVent=0;
	var util=0;
	var precV=0;
	
	volumen=parseInt(volGeneral.val());
	//calculo del gasto y el costo total
    subT=parseInt(sub);
    	if (subT>=1 && subT<=5000){
    		tem=subT*5/100;
    		vct=subT+tem;
    		gastos.val(tem);
    		costo_total.val(vct);
			costo_t= parseInt(costo_total.val());
			//utilidad bruta
			util=45*costo_t/100;
			utilidad.val(util);			
    	}
    	else if (subT>5000 && subT<=10000){
			tem=subT*4/100;
    		vct=subT+tem;
    		gastos.val(tem);
    		costo_total.val(vct);
			costo_t= parseInt(costo_total.val());
			//utilidad bruta
			util=40*costo_t/100;
			utilidad.val(util);	
        }
        else if(subT>10000 && subT<=15000){
        	tem=subT*3/100;
    		vct=subT+tem;
    	    gastos.val(tem);
    		costo_total.val(vct);
			costo_t= parseInt(costo_total.val());
			//utilidad bruta
			util=30*costo_t/100;
			utilidad.val(util);		
        }
        else if(subT>15000 && subT<=20000){
        	tem=subT*2/100;
    		vct=subT+tem;
    	    gastos.val(tem);
    		costo_total.val(vct);
			costo_t= parseInt(costo_total.val());
			//utilidad bruta
			util=25*costo_t/100;
			utilidad.val(util);	
        }
         else if(subT>20000 ){
        	tem=subT*1/100;
    		vct=subT+tem;
    		gastos.val(tem);
    		costo_total.val(vct);
			costo_t= parseInt(costo_total.val());
			//utilidad bruta
			util=20*costo_t/100;
			utilidad.val(util);	    		
        }
});





function volGral(hxm) {         
    volGeneral.val(hxm)
}
//separación de métodos


function papel2Cambio(){ 	
	canti2=$('#materiales .material2 #papel2');
	var mat2=parseInt(canti2.val());
	var num2=$('#numrubro2');

	num2.val(mat2);
	console.log(num2.val());
};

function papel3Cambio(){ 	
	canti3=$('#materiales .material3 #papel3');
	var mat3=parseInt(canti3.val());
	var num3=$('#numrubro3');

	num3.val(mat3);
};
//Fín
//creamos una funcion para listar atravez de ajax
function listarBitacora(){
	$.ajax({
		type:'get',
		url:'/listarBitacoras',
		success: function(data){
			$('#listar-bitacora').empty().html(data);
		}
	});
}

//creamos la paginacion usando ajax
//dentro del documento se produce un click en la clase pagination
$(document).on("click",".pagination li a",function(e){
	//se produce un evento
	e.preventDefault();
	var url = $(this).attr("href");
	$.ajax({
		type:'get',
		url:url,
		success:function(data){ //data contiene toda la informacion generada
			$("#listar-bitacora").empty().html(data);
		}
	});
});	
var iva=$('.ivatxt');
var vv=$('#valor_venta');
var pre_v=$('#precio_venta');
var ivatxt=$('#iva');
var vGeneral=$('#vol_total');
var extra;
var extra1;

$(".iva").on( 'change', function() {
    if( $(this).is(':checked') ) {
        //alert("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
        //iva.removeAttr("disabled");
	    extra=vv.val();
		extra1=pre_v.val();
		var subtIva = (extra * 0.15) + parseInt(vv.val());
		var aux= subtIva / parseInt(vGeneral.val());

		ivatxt.val(extra * 0.15);
		vv.val(subtIva);
        pre_v.val(aux + parseInt(pre_v.val())); 
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        //alert("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");
        iva.attr('disabled', 'disabled');
		vv.val(extra);
		pre_v.val(extra1);
		ivatxt.val(0);
    }
});


var Fper=$('.fpertxt');
$(".fpercheck").on( 'change', function() {
    if( $(this).is(':checked') ) {
        Fper.removeAttr("disabled");
    } else {
       Fper.attr('disabled', 'disabled');
    }
});