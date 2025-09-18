/*
alert('I\'m = I am \n I don\'t = I do not');
for (i=0; i<10; i++)
{
    document.write("El valor de la variable es: " + i + "<br>")
}
*/
/*
if(año % 4 == 0)
{
    alert("El año " + año + " ES bisiesto")
}
if(año % 4 != 0)
{
    alert("El año " + año + " NO es bisiesto")
}
*/
/*
alert("no es un numero");

if(dni != null)
{
    do
    {
        noEsUnNumero = isNaN(dni);
        
        if(noEsUnNumero == true)
        {
            alert("no es un numero");
            var dni = prompt("Introduce el dni: ");
        }
    } while(noEsUnNumero == true);
    
    if(noEsUnNumero == false)
    {
        if(dni < 0)
        {
            noEsUnNumero = true;
            alert("El dni " + dni + " No vale!");
        }
        if(dni > 99999999 && noEsUnNumero == false)
        {
            alert("El dni " + dni + " No vale!");
            noEsUnNumero = true;
        }
    
        if(dni >= 0 && dni <= 99999999 && noEsUnNumero == false)
        {
            resultado = dni % 23;
            alert("La division es: " + resultado);
        
            if(resultado >= 0 && resultado < 1)
            {
                alert("Letra ==> T");
            }
            if(resultado >= 1 && resultado < 2)
            {
                alert("Letra ==> R");
            }
            if(resultado >= 2 && resultado < 3)
            {
                alert("Letra ==> W");
            }
            if(resultado >= 3 && resultado < 4)
            {
                alert("Letra ==> A");
            }
            if(resultado >= 4 && resultado < 5)
            {
                alert("Letra ==> G");
            }
            if(resultado >= 5 && resultado < 6)
            {
                alert("Letra ==> M");
            }
            if(resultado >= 6 && resultado < 7)
            {
                alert("Letra ==> Y");
            }
            if(resultado >= 7 && resultado < 8)
            {
                alert("Letra ==> F");
            }
            if(resultado >= 8 && resultado < 9)
            {
                alert("Letra ==> P");
            }
            if(resultado >= 9 && resultado < 10)
            {
                alert("Letra ==> D");
            }
            if(resultado >= 10 && resultado < 11)
            {
                alert("Letra ==> X");
            }
            if(resultado >= 11 && resultado < 12)
            {
                alert("Letra ==> B");
            }
            if(resultado >= 12 && resultado < 13)
            {
                alert("Letra ==> N");
            }
            if(resultado >= 13 && resultado < 14)
            {
                alert("Letra ==> J");
            }
            if(resultado >= 14 && resultado < 15)
            {
                alert("Letra ==> Z");
            }
            if(resultado >= 15 && resultado < 16)
            {
                alert("Letra ==> S");
            }
            if(resultado >= 16 && resultado < 17)
            {
                alert("Letra ==> Q");
            }
            if(resultado >= 17 && resultado < 18)
            {
                alert("Letra ==> V");
            }
            if(resultado >= 18 && resultado < 19)
            {
                alert("Letra ==> H");
            }
            if(resultado >= 19 && resultado < 20)
            {
                alert("Letra ==> L");
            }
            if(resultado >= 20 && resultado < 21)
            {
                alert("Letra ==> C");
            }
            if(resultado >= 21 && resultado < 22)
            {
                alert("Letra ==> K");
            }
            if(resultado >= 22 && resultado < 23)
            {
                alert("Letra ==> E");
            }
            noEsUnNumero = true;
        }
    }
}
*/
/*
var fechaActual = new Date();
alert("Fecha actual: " + fechaActual)

var aux =fechaActual.getMonth;
alert(fechaActual);
*/
/*
for(i=0 ; i<=5 ; i++)
{
    myWindow = window.open("", "", width=200, heigh = 400);
    
}
*/

/*
var productoSin = prompt("Introduce el precio del producto: ");
var IVA = prompt("Ingresa el IVA a aplicarle al producto: ");
aplicarIVA(productoSin, IVA);
*/
function aplicarIVA(productoSin, IVA)
{
    var resultado = (productoSin * IVA);
    var total = (parseFloat(resultado) + parseFloat10(productoSin));
    alert("Precio final: " + total);
}


/*
var num = prompt("Introduce el número! ");
var siONo;
var otraVez = null;
parOImpar(num, siONo, otraVez);
*/
function parOImpar(num, siONo, otraVez)
{
    do
    {
        if(otraVez != null)
        {
            num = prompt("Introduce el número! ");
        }

        do
        {
            siONo = isNaN(num);
            
            if(siONo == true)
            {
                alert("no es un numero");
                num = prompt("Introduce otro!!!");
            }
        } while(siONo == true);

        if(num > 0)
        {
            if((num % 2) == 0)
            {
                alert(num + " es Par! ");
            }
            else
            {
                alert(num + " es Impar! ");
            }

            otraVez = prompt("Quieres volver a meter otro número?");
        }
    } while(otraVez != null)
}

/*
var fechaActual = new Date();
var dia;
var mes;
var ano;
dia = fechaActual.getUTCDay();
mes = fechaActual.getUTCMonth();
ano = fechaActual.getUTCFullYear();

var diaUsuario = prompt("Escribe tu DÍA de nacimiento... ");
var mesUsuario = prompt("Escribe tu MES de nacimiento (En número)... ");
var anoUsuario = prompt("Escribe tu AÑO de nacimiento... ");

MayorDe18(anoUsuario, dia, mes, ano, diaUsuario, mesUsuario);
*/

function MayorDe18(anoUsuario, dia, mes, ano, diaUsuario, mesUsuario)
{
    var edadDia;
    var edadMes;
    var edadAno;

    edadDia = dia - diaUsuario;
    edadMes = mes - mesUsuario;
    edadAno = ano - anoUsuario;

    if(edadMes < 0)
    {
        edadAno--;
    }
    if(edadMes == 0)
    {
        if(edadDia <= 0)
        {
            edadAno--;
        }
    }
    alert(edadAno);
    if(edadAno >= 18)
    {
        alert("Es MAYOR de edad");
    }
    
    else
    {
        alert("Es MENOR de edad");
    }
}

/*
var a;
var b;
var c;

var repetirBucle = null;

ReglaD3(a, b, c, repetirBucle);
*/
function ReglaD3(a, b, c, repetirBucle)
{
    var x;

    a = prompt("Escribe A... ");
    b = prompt("Escribe B... ");
    var nombre = prompt("Escribe 1 nombre...")

    do
    {
        c = prompt("Escribe C... ");

        x = (b * c) / a;

        alert(nombre + " " + x);

        repetirBucle = prompt("Quieres realizar otro cálculo?? ");

    } while(repetirBucle != null);
}


var numGente;
var cuenta;

PagoConjunto(numGente, cuenta)

function PagoConjunto(numGente, cuenta)
{
    var pagoIndividual;

    cuenta = prompt("Cuanto hay que pagar?? ");
    numGente = prompt("Cuantos vais a pagar?? ");

    pagoIndividual = cuenta / numGente;

    alert("Cada uno ha de pagar " + pagoIndividual);
}

/*
var decision = prompt("Que quieres hacer?? [ 1 : Celsius => Farenheit ] [ 2 : Farenheit => Celsius ]");
var celsius;
var farenheit;

Conversion(decision, celsius, farenheit)
*/
function Conversion(decision, celsius, farenheit)
{
    switch(decision)
    {
        case "1":
            farenheit = aFarenheit(celsius, farenheit);
            alert("El resultado es: " + farenheit + " ºF");
            break;

        case "2":
            celsius = aCelsius(celsius, farenheit);
            alert("El resultado es: " + celsius + " ºC");
            break;

        default:
            alert("ERROR!")
            break;
    }
}
function aFarenheit(celsius, farenheit)
{
    celsius = prompt("Dime los grados ºC a pasar a ºF");

    farenheit = (celsius * 1.8) + 32;

    return farenheit;
}
function aCelsius(celsius, farenheit)
{
    farenheit = prompt("Dime los grados ºF a pasar a ºC");

    celsius = (farenheit - 32) / 1.8;

    return celsius;
}

/*
var fechaActual = new Date();
var diaSemana = fechaActual.getUTCDay();
var diaMes = fechaActual.getDate();
var mes = fechaActual.getUTCMonth();
var ano = fechaActual.getUTCFullYear();

AnoYMes(diaSemana, diaMes, mes, ano);
*/
function AnoYMes(diaSemana, diaMes, mes, ano)
{
    var nombreDia
    if (diaSemana == 0)
    {
        nombreDia = "Domingo";
    }
    var nombreDia
    if (diaSemana == 1)
    {
        nombreDia = "Lunes";
    }
    var nombreDia
    if (diaSemana == 2)
    {
        nombreDia = "Martes";
    }
    var nombreDia
    if (diaSemana == 3)
    {
        nombreDia = "Miercoles";
    }
    var nombreDia
    if (diaSemana == 4)
    {
        nombreDia = "Jueves";
    }
    var nombreDia
    if (diaSemana == 5)
    {
        nombreDia = "Viernes";
    }
    var nombreDia
    if (diaSemana == 6)
    {
        nombreDia = "Sabado";
    }


    var nombreMes;
    if(mes == 0)
    {
        nombreMes = "Enero"
    }
    if(mes == 1)
    {
        nombreMes = "Febrero"
    }
    if(mes == 2)
    {
        nombreMes = "Marzo"
    }
    if(mes == 3)
    {
        nombreMes = "Abril"
    }
    if(mes == 4)
    {
        nombreMes = "Mayo"
    }
    if(mes == 5)
    {
        nombreMes = "Junio"
    }
    if(mes == 6)
    {
        nombreMes = "Julio"
    }
    if(mes == 7)
    {
        nombreMes = "Agosto"
    }
    if(mes == 8)
    {
        nombreMes = "Septiembre"
    }
    if(mes == 9)
    {
        nombreMes = "Octubre"
    }
    if(mes == 10)
    {
        nombreMes = "Noviembre"
    }
    if(mes == 11)
    {
        nombreMes = "Diciembre"
    }


    alert("Hoy es: " + nombreDia + " " + diaMes + " " + nombreMes + " " + ano);
}
