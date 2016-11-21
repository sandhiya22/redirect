<?php
//header('Content-Type: application/xml');
header('Content-Type: application/rss+xml; charset=utf-8');
echo '<?xml version="1.0" encoding="utf-8"?>';
echo "<rss version='2.0'>";
echo '<channel>';
 
 
$json = $_GET["json"];
$google = file_get_contents($json);
 $date = date('Y-m-d',strtotime("-1 days"));
$final = json_decode($google,true);
shuffle($final);
$i = 1;
foreach($final as $lol)
{

$lol = str_replace("&","&amp;",$lol);
echo '<item>
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
