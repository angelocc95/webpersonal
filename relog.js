// VersionPrueba no llega a visualizarse
// var inicializarHora = function() {

//     var fechaActual=new Date();
//     var tiempoHoras=fechaActual.getHours();
//     var tiempoMinutos=fechaActual.getMinutes();
//     var tiempoSegundos=fechaActual.getSecond();

//     var mesActual=fechaActual.getMonth();
//     var diaActual=fechaActual.getDay();
//     var diaDelMes=fechaActual.getDate();
//     var aActual=fechaActual.getFullYear();
//     var amOpm;

//     var meses=["Enero", "Febrero", "Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre"];
//     var esteMes=meses[mesActual];

//     var diasDeLaSemana=["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];
//     var diaDeHoy=diasDeLaSemana[diaActual];

//     amOpm=(tiempoHoras > 12) ? "pm" : "am";
//     tiempoHoras = (tiempoHoras > 12) ? tiempoHoras-12 : tiempoHoras;
//     tiempoHoras = (tiempoHoras<10) ? "0" + tiempoHoras : tiempoHoras;
//     tiempoMinutos = (tiempoMinutos<10) ? "0" + tiempoMinutos : tiempoMinutos;
//     tiempoSegundos = (tiempoSegundos<10) ? "0" + tiempoSegundos : tiempoSegundos;

//     document.getElementById("laFecha").innerHTML= diaDeHoy + " "+diaDelMes + " de "+esteMes + " del" +aActual;
//     document.getElementById("info").innerHTML= tiempoHoras+":"+tiempoMinutos+":"+tiempoSegundos + amOpm;
// }

// window.onload = inicializarHora;
// inicializarHora();
// setInterval(inicializarHora , 1000);

let html = document.getElementById("tiempo");

setInterval(function(){
	tiempo = new Date();

	horas = tiempo.getHours();
	minutos = tiempo.getMinutes();
	segundos = tiempo.getSeconds();

	//evitar los 0 o numeros individuales
	if(horas<10)
		horas = "0"+horas;
	if(minutos<10)
		minutos = "0"+minutos;
	if(segundos<10)
		segundos = "0"+segundos;

	html.innerHTML = horas+" : "+minutos+" : "+segundos;
},1000);