<?php
/** Case 7 : Scrap a page, show url inside <a> tag */
require_once "simple-dom/simple_html_dom.php";

/** get html content */
$dom = file_get_html("https://en.wikipedia.org/wiki/Lagrange_point ", false);

$answer = array();

if(!empty($dom)) {
    $i = 0;
    foreach($dom->find(".mediawiki a") as $a) {
        $answer[$i] = $a->attr['href']; 
        
        $i++;
    }
}

print("<pre>".print_r($answer, true)."</pre>");
exit;