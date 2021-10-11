<?php
/** Scrap a page */
require_once "simple-dom/simple_html_dom.php";
//get html content from the site.
$dom = file_get_html("https://www.imdb.com/title/tt4154756/reviews?ref_=tt_ql_3", false);
//collect all user’s reviews into an array
$answer = array();
if(!empty($dom)) {
    $divClass = $title = '';
    $i = 0;
    foreach($dom->find(".review-container") as $divClass) {
        //title
        foreach($divClass->find(".title") as $title ) {
            $answer[$i]['title'] = $title->plaintext;
        }
        //ipl-ratings-bar
        foreach($divClass->find(".ipl-ratings-bar") as $ipl_ratings_bar ) {
            $answer[$i]['rate'] = trim($ipl_ratings_bar->plaintext);
        }
        //content
        foreach($divClass->find('div[class="text show-more__control"]') as $desc) {
            $text = html_entity_decode($desc->plaintext);
            $text = preg_replace('/\&#39;/', "'", $text);
            $answer[$i]['content'] = html_entity_decode($text);
        }
        
        $i++;
    }
}
print_r($answer); exit;