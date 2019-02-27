<?php

function checkMime(string $type, string $fileType) : bool {
     if (($type === "image") && (substr_count($fileType, "image/") > 0))
             return true;
     else
         return false;
}