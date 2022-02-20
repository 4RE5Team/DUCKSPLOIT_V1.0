<?php

$i = 0;
error_reporting(E_ERROR | E_PARSE);

$data=file_get_contents('wcpt_tables.json');

$json = json_decode($data, true);


$root = $json['0'];
$query = $root['query'];
$categories = $query['category'];
$columns = $root['columns'];
$columns2 = $columns['laptop'];


// for the head
$version = $root['version'];
$title = $root['title'];
$id = $root['id'];



// head
print_r($title);
echo "<br>";
print_r('id: ');
print_r($id);
echo "<br>";

print_r('version: ');
print_r($version);


echo"<table border=1>";

for ($c = 1; $c < count($columns2); $c++){
	$temp = $columns2[$c];
	$name = $temp['name'];
	name($name);
}
endline();


echo htmlspecialchars($_POST['nom']);
addproduct();
function addproduct(){
echo("<form action=post.php method=post>");
echo("<p>Nom du plat : <input type=text name=name /></p>");
echo("<p>Date de disponibilité : <input type=int name=date /></p>");
echo("<p>Conditionnement : <input type=int name=condi /></p>");
echo("<p>Tarif : <input type=int name=price /></p>");
echo("<p>Stock : <input type=int name=stock /></p>");
echo("<p>Date Limite de Vente (DLV) : <input type=int name=dlv /></p>");
echo("<p>Date Limite de Consomation (DLC) : <input type=int name=dlc /></p>");
echo("<p><input type=submit value=ADD></p>");
echo("</form>");


// Nom du plat	Date de disponibilité	Conditionnement	Stock	Tarif	Panier	DLV	DLC
}













// functions
echo "<tr>";

function name($name)
{
newcell($name);
}

function newcell($title)
{
	$i++;
    echo("<td>$title</td>");
}

function endline()
{
	echo("</tr>");
}




echo "</table>";
?>