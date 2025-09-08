
var valor = 0;
var res = 0;
var memoria = 0;
var operacion = "null";

// Funcion detectar lo pulsado
function Pulsar(i)
{
    document.getElementById("mostrar").value += i;
    valor += "" + i;
}

function Borrar(valor)
{
    document.getElementById("mostrar").value = null;
    document.getElementById("resultado").value = null;
    valor = 0;

    res = 0;
    memoria = 0;
    operacion = null;
}
function Sumar()
{
    memoria += valor;
    valor = 0;

    document.getElementById("mostrar").value += " + ";
    operacion = "suma";
}
function Restar()
{
    memoria += valor;
    valor = 0;

    document.getElementById("mostrar").value += " - ";
    operacion = "resta";
}
function Multiplicar()
{
    memoria = valor;
    valor = 0;

    document.getElementById("mostrar").value += " * ";
    operacion = "multiplicacion";
}
function Division()
{
    memoria = valor;
    valor = 0;

    document.getElementById("mostrar").value += " / ";
    operacion = "division";
}
function Operar()
{
    switch(operacion)
    {
        case "suma" :
        {
            res = parseFloat(valor) + parseFloat(memoria);
            document.getElementById("resultado").value = res;
            
            break;
        }
        case "resta" :
        {
            res = parseFloat(memoria) - parseFloat(valor);
            document.getElementById("resultado").value = res;
                        
            break;
        }
        case "multiplicacion" :
        {
            res = parseFloat(valor) * parseFloat(memoria);
            document.getElementById("resultado").value = res;
                       
            break;
        }
        case "division" :
        {
            res = parseFloat(memoria) / parseFloat(valor);
            document.getElementById("resultado").value = res;
                        
            break;
        }
    }
}