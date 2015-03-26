function changerPrestation()
{
var divSortie ="fdr_adminbundle_feuillederoute_secteurs";
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
var idChampsCntrl ="fdr_adminbundle_feuillederoute_secteurs";
var method = "GET";
var fichierParh = "../../php/test.php";
var paramUrl = "secteur_id";
var nomMethode = "clientsDeSecteur";
var ajaxRequest=maVarAjax(divSortie,idChampsCntrl,method,fichierParh,paramUrl,nomMethode);
//alert($('#fdr_adminbundle_feuillederoute_secteurs option:selected').attr('value'));
var secteurs= document.getElementById("fdr_adminbundle_feuillederoute_secteurs");
var total="";
for(i=0;i<secteurs.options.length;i++)
	{ 
		if (secteurs.options[i].selected)
		{ 
			total = secteurs.options[i].value+"|"+total;
                        
		}
	}
   var ajaxRequest=maVarAjaxClient(divSortie,total,method,fichierParh,paramUrl,nomMethode);
 
}
function hideClient()
{
    $res= $('#fdr_adminbundle_feuillederoute_typePrestation option:selected').text();
    if($res.toLowerCase()==="ramassage")
    {
        $('#fdr_adminbundle_feuillederoute_clientRamassage').show();
    }
    else 
    {
        $('#fdr_adminbundle_feuillederoute_clientRamassage').hide();
    }

}

function checkForm()
{
    $manGlobal=("#nombreManutention");
    $man1=("#nombreManutentionChauf1");
    $man2=("#nombreManutentionChauf2");
    if($man1+$man2>$manGlobal)
    {
        return false;
        alert("false");
        //("#diffMan").innerHtml("blabla");
        ("#diffMan").hide();
    }
}
function checkMan()
{
    $manGlobal=("#nombreManutention");
    $man1=("#nombreManutentionChauf1");
    $man2=("#nombreManutentionChauf2");
    if($man1+$man2>$manGlobal)
    {
        ("#diffMan").hide();
    }
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
function maVarAjaxClient(divSortie,total,method,fichierParh,paramUrl,nomMethode){
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
//var idchamps = document.getElementById(idChampsCntrl);
ajaxRequest.open(method, fichierParh+"?"+paramUrl+"="+total+"&nomMethode="+nomMethode, true);

ajaxRequest.send();
return ajaxRequest; 
}
