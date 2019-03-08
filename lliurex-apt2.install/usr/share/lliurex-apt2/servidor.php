<?php
$myfile = fopen("/etc/apt/sources.list", "r") or die("Unable to open file!");
$linies = array();
while(!feof($myfile)) {
  $linia=fgets($myfile) ;  
  if ($linia)
     $linies[]=$linia;
}

fclose($myfile);
$propies = array();
$propies[] = array(
  "nom"=>"David",
  "repositori"=>"Vota al PP"
);
$propies[] = array(
  "nom"=>"Windows",
  "repositori"=>"David gasta Windows"
);
$linies[]="Vota al PP";
$result = array(
"linies"=>$linies,
"propies"=>$propies
);
echo json_encode($result);

?>