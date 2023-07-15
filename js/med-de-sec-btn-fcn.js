

function requiredConfirmem(f)
{
    
var confe = confirm("êtes-vous sûr de vouloir effacer ce medecin");
if (confe)
{
f.action = "effacerm.php";
f.method="POST";
}
else
{
f.action = "pagesec.php";
}
}