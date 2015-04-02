// JavaScript Document
function Mayor()
{
	num1 = parseInt(form1.valor1.value);
	num2 = parseInt(form1.valor2.value);
	var Mayor;
	
	if (num1 > num2){
	Mayor = num1;
	alert('el Mayor es: '+Mayor)
	}

	if (num2 > num1 ){
	Mayor = num2;
	alert('el Mayor es: '+Mayor)
	}
	
	if (num1 == num2 ){
	
	//document.write('Ambos son iguales')
	alert('Ambos son iguales')
	}
}