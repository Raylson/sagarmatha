<?php

if (! function_exists('env')) {
    function voyager_image($path, $modifier = 'default') {
        $img = '.'.pathinfo('storage/'.$path, PATHINFO_EXTENSION);
        $imgName = str_replace($img,'', $path);
        $img = $imgName.'-'.$modifier.$img;

        return $img;
    }
}