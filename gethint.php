<?php
// Fill up array with names
$a[]="Green Smiley";
$a[]="Yellow Smiley";
$a[]="Orange Shirt";
$a[]="Blue Book";
$a[]="Green Book";
$a[]="Paper";
$a[]="Cool Jacket";
$a[]="Cooler Jacket";
$a[]="Pocket Lint";
$a[]="aExampleItem";
$a[]="bExampleItem";
$a[]="cExampleItem";
$a[]="dExampleItem";
$a[]="eExampleItem";
$a[]="fExampleItem";
$a[]="gExampleItem";
$a[]="hExampleItem";
$a[]="iExampleItem";
$a[]="jExampleItem";
$a[]="kExampleItem";
$a[]="lExampleItem";
$a[]="mExampleItem";
$a[]="nExampleItem";
$a[]="oExampleItem";
$a[]="pExampleItem";
$a[]="qExampleItem";
$a[]="rExampleItem";
$a[]="sExampleItem";
$a[]="tExampleItem";
$a[]="uExampleItem";
$a[]="vExampleItem";
$a[]="wExampleItem";
$a[]="xExampleItem";
$a[]="yExampleItem";
$a[]="zExampleItem";
//All this can come from sql 



// get the q parameter from URL
$q=$_REQUEST["q"]; $hint="";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
  $q=strtolower($q); $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name,0,$len))) {
      if ($hint==="") {
        $hint=$name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint were found
// or output the correct values 
echo $hint==="" ? "<p>No match found.</p>" : "<p>$hint</p>";
?>