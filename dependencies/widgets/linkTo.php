<?php
function linkTo($screen, $params = [], $method = "GET", $label = "", $class = "")
{
    $query = http_build_query(array_merge(["s" => $screen], $params));

    return "<a 
        href='?{$query}' 
        hx-get='?{$query}' 
        hx-target='#appModalContent' 
        hx-trigger='click' 
        hx-push-url='true'
        onclick=\"document.getElementById('appModal').classList.remove('hidden')\"
        class='{$class}'>{$label}</a>";
}
?>
