

function ocultar(i)
{
    var auxe = document.getElementById("e"+i);
    var auxp = document.getElementById("p"+i);

    if (auxp.style.display=="block")
    {
        auxp.style.display="none";
        auxe.innerHTML = "Mostrar Parrafo";
    }
    else
    {
        auxp.style.display="block";
        auxe.innerHTML = "Ocultar Parrafo";
    }
}