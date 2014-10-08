<link rel="stylesheet" type="text/css" href="./trombinoscope.css" />
<script type="text/javascript" src="./jquery-2.1.1.min.js" ></script>
<script type="text/javascript" src="./trombinoscope.js" ></script>
<?php
//charge le flux rss dans un objet PHP
$xml = simplexml_load_file('./trombinoscope.rss');
$HtmlString = "<h1 class='title'>Trombinoscope Master 2 Technologies de l'Hypermédia 2014/2015</h1><div class='content'>";
$test= "test";
foreach ($xml->channel->item as $tof) {
	$HtmlString = $HtmlString."<span class='divImg'><span class='title'>".$tof->title."</span><img class='img' src='".$tof->enclosure["url"]."' /></span>";
}
$HtmlString = $HtmlString."</div>";
echo $HtmlString;

					