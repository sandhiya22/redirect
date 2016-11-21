<?php
$json = $_GET["json"];
$google = file_get_contents($json);

$final = json_decode($google,true);

foreach($final as $lol)
{
echo $lol."<br>";


}

?>
