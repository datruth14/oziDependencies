<?php

function linkTo($screen, $label = null, $params = [], $method = "GET", $class = "btn") {
    $queryString = "s=" . urlencode($screen);

    if (!empty($params)) {
        $queryString .= "&" . http_build_query($params);
    }

    $url = "router.php?" . $queryString;
    $hxAttr = strtoupper($method) === "POST" ? "hx-post" : "hx-get";
    $text = $label ?? ucfirst($screen);

    return <<<HTML
<button 
    class="$class"
    $hxAttr="$url"
    hx-target="#appModalContent"
    hx-swap="innerHTML"
    data-screen="$screen"
    data-url="$url"
    onclick="openModalAndPush(this)">
    $text
</button>
HTML;
}

?>
