function f_format(){
	var combo = document.getElementById('id_formats');
	var valorcombo =(combo.options[combo.options.selectedIndex].text);
	var elem = valorcombo.split('/');
	volumen=document.formulario.volumen.value;
	tam_pap = elem[1];
	formato=parseInt(tam_pap);
	caras= document.formulario.caras.value;
	var paginas_papel1=document.formulario.cant_papel_mat1.value;
	var por_vol=volumen*1.20;
	var pagForm=paginas_papel1/formato;
	var temp=(por_vol*pagForm);
	var total=temp/caras;
	var tot=Math.round(total);
	document.formulario.volum_pap1.value=tot;
}

function f_format1(){
	paginas_papel2=document.formulario.cant_papel_mat2.value;
	if(paginas_papel2!=0){
		var combo = document.getElementById('id_formats');
		var valorcombo =(combo.options[combo.options.selectedIndex].text);
		var elem = valorcombo.split('/');
		volumen=document.formulario.volumen.value;
		tam_pap = elem[1];
		formato=parseInt(tam_pap);
		caras= document.formulario.caras.value;
		por_vol=volumen*1.20;
		var pagForm=paginas_papel2/formato;
		var temp=(por_vol*pagForm);
		var total=temp/caras;
		var tot=Math.round(total);
		document.formulario.volum_pap2.value=tot;
		}
}

function f_format2(){
	paginas_papel3=document.formulario.cant_papel_mat3.value;
	var combo = document.getElementById('id_formats');
	var valorcombo =(combo.options[combo.options.selectedIndex].text);
	var elem = valorcombo.split('/');
	volumen=document.formulario.volumen.value;
	tam_pap = elem[1];
	formato=parseInt(tam_pap);
	caras= document.formulario.caras.value;
	por_vol=volumen*1.20;
	var pagForm=paginas_papel3/formato;
	var temp=(por_vol*pagForm);
	var total=temp/caras;
	var tot=Math.round(total);
	document.formulario.volum_pap3.value=tot;
}
//pendiente
function f_formatCart(){
	var paginas_port=document.formulario.N_pag_port.value;
	var combo = document.getElementById('id_formats');
	var valorcombo =(combo.options[combo.options.selectedIndex].text);
	var elem = valorcombo.split('/');
	volumen=document.formulario.volumen.value;
	tam_pap = elem[1];
	formato=parseInt(tam_pap);
	caras= document.formulario.caras.value;
	por_vol=volumen*1.20;
	var pagForm=paginas_port/formato;
	var temp=(por_vol*pagForm);
	var total=temp/caras;
	var tot=Math.round(total);
	document.formulario.volum_cart.value=tot;
}

function f_pagtot(){
	var pag1= document.formulario.pag_cuerpo_1.value;
	var pag2= document.formulario.pag_cuerpo_2.value;
	var pag3= document.formulario.pag_cuerpo_3.value;
	var pag4= document.formulario.pag_cuerpo_4.value;
	var pag5= document.formulario.pag_cuerpo_5.value;
	var pag6= document.formulario.pag_cuerpo_6.value;
	var pagPort= document.formulario.N_pag_port.value;
	pagi1=parseInt(pag1);
	pagi2=parseInt(pag2);
	pagi3=parseInt(pag3);
	pagi4=parseInt(pag4);
	pagi5=parseInt(pag5);
	pagi6=parseInt(pag6);
	pagiPort=parseInt(pagPort);
	pagTot=pagi1+pagi2+pagi3+pagi4+pagi5+pagi6;

	var colorC1= document.formulario.colorC1.value;
	var colC1= parseInt(colorC1);
	var colorC2= document.formulario.colorC2.value;
	var colorC3= document.formulario.colorC3.value;
	var colorC4= document.formulario.colorC4.value;
	var colorC5= document.formulario.colorC5.value;
	var colorC6= document.formulario.colorC6.value;
	var colorport= document.formulario.color_port.value;
	var colC2= parseInt(colorC2);
	var colC3= parseInt(colorC3);
	var colC4= parseInt(colorC4);
	var colC5= parseInt(colorC5);
	var colC6= parseInt(colorC6)
	var colport=parseInt(colorport);

	form=formato/2;
	lam1=Math.round(pagi1/form)*colC1;
	lam2=Math.round(pagi2/form)*colC2;
	lam3=Math.round(pagi3/form)*colC3;
	lam4=Math.round(pagi4/form)*colC4;
	lam5=Math.round(pagi5/form)*colC5;
	lam6=Math.round(pagi6/form)*colC6;
	lamP=Math.round(pagiPort/form)*colport;

	lamTot=lam1+lam2+lam3+lam4+lam5+lam6+lamP;
	document.formulario.volum_lam.value=lamTot;
	document.formulario.volumen_fotomec.value=lamTot;
	document.formulario.volumen_impOffset.value=lamTot;
	alert('yeah')

}
 	
function f_papel1(){
	var volum_pap= document.formulario.volum_pap1.value;
	var costo_unit_pap=document.formulario.costo_unit_pap1.value;	
	var vol= parseFloat(volum_pap);
	var cost=parseFloat(costo_unit_pap);
	var tot=0;
	tot= cost * vol;
	document.formulario.costo_tot_pap1.value=tot;
}

function f_papel2(){
	var volum_pap= document.formulario.volum_pap2.value;
	var costo_unit_pap=document.formulario.costo_unit_pap2.value;	
	var vol= parseFloat(volum_pap);
	var cost=parseFloat(costo_unit_pap);
	var tot=0;
	tot= cost * vol;
	document.formulario.costo_tot_pap2.value=tot;
}
function f_papel3(){
	var volum_pap= document.formulario.volum_pap3.value;
	var costo_unit_pap=document.formulario.costo_unit_pap3.value;	
	var vol= parseFloat(volum_pap);
	var cost=parseFloat(costo_unit_pap);
	var tot=0;
	tot= cost * vol;
	document.formulario.costo_tot_pap3.value=tot;
}
function f_cart(){
	var volum_cart= document.formulario.volum_cart.value;
	var costo_unit_cart=document.formulario.costo_unit_cart.value;	
	var vol= parseFloat(volum_cart);
	var cost=parseFloat(costo_unit_cart);
	var tot=0;
	tot= cost * vol;
	document.formulario.costo_tot_cart.value=tot;
}
function f_lam(){
	var volum_lam= document.formulario.volum_lam.value;
	var costo_unit_lam=document.formulario.costo_unit_lam.value;	
	vol= parseFloat(volum_lam);	
	cost=parseFloat(costo_unit_lam);
	var tot=0;
	tot= cost * vol;
	document.formulario.costo_tot_lam.value=tot;
}
function f_fotomec(){
	var volumen_fotomec= document.formulario.volumen_fotomec.value;
	var costo_unit_fotomec=document.formulario.costo_unit_fotomec.value;	
	vol= parseFloat(volumen_fotomec);	
	cost=parseFloat(costo_unit_fotomec);
	var tot=0;
	tot= cost * vol;
	document.formulario.costo_tot_fotomec.value=tot;
}
function f_offset(){
	var volumen_impOffset= document.formulario.volumen_impOffset.value;
	var costo_unit_impOffset=document.formulario.costo_unit_impOffset.value;	
	vol= parseFloat(volumen_impOffset);	
	cost=parseFloat(costo_unit_impOffset);
	var tot=0;
	tot= cost * vol;
	document.formulario.costo_tot_impOffset.value=tot;
}
function f_grap(){
	var volumen_grap= document.formulario.volumen_grap.value;
	var costo_unit_grap=document.formulario.costo_unit_grap.value;	
	vol= parseFloat(volumen_grap);	
	cost=parseFloat(costo_unit_grap);
	var tot=0;
	tot= cost * vol;
	document.formulario.costo_tot_grap.value=tot;
}

function f_enc(){
	var volumen_enc= document.formulario.volumen_enc.value;
	var costo_unit_enc=document.formulario.costo_unit_enc.value;	
	vol= parseFloat(volumen_enc);	
	cost=parseFloat(costo_unit_enc);
	var tot=0;
	tot= cost * vol;
	document.formulario.costo_tot_enc.value=tot;
}

function f_cocido(){
	var volumen_cocido= document.formulario.volumen_cocido.value;
	var costo_unit_cocido=document.formulario.costo_unit_cocido.value;	
	vol= parseFloat(volumen_cocido);	
	cost=parseFloat(costo_unit_cocido);
	var tot=0;
	tot= cost * vol;
	document.formulario.costo_tot_cocido.value=tot;
}

function porcentaje(){
	//Decirle a Sergio que revise
	var vol_p= document.formulario.volumen.value;
	var subt=document.formulario.subt_prod.value;

	var tem=0;
	var vct=0;
	p_vol=parseFloat(vol_p);
	subtotal=parseFloat(subt);

	if (p_vol>1 && p_vol<=5000){
		tem=subtotal*5/100;
		vct=subtotal+tem;
		document.formulario.gastos.value=tem;
		document.formulario.costo_total.value=vct;		
	}
	else if (p_vol>5000 && p_vol<=10000){
		tem=subtotal*2/100;
		vct=subtotal+tem;
		document.formulario.gastos.value=tem;
		document.formulario.costo_total.value=vct;
    }
    else if(p_vol>10000 && p_vol<=20000){
    	tem=subtotal*1/100;
		vct=subtotal+tem;
		document.formulario.gastos.value=tem;
		document.formulario.costo_total.value=vct;
    }
}

function funcion(){
		var tot_pap1= document.formulario.costo_tot_pap1.value;
		var tot_pap2= document.formulario.costo_tot_pap2.value;
		var tot_pap3= document.formulario.costo_tot_pap3.value;
		var tot_cart= document.formulario.costo_tot_cart.value;	
		var sep_colores= document.formulario.sep_colores.value;
		var arteYdis= document.formulario.arteYdis.value;
		var lev_texto= document.formulario.lev_texto.value;
		var laser= document.formulario.laser.value;
		var costo_tot_lam= document.formulario.costo_tot_lam.value;
		var tintasof= document.formulario.tintasof.value;
	 	var costo_tot_fotomec= document.formulario.costo_tot_fotomec.value;
		var costo_tot_impOffset= document.formulario.costo_tot_impOffset.value;
		var fotocopia= document.formulario.fotocopia.value;
		var corte= document.formulario.corte.value;
		var compaginacion= document.formulario.compaginacion.value;
		var costo_tot_grap= document.formulario.costo_tot_grap.value;
		var costo_tot_enc= document.formulario.costo_tot_enc.value;
		var costo_tot_cocido= document.formulario.costo_tot_cocido.value;
		var numerado= document.formulario.numerado.value;
		var troquelado= document.formulario.troquelado.value;
		var plastificado= document.formulario.plastificado.value;
		var otros= document.formulario.otros.value;


		var colores = parseInt(sep_colores);
		var arte= parseInt(arteYdis);
		var plastif= parseInt(plastificado);
		var lev= parseInt(lev_texto);
		var lase= parseInt(laser);
		var lam= parseInt(costo_tot_lam);
		var tintas= parseInt(tintasof);
		var fotomec= parseInt(costo_tot_fotomec);
		var impof= parseInt(costo_tot_impOffset);
		var fotoc= parseInt(fotocopia);
		var cort= parseInt(corte);
		var compag= parseInt(compaginacion);
		var grap= parseInt(costo_tot_grap);
		var enc= parseInt(costo_tot_enc);
		var cocido= parseInt(costo_tot_cocido);
		var numera= parseInt(numerado);
		var troquel= parseInt(troquelado);
		var otro= parseInt(otros);
		var pap1= parseInt(tot_pap1);
		var pap2= parseInt(tot_pap2);	
		var pap3= parseInt(tot_pap3);
		var cart= parseInt(tot_cart);
		var tot =0;

		total= parseInt(tot);

		total= pap1 + pap2 + pap3 + cart + colores + lev + lase + lam + tintas + fotomec + impof + fotoc + cort + compag + grap + enc +cocido + numera + troquel + otro + arte + plastif ;
    	document.formulario.subt_prod.value=total;
}