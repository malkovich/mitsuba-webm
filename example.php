<?php
require_once('webm.class.php');

$movie = new webm('source.webm');

if ($movie->valid_webm()) {
	if ($movie->thumbnail('output.webm',125,125)) {echo "Thumbnail created\n";} else {echo "Problem with creating thumbnail\n";}
} else {
	echo "Not valid webm file\n";
};

?>