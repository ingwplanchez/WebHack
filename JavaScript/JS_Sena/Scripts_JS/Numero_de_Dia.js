// JavaScript Document

function Ndia(){
	
var campo = form3.Numero.value;
var num = parseInt(form3.Numero.value);
dias=["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];


	if(campo== "" ){
		alert('El Campo esta Vacío')
	} // fin del If
	else{
		if(num > 0 && num <=7 ){
			num = num - 1;
			alert('El día es '+dias[num])
		}
		else{ // Else anidado
			alert('El número que introdujo no está comprendido entre 1 y 7')
		} // Fin del Else anidado
	} // Fin del Else
} // Fin de la función
