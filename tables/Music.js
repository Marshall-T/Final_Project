/*
  Marshall Taylor
  CIP 228
  Music JavaScript
*/

document.getElementById("search").onclick = function(e)
{
    var sStrg = document.getElementById("aSearch").value;
    $target = sStrg;
    if (sStrg =="") {
        sStrg = "<br>";
    }
    var code = document.getElementById("target");
    code.innerHTML = '<h3 id="target">' + sStrg + '</h3>';
    return sStrg;
}
