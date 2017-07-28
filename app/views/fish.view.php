<?php

$output = '<h1>Fish LIST!<br/></h1><ul>';
foreach ($content['fish'] as $fish) {
    $output .= "<li>$fish</li>";
}
$output .= '</ul>';

return $output;