/**  Apartado fecha de nacimiento  **/
function calcularEdad(date)
{
    var fecha = new Date();
    var anoActual = parseInt(fecha.getFullYear());
    var mesActual = parseInt(fecha.getMonth());
    var diaActual = parseInt(fecha.getDate());
    var auxDate = date.split("-");
    var anoNaciemiento = parseInt(auxDate[0]);
    var mesNacimiento = parseInt(auxDate[1]);
    var diaNacimiento = parseInt(auxDate[2]);

    console.log(anoNaciemiento, diaNacimiento, mesNacimiento);
    console.log(anoActual, mesActual, diaActual);
    if(mesActual < mesNacimiento)
        return (anoActual - anoNaciemiento - 1);
    else if(mesActual == mesNacimiento && diaActual < diaNacimiento)
        return (anoActual - anoNaciemiento - 1);
    else
        return (anoActual - anoNaciemiento);    
}

var candidateDate = document.getElementById('date').innerText;
document.getElementById('edad').innerHTML = String(calcularEdad(String(candidateDate)));