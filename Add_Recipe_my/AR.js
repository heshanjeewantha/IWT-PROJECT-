var uploadpic = document.getElementById("up-pic");
var inputfile = document.getElementById("input-file");

inputfile.onchange = function()
{
    uploadpic.src = URL.createObjectURL(inputfile.files[0]);
}