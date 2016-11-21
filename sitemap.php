<?xml version="1.0" encoding="UTF-8"?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

 
 <?php
$json = $_GET["json"];
$google = file_get_contents($json);
 $date = date('Y-m-d',strtotime("-1 days"));
$final = json_decode($google,true);
shuffle($final);
foreach($final as $lol)
{
echo "<url> <loc>$lol</loc> <lastmod>2005-01-01</lastmod> <changefreq>daily</changefreq> <priority>1.0</priority> </url>";
}

?>
 
</urlset> 
