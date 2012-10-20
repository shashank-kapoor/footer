<?php
$x = simplexml_load_file("cd.xml");
$q=$_GET["q"];
$i=0;
$nodes = $x->xpath('/CATALOG/VegMenu/TITLE');
$price = $x->xpath('/CATALOG/VegMenu/PRICE');
$roti = $x->xpath('/CATALOG/ROTI/TITLE');
$roti_price = $x->xpath('/CATALOG/ROTI/PRICE');
echo "<div class = \"minu\">";
echo "<p class = \"title\">$q</p>";
echo "<br><br>";
echo "<p class = \"menu-title\">Aapki Pasand</p>";
echo "<br><br>";
for($i=0;$i<=(count($x->VegMenu)-1);$i++)
{
echo "<a href=\"#\" onClick = \"select_item('$nodes[$i]','$price[$i]'); return false;\" class = \"items\">".$nodes[$i][0]."</a>";
echo "<a href=\"#\" class = \"price\">".$price[$i][0]."</a>";
echo "<br><br>";
}
echo "<p class = \"menu-title\">Roti ki Tokri</p>";
echo "<br><br>";
for($i=0;$i<=(count($x->ROTI)-1);$i++)
{
echo "<a href=\"#\" onClick = \"select_item('$roti[$i]','$roti_price[$i]'); return false;\" class = \"items\">".$roti[$i][0]."</a>";
echo "<a href=\"#\" class = \"price\">".$roti_price[$i][0]."</a>";
echo "<br><br>";
}
echo "</div>";
?>