// JavaScript Document
// Script para determinar si un Número es par o impar

function Parimpar(){
	
var campo = form2.Numero.value;
var num = parseInt(form2.Numero.value);
var residuo = 0;
residuo = num % 2;

	if(campo == "" ){ 
		alert('El campo esta vacío')
	} // Fin del If
	
	else{ // Else externo
		if(residuo==0){
			alert('El número es Par')
		} // Fin del If
		
		else{ // Else anidado
			alert('El número es Impar')
		} // Fin del Else Anidado
	} // Fin del Else Externo
} // Fin de la funcion