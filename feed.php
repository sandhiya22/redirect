<?php
header("Content-type: text/xml");

echo '<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0">
<channel>';

 
 
$json = $_GET["json"];
$google = file_get_contents($json);
 $date = date('Y-m-d',strtotime("-1 days"));
$final = json_decode($google,true);
shuffle($final);
$i = 1;
foreach($final as $lol)
{

$lol = str_replace("&","&amp;",$lol);
echo '
  <item>
    <title>'.$_SERVER['HTTP_HOST'].' Link '.$i.'</title>
    <link>'.$lol.'</link>
    <description>'.$_SERVER['HTTP_HOST'].' description '.$i.'</description>
  </item>
';
 $i++;
}
?>
 
</channel>

</rss>
