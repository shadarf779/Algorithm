<?php

// define a list of known phrases or keywords
$keywords = array(
    'send me a file',
    'upload a document',
    'attach a file',
    'email me a document',
    'share a file with me',
);

// get the user input
$user_input = 'senq me a file';

// compare the user input to the list of keywords and select the most similar phrase
$best_match = '';
$lowest_distance = INF;
foreach ($keywords as $keyword) {
    $distance = levenshtein($user_input, $keyword);
    if ($distance < $lowest_distance) {
        $best_match = $keyword;
        $lowest_distance = $distance;
    }
}

// use the best match as the basis for the bot's response
if (!empty($best_match)) {
    echo "Sure, I'll $best_match";
} else {
    echo "Sorry, I didn't understand what you meant.";
}
