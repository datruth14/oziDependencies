<?php
function linkTo(string $screen, string $params = "", string $text = null): string {
    // normalize params: allow "&&a=1&&b=2" or "&a=1&b=2" or "a=1&b=2"
    $params = trim($params);
    if ($params === "") {
        $qs = '?s=' . urlencode($screen);
    } else {
        // remove leading & or && and ensure it starts with &
        $p = preg_replace('/^[&]+/', '', $params);
        $p = '&' . $p;
        $qs = '?s=' . urlencode($screen) . $p;
    }

    $attrs = "hx-get='{$qs}' hx-target='#appModalContent' hx-swap='innerHTML' hx-push-url='true' onclick=\"openModal()\"";

    if ($text !== null) {
        // return full <a> when text is provided
        return "<a href='{$qs}' {$attrs}>{$text}</a>";
    }

    // else return attribute string to be injected inside button/div tags
    return "{$attrs} data-linkto='{$qs}'";
}
