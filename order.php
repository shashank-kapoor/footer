<?php
$item=$_GET["item"];
$price = $_GET["price"];
$item_no = $_GET["item_no"];
echo "<div id = $item_no".div." ><input type=\"checkbox\" checked=\"yes\" name= $item_no id = $item_no value=$price onChange = 'remove_item(this.id)'>$item * 1 = $price<br></div>";
?>