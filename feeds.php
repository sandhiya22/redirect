<?php
    header("Content-Type: application/rss+xml; charset=ISO-8859-1");
 
 
    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>My RSS feed</title>';
    $rssfeed .= '<link>http://'.$_SERVER['HTTP_HOST'].'</link>';
    $rssfeed .= '<description>  RSS feed</description>';
    $rssfeed .= '<language>en-us</language>';
  
 
 
$json = $_GET["json"];
$google = file_get_contents($json);
$date = date('Y-m-d',strtotime("-1 days"));
$final = json_decode($google,true);
shuffle($final);
$i = 1;
foreach($final as $lol)
{
$lol = trim($lol);
$lol = str_replace("&","&amp;",$lol);
$lol = "https://".$_SERVER['HTTP_HOST']."/red.php?url=$lol";

 
        $rssfeed .= '<item>';
        $rssfeed .= '<title>'.$_SERVER['HTTP_HOST'].' Link '.$i.'</title>';
        $rssfeed .= '<description>'.$_SERVER['HTTP_HOST'].' description '.$i.'</description>';
        $rssfeed .= '<link>' . $lol . '</link>';
        $rssfeed .= '<pubDate>' . date("D, d M Y H:i:s O", strtotime($date)) . '</pubDate>';
        $rssfeed .= '</item>';
    }
 
    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';
 
    echo $rssfeed;
?>
