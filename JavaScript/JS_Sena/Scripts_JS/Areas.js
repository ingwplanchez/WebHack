// JavaScript Document

function Calcular(){
	
var campo1 = form4.Lado.value;
var campo2 = form4.Base.value;
var campo3 = form4.Altura.value;
var L = parseInt(form4.Lado.value);
var b = parseInt(form4.Base.value);
var h = parseInt(form4.Altura.value);
var AreaT = 0 ;
var AreaC = 0 ;	
	AreaC = L*L;
	AreaT = b*h/2;

	if(campo1 == "" || campo2 == "" || campo3 == "" ){
		alert('Alguno de los campos o todos estan vacios')
	} // fin del If
	
	else{
			
		alert('El area del Cuadrado es: '+AreaC)
		alert('El area delTriangulo es: '+AreaT)
			
	}// fin del Else
} // Fin de la función

