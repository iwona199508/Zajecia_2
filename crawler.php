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

error_reporting(E_ERROR | E_PARSE);

 if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo("$url is a valid URL");
	echo "</br>";
} else {
    echo("$url is not a valid URL");
	echo "</br>";
}

// $doc = new DOMDocument();
// $doc->loadHTMLFile("$url");
// $tags = $doc->getElementsByTagName('a');

	function get_links($url) {
    $xml = new DOMDocument();
    $xml->loadHTMLFile($url);
    $links = array();

    foreach($xml->getElementsByTagName('a') as $link) {
        $links[] = $link->getAttribute('href');  
    }
	
    return $links;
} 

$links = get_links($url);
foreach($links as $link){
	print_r($link);
}

 ?>

</body>
</html> 
