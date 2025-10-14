<?php
function redirectTo($route, $params = [])
{
    // Build query string if parameters exist
    $query = '';
    if (!empty($params)) {
        $query = '&' . http_build_query($params);
    }

    // Output JavaScript redirect
    echo "<script>window.location.href='?s=" . urlencode($route) . $query . "';</script>";
    exit;
}
