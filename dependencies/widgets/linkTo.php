<?php
/**
 * linkTo()
 * Minimal screen navigation helper for Ozi Script Router with HTMX
 *
 * Usage:
 *   <?= linkTo("about") ?>
 *   <?= linkTo("profile", "&&user=2&&date=23") ?>
 *   <?= linkTo("productView", "&&id=123", "View Product") ?>
 */
function linkTo(string $screen, string $params = "", string $text = null): string {
    // Build query string
    $query = "?s={$screen}" . $params;

    // htmx attributes
    $attrs = "hx-get='{$query}' 
              hx-target='#appModalContent' 
              hx-trigger='click' 
              hx-swap='innerHTML' 
              data-linkto='{$query}'";

    // If text provided → return <a>
    if ($text) {
        return "<a href='#' {$attrs}>{$text}</a>";
    }

    // Else return attributes only (for button, div, etc.)
    return $attrs;
}
