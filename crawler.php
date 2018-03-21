 <!DOCTYPE html>
<html>
<body>
<p> Crawler<p>
<form action="" method="GET">
	</br>
	<input style="width:30%;" type="text" name="search" /><br />
    <input style="width:20%;" type="submit" name="submit" value="Crawl!" />
</form>

<?php
 $url =  $_GET['search'];

 //echo $url;

 if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}

$doc = new DOMDocument();
$doc->loadHTMLFile("$url");
//echo $doc->saveHTML();
$tags = $doc->getElementsByTagName('a');

//echo $tags;
foreach ($tags as $tag) {
    echo $tag->nodeValue, PHP_EOL;
	$urls = $tag.getAtribute('href');
	echo $urls;
}
?>

</body>
</html> 
