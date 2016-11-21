<?php
header('Content-Type: application/rss+xml; charset=utf-8');
?>
&#60;?xml version='1.0' encoding='ISO-8859-1'?&#62;
<rss version='2.0'>
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
$lol = "https://".$_SERVER['HTTP_HOST']."/red.php?url=$lol";

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
