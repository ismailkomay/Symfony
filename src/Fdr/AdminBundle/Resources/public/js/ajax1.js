function changerPrestation()
{
var divSortie ="fdr_adminbundle_feuillederoute_secteur";
var idChampsCntrl ="fdr_adminbundle_feuillederoute_typePrestation";
var method = "GET";
var fichierParh = "../../php/test.php";
var paramUrl = "typeprestation_id";
var nomMethode = "secteursDePrestation";
var ajaxRequest=maVarAjax(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode);
}
function changerClient()
{
var divSortie ="fdr_adminbundle_feuillederoute_clientRamassage";
var idChampsCntrl ="fdr_adminbundle_feuillederoute_secteur";
var method = "GET";
var fichierParh = "../../php/test.php";
var paramUrl = "secteur_id";
var nomMethode = "clientsDeSecteur";
var ajaxRequest=maVarAjax(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode);
}
function hideClient()
{
var divSortie ="fdr_adminbundle_feuillederoute_clientRamassage";
var idChampsCntrl ="fdr_adminbundle_feuillederoute_typePrestation";
var method = "GET";
var fichierParh = "../../php/test.php";
var paramUrl = "typeprestation_id";
var nomMethode = "hideClient";
var ajaxRequest=maVarAjax(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode);
}


///
function maVarAjax(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode){
   var ajaxRequest; // The variable that makes Ajax possible!
try{
// Opera 8.0+, Firefox, Safari
ajaxRequest = new XMLHttpRequest();
}catch (e){
// Internet Explorer Browsers
try{
ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
}catch (e) {
try{
ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
}catch (e){
// Something went wrong
alert("Your browser broke!");
return false;
}
}
}
ajaxRequest.onreadystatechange = function(){
if(ajaxRequest.readyState == 4 && ajaxRequest.status==200){
var ajaxDisplay = document.getElementById(divSortie);
ajaxDisplay.innerHTML = ajaxRequest.responseText;
}
}
var idchamps = document.getElementById(idChampsCntrl);
ajaxRequest.open(method, fichierParh+"?"+paramUrl+"="+idchamps.value+"&nomMethode="+nomMethode, true);
ajaxRequest.send();
return ajaxRequest; 
}
