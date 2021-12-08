<?php

function gallery($path="./img", $columns=3){
    if(is_dir($path)){
        echo "<div class=\"gallery\" style=\"--gallery-columns: $columns\">";
        foreach(glob($path . "/*-thumb.jpg") as $filename){
            if(is_file($filename)){
                echo "<a href=\"" . str_replace("-thumb", "", $filename) . "\" data-fancybox=\"" . $path . "\"><img src=\"".$filename."\"/></a>";
            }
        }
        echo "</div>";
    }
}