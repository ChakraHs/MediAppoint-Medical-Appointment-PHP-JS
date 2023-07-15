
function requiredConfirmRdv(fr)
{
var confa = confirm("êtes-vous sûr de vouloir annuler ce rendez-vous");
if (confa)
{
fr.action = "annulerdv.php";
fr.method="POST";
}
else
{
    fr.action = "pagesec.php";
}
}