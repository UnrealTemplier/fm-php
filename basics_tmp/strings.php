<?php

// Single-line comment
# Another single-line comment
/*  Multiline
    comment
*/

echo "\n";

$title = "PHP Fundamentals";
$singleQuoteString = 'This is a string with literals only: $title\n\n';
$interpolatedString = "This is an interpolated string: $title\n\n";

echo $singleQuoteString;
echo "\n";
echo $interpolatedString;

$concatenatedString = "Welcome to " . $title . " course!\n";
echo $concatenatedString;

$heredocExample = <<<HEREDOC
    This is a heredoc
    interpolated
    multiline
    string:
    $title
    \n\n
HEREDOC;
echo $heredocExample;

$nowdocExample = <<<'NOWDOC'
    This is a nowdoc
    literal
    multiline string:
    $title
    \n\n
NOWDOC;
echo $nowdocExample;