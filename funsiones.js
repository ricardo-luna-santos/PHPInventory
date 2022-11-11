// JavaScript Document
function ajaxFunction() {
var xmlHttp;
try {
// Firefox, Opera 8.0+, Safari
xmlHttp=new XMLHttpRequest();
return xmlHttp;
} catch (e) {
// Internet Explorer
try {
xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
return xmlHttp;
} catch (e) {
try {
xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
return xmlHttp;
} catch (e) {
alert("Tu navegador no soporta AJAX!");
return false;
}}}
}
function Enviar(_pagina){
    var ajax;
    ajax = ajaxFunction();
    ajax.open("POST",_pagina, true);
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.onreadystatechange = function()
    {
        if (ajax.readyState==1)
            {
                document.getElementById('contenido').innerHTML='<img src="loading.gif" align="center" alt="cargando"/>';
            }
            if (ajax.readyState == 4 )
                {
                    document.getElementById('contenido').innerHTML=ajax.responseText;

                }
    }
    ajax.send(null);
}
function verrec(){
	divcliente = document.getElementById('cliente');
	norecibo=document.modimp.norecibo.value;
        ajax=ajaxFunction();
	ajax.open("POST", "notaofactura.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==1)
	{
		document.getElementById('cliente').innerHTML='<img src="loader.gif" align="center" alt="cargando"/>';

	}
		if (ajax.readyState==4) {
			divcliente.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	
	ajax.send("norecibo="+norecibo)
}
function modrec(){
	divcliente = document.getElementById('cliente');
	norecibo=document.modimp.norecibo.value;
        ajax=ajaxFunction();
	ajax.open("POST", "prueba.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==1)
	{
		document.getElementById('cliente').innerHTML='<img src="loader.gif" align="center" alt="cargando"/>';

	}
		if (ajax.readyState==4) {
			divcliente.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	
	ajax.send("norecibo="+norecibo)
}
/*
function buscarcliente(){
	divcliente = document.getElementById('cliente');
	ccliente=document.ventas.ccliente.value;
        ajax=ajaxFunction();
	ajax.open("POST", "busqueda.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==1)
	{
		document.getElementById('cliente').innerHTML='<img src="loader.gif" align="center" alt="cargando"/>';

	}
		if (ajax.readyState==4) {
			divcliente.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	
	ajax.send("ccliente="+ccliente)
}
function buscarpro(){
	divproducto = document.getElementById('producto');
	clave=document.ventas.clave.value;
        ajax=ajaxFunction();
	ajax.open("POST", "busquedapro.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==1)
	{
		document.getElementById('producto').innerHTML='<img src="loader.gif" align="center" alt="cargando"/>';

	}
		if (ajax.readyState==4) {
			divproducto.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	
	ajax.send("clave="+clave)
}
*/
function buscarventa(){
	divventass = document.getElementById('ventass');
	norecibo=document.ventas.norecibo.value;
        ajax=ajaxFunction();
	ajax.open("POST", "prueba.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==1)
	{
		document.getElementById('ventass').innerHTML='<img src="loader.gif" align="center" alt="cargando"/>';

	}
		if (ajax.readyState==4) {
			divventass.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	
	ajax.send("norecibo="+norecibo)
}

function Operaciones(){

    var preciop = parseFloat(document.getElementById("preciop").value);
    var cantidad = parseFloat(document.getElementById("cantidad").value);
    var descuento = parseFloat(document.getElementById("descuento").value);
    var des = (preciop*descuento)/100;

    document.getElementById("importe").value = (preciop)-des;
    
if (document.getElementById("importe").value == "NaN")
{
document.getElementById("importe").value ="";
}

} 

function eliminarventa(id){    
	divvent = document.getElementById('vent');
        norecibo=document.ventas.norecibo.value;
	var eliminar = confirm("De verdad desea eliminar este dato?"+id+norecibo)
if ( eliminar ) 
{   
	ajax=ajaxFunction();  
	ajax.open("GET","borraravp.php?id="+id+"norecibo="+norecibo);   
        ajax.onreadystatechange=function()
		{   
		if (ajax.readyState==1)
	{
		document.getElementById('vent').innerHTML='<img src="loader.gif" align="center" alt="cargando"/>';

	}
			if (ajax.readyState==4){    
			divvent.innerHTML = ajax.responseText
			}   
		}   
 ajax.send(null) 
	}
}
function guardaventa(){

	divventass = document.getElementById('ventass');
        norecibo=document.ventas.norecibo.value;
	ccliente=document.ventas.ccliente.value;
	rfc=document.ventas.rfc.value;
	nombre=document.ventas.nombre.value;
        direccion=document.ventas.direccion.value;
        clave=document.ventas.clave.value;
        descripcion=document.ventas.descripcion.value;
        unidad=document.ventas.unidad.value;
        cantidad=document.ventas.cantidad.value;
        preciop=document.ventas.preciop.value;
        importe=document.ventas.importe.value;
        fecha=document.ventas.fecha.value;
        descuento=document.ventas.descuento.value;
        fpago=document.ventas.fpago.value;
        tpago=document.ventas.tpago.value;
        entrega=document.ventas.entrega.value;

if (fpago=="")
{
alert("Error");
}


	if (fpago=="CONTADO" || fpago=="CREDITO")
		{
		if(tpago=="EFECTIVO" || tpago=="TARJETA C." || tpago=="CHEQUE")
			{
			if(entrega=="MOSTRADOR" || entrega=="DOMICILIO")
				{

	ajax=ajaxFunction();
	ajax.open("POST", "insertventa.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==1)
	{
		document.getElementById('ventass').innerHTML='<img src="loader.gif" align="center" alt="cargando"/>';

	}
		if (ajax.readyState==4) {
			divventass.innerHTML = ajax.responseText
                        LimpiarCampos();
		}
	}

	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	
	ajax.send("norecibo="+norecibo+"&ccliente="+ccliente+"&rfc="+rfc+"&nombre="+nombre+"&direccion="+direccion+"&clave="+clave+"&descripcion="+descripcion+"&unidad="+unidad+"&cantidad="+cantidad+"&preciop="+preciop+"&importe="+importe+"&fecha="+fecha+"&descuento="+descuento+"&fpago="+fpago+"&tpago="+tpago+"&entrega="+entrega)
		}
else
{
alert("Faltan Datos");
}

	}
else
{
alert("Faltan Datos");
}

}
else
{
alert("Faltan Datos");
}
}

function LimpiarCampos(){
       document.ventas.clave.value="";
       document.ventas.descripcion.value="";
       document.ventas.unidad.value="";
       document.ventas.cantidad.value="";
       document.ventas.preciop.value="";
       document.ventas.importe.value="";
}

function abrir(){
document.ventas.norecibo.value="";
window.open('nota.php','_self');
window.open('notaofactura.php?norecibo='+norecibo, '_blank');
// Acá ponemos otros link
}
function checkKey(key)
{
 
    var unicode
    if (key.charCode)
    {unicode=key.charCode;}
    else
    {unicode=key.keyCode;}
    //alert(unicode); // Para saber que codigo de tecla presiono , descomentar
 
    if (unicode == 13){
        
		divventass = document.getElementById('ventass');
        norecibo=document.ventas.norecibo.value;
	ccliente=document.ventas.ccliente.value;
	rfc=document.ventas.rfc.value;
	nombre=document.ventas.nombre.value;
        direccion=document.ventas.direccion.value;
        clave=document.ventas.clave.value;
        descripcion=document.ventas.descripcion.value;
        unidad=document.ventas.unidad.value;
        cantidad=document.ventas.cantidad.value;
        preciop=document.ventas.preciop.value;
        importe=document.ventas.importe.value;
        fecha=document.ventas.fecha.value;
        descuento=document.ventas.descuento.value;
        fpago=document.ventas.fpago.value;
        tpago=document.ventas.tpago.value;
        entrega=document.ventas.entrega.value;

if (fpago=="")
{
alert("Error");
}


	if (fpago=="CONTADO" || fpago=="CREDITO")
		{
		if(tpago=="EFECTIVO" || tpago=="TARJETA C." || tpago=="CHEQUE")
			{
			if(entrega=="MOSTRADOR" || entrega=="DOMICILIO")
				{

	ajax=ajaxFunction();
	ajax.open("POST", "insertventa.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==1)
	{
		document.getElementById('ventass').innerHTML='<img src="loader.gif" align="center" alt="cargando"/>';

	}
		if (ajax.readyState==4) {
			divventass.innerHTML = ajax.responseText
                        LimpiarCampos();
		}
	}

	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	
	ajax.send("norecibo="+norecibo+"&ccliente="+ccliente+"&clave="+clave+"&descripcion="+descripcion+"&unidad="+unidad+"&preciop="+preciop+"&fecha="+fecha+"&descuento="+descuento+"&fpago="+fpago+"&tpago="+tpago+"&entrega="+entrega)
		}
else
{
alert("Faltan Datos");
}

	}
else
{
alert("Faltan Datos");
}

}
else
{
alert("Faltan Datos");
}
    }
	alert('Datos Guardados');
}


function confirmar(id) {
if (!confirm ("Deseas continuar?")) {
//window.location = "";
}
else {
window.location = "borrarproveedor.php?id="+id;
}
}

function confirmarr(id) {
if (!confirm ("Deseas continuar?")) {
//window.location = "";
}
else {
window.location = "borrarusuario.php?id="+id;
}
}
function autofitIframe(id){
if (!window.opera && document.all && document.getElementById){
id.style.height=id.contentWindow.document.body.scrollHeight;
} else if(document.getElementById) {
id.style.height=id.contentDocument.body.scrollHeight+"px";
}
}