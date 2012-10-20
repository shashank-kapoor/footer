<?php
// Fill up array with names
$a[]="Abhishek-Veg-Kothrud";
$a[]="Abacha-Dhaba";
$a[]="Barbeque-Nations";
$a[]="Rushhrs";
$a[]="Delhi-Kitchen";
$a[]="Fasos";
$a[]="Durwankur";
$a[]="Shubham-Veg";
$a[]="Mathura-Veg";
$a[]="Goodluck-Cafe";
$a[]="La-Suite";
$a[]="Mad-over-Donuts";
$a[]="KFC";
$a[]="Mac-Donald";
$a[]="Ande-Ka-Funda";
$a[]="Dominos";
$a[]="Pizza-Hut";
$a[]="Khandesh";
$a[]="Tiranga";
$a[]="Radhe-Krishna";
$a[]="Kaka-Halwai";
$a[]="Haldiram-Sweets";
$a[]="Chitale-Bandhu";
$a[]="Malawani-NonVeg";
$a[]="Vaishali";
$a[]="Oh-Calcutta-NonVeg";
$a[]="Rupali";
$a[]="Purepur-Kolhapur-NonVeg";
$a[]="Karim-Kababs";



//get the q parameter from URL
$q=$_GET["q"];
$hint="";
//lookup all hints from array if length of q>0
if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint=$a[$i];
		$images = "images/" . $a[$i] . ".jpg";
		//echo "<form action = \"#\" method=\"GET\">";
		echo "<div class = \"butt\">";
		echo "<img class = \"hotlogo\" src=".$images." align = \"right\">";
		echo "<p class = \"title\">".$a[$i]."</p>";
		echo "<br><br>";
		echo "<a href = \"#\" onClick = \"myfunction('$a[$i]','OTG'); return false;\" class = \"subtitle\"><img src=\"images/correct.jpg\">&nbsp;Order on the go!</a>";
		echo "<br><br>";
		echo "<a href = \"#\" onClick = \"myfunction('$a[$i]','TB'); return false;\" class = \"subtitle\"><img src=\"images/correct.jpg\">&nbsp;Table Booking</a>";
		echo "<br><br>";
		echo "<a href = \"#\" onClick = \"myfunction('$a[$i]','HD'); return false;\" class = \"subtitle\"><img src=\"images/correct.jpg\">&nbsp;Home Delivery*</a>";
		echo "</div>";
		//echo "</form>";
        }
      else
        {
		$hint=$hint." , ".$a[$i];
		$images = "images/" . $a[$i] . ".jpg";
		//echo "<form action = \"#\" method=\"GET\">";
		echo "<div class = \"butt\">";
		echo "<img class = \"hotlogo\" src=".$images." align = \"right\">";
		echo "<p class = \"title\">".$a[$i]."</p>";
		echo "<br><br>";
		echo "<a href = \"#\" onClick = \"myfunction('$a[$i]','OTG'); return false;\" class = \"subtitle\"><img src=\"images/correct.jpg\">&nbsp;Order on the go!</a>";
		echo "<br><br>";
		echo "<a href = \"#\" onClick = \"myfunction('$a[$i]','TB'); return false;\" class = \"subtitle\"><img src=\"images/correct.jpg\">&nbsp;Table Booking</a>";
		echo "<br><br>";
		echo "<a href = \"#\" onClick = \"myfunction('$a[$i]','HD'); return false;\" class = \"subtitle\"><img src=\"images/correct.jpg\">&nbsp;Home Delivery*</a>";
		echo "</div>";
		//echo "</form>";
		}
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="No results with the keyword found!";
  echo $response;
  }
else
  {
  $response=$hint;
  }

//output the response

?>