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
      	data:{descripcion:descripcion,cantidad:cantidad,costo:costo,tipo:tipo,id_usuario:1},
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
            	listarFormato();
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
//==>>Fin de Clientes<<==

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