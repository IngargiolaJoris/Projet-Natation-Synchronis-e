window.onload=montre();
function montre(id)
{
    var d = document.getElementById(id);
    for (var i = 1; i<=10; i++)
    {
        if (document.getElementById('information'+i)) {document.getElementById('information'+i).style.display='none';}
    }
    if (d) {d.style.display='block';}
}