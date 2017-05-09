

    
    function utilidad(){

	    var por = document.formulario.por_bruta.value;
	    var ct= document.formulario.costo_total.value;
	    var vol=document.formulario.volumen.value;
	    var desc=document.formulario.descuento.value;

	    bruta = parseInt(por);
	    costo_t= parseInt(ct);
	    volumen=parseInt(vol);
	    var vv=0;
	    var ut=0;
	    var pv=0;

	    ut=bruta*costo_t/100;
	    vv=ut+costo_t;
	    totalvv=vv-desc;
	    pv=vv/vol;

	    document.formulario.utilidad_bruta.value=ut;
	    document.formulario.valor_venta.value=totalvv;
	    document.formulario.precio_venta.value=pv;
    }

