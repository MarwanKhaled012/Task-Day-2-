<?php
// Search for how to make \n work in browser.
// note: <br>  

$text = "This is line 1 php.\nThis is line 2 javascript.\nAnd this is line 3 Html.";
$text=nl2br($text);
echo ($text) ;