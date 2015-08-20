<?php
// TODO get total articles for pagination

$articles = dbSelect('articles');

foreach($articles as $article ){
    echo $article['name']."<br />";
}