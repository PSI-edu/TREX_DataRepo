<?php
// This is used by the simple viewer and Wordpress to display things
?>
<h2>Data Available</h2>
<?php

// List out all the directories in the data directory one level up, and all the files in each directory
$dir =  dirname(__DIR__, 1);
$dir = $dir."/data";
$files = scandir($dir);
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        echo "<h3>$file</h3>";
        $subdir = "$dir/$file";
        $subfiles = scandir($subdir);
        foreach ($subfiles as $subfile) {
            if ($subfile != "." && $subfile != "..") {
                echo "<a href='/TREX_DataRepo/data/$file/$subfile'>$subfile</a><br>";
            }
        }
    }
}
