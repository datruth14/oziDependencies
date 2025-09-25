<?php
/**
 * linkTo()
 * Minimal screen navigation helper for Ozi Script Router
 *
 * Usage:
 *   <?= linkTo("about") ?>
 *   <?= linkTo("profile", "&&user=2&&date=23") ?>
 *   <?= linkTo("productView", "&&id=123") ?>
 */
function linkTo(string $screen, string $params = "", string $text = null): string {
    // build query string
    $query = "?s={$screen}" . $params;

    // if text provided → return <a>
    if ($text) {
        return "<a href='#' data-linkto='{$query}'>{$text}</a>";
    }

    // else return attribute only
    return "data-linkto='{$query}'";
}
