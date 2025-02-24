<?php

echo "this is index for Project 1";

// Load file from root.
$file = fopen("banana.txt", "r");
// Print file.
echo fread($file, filesize("banana.txt"));
fclose($file);