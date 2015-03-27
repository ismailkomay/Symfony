<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "fdr_manager";

function secteursDePrestation()
{
$cnx= new PDO("mysql:host=".$GLOBALS['dbhost'].";dbname=".$GLOBALS['dbname']."" ,$GLOBALS['dbuser'],$GLOBALS['dbpass']) ;
//build query
$name = $_GET['typeprestation_id'];
//$name = mysql_real_escape_string($name);
$tbl ="secteur_typeprestation";
$cnd = "typeprestation_id = $name";
$display_string="";
$query = "SELECT secteur_id FROM ".$tbl." WHERE ".$cnd;
$qry_result = $cnx->query($query) or die(mysql_error());

// Insert a new row in the table for each person returned
while($row =$qry_result->fetch(PDO::FETCH_ASSOC)){
//$display_string .= "<option>$row[secteur_id]</option>";
$tbl2 ="secteur";
$cnd2 = "id = $row[secteur_id]";
$query2 = "SELECT libelle FROM ".$tbl2." WHERE ".$cnd2;
$qry_result2 = $cnx->query($query2) or die(mysql_error());
while($row2 =$qry_result2->fetch(PDO::FETCH_ASSOC)){
    $display_string .= "<option value='$row[secteur_id]'>$row2[libelle]</option>";
    }
}
echo $display_string;
}
function clientsDeSecteur()
{
$cnx= new PDO("mysql:host=".$GLOBALS['dbhost'].";dbname=".$GLOBALS['dbname']."" ,$GLOBALS['dbuser'],$GLOBALS['dbpass']) ;
//build query
$name = $_GET['secteur_id'];
$tab=explode("|", $name);

foreach ($tab as $i) {
    
 $table="secteur";
 $condition="id= $i";
 $q="SELECT libelle FROM ".$table." WHERE ".$condition;
 $q_res=$cnx->query($q)or die(mysql_error());
 $secteurs=array();
while($rowS =$q_res->fetch(PDO::FETCH_ASSOC)){
    $secteurs[]=$rowS[libelle];
} 
    //$name = mysql_real_escape_string($name);
$tbl ="client_secteur";
$cnd = "secteur_id = $i";

$query = "SELECT client_id FROM ".$tbl." WHERE ".$cnd;
$qry_result = $cnx->query($query) or die(mysql_error());

// Insert a new row in the table for each person returned
while($row =$qry_result->fetch(PDO::FETCH_ASSOC)){
//$display_string .= "<option>$row[secteur_id]</option>";
$tbl2 ="client";
$cnd2 = "id = $row[client_id] and clientramass = 1 ";
$query2 = "SELECT nom, prenom, nomentreprise FROM ".$tbl2." WHERE ".$cnd2;
$qry_result2 = $cnx->query($query2) or die(mysql_error());
while($row2 =$qry_result2->fetch(PDO::FETCH_ASSOC)){
    if($row2[nomentreprise]!=null)
    {
        $nom=$row2[nomentreprise];
    }
    else {$nom= $row2[nom]." ".$row2[prenom];}
    $res = "<option value='$row[client_id]'>$nom. $secteurs[0]</option>";
    echo $res;
   
    }
     
}

}


}
function hideClient()
{
    $cnx= new PDO("mysql:host=".$GLOBALS['dbhost'].";dbname=".$GLOBALS['dbname']."" ,$GLOBALS['dbuser'],$GLOBALS['dbpass']) ;
    //build query
    $name = $_GET['typeprestation_id'];
    //$name = mysql_real_escape_string($name);
    $tbl ="typeprestation";
    $cnd = "id = $name";
    $display_string="";
    $query = "SELECT libelle FROM ".$tbl." WHERE ".$cnd;
    $qry_result = $cnx->query($query) or die(mysql_error());
    $row =$qry_result->fetch(PDO::FETCH_ASSOC);
    if($row[libelle]==="Ramassage")
    {
        echo "Ramassage";
    }
    else {
        echo "autre";
    }
 }
 
appliquerMethode($_GET['nomMethode']);
function appliquerMethode($nomMethode){
    // echo "<option>".$_GET['nomMethode']."</option>";
        switch ($nomMethode) 
        {
            case "secteursDePrestation":
                secteursDePrestation();
            case "clientsDeSecteur":
                clientsDeSecteur();
            case "hideClient":
                hideClient();
                break;
            default: defaut();
        }
}
function defaut()
{
    echo "<option>nn defini</option>";
}

?>