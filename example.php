<?php
require_once('webm.class.php');

$movie = new webm('source.webm');

if ($movie->valid_webm()) {
	if ($movie->thumbnail('output.webm',125,125)        ) {echo "webm Thumbnail created\n";} else {echo "Problem with creating webm thumbnail\n";}
	if ($movie->thumbnail('output.gif' ,125,125,"webm") ) {echo "gif Thumbnail created\n";} else {echo "Problem with creating gif thumbnail\n";}
} else {
	echo "Not valid webm file\n";
};

?>