<?php
declare(strict_types=1);

header('Content-Type: text/html; charset=UTF-8');

$dashboardFile = __DIR__ . '/createBarChart_250518_145141.html';
if (is_readable($dashboardFile)) {
    readfile($dashboardFile);
    exit;
}

http_response_code(404);
echo '<!DOCTYPE html><html><head><meta charset="utf-8"><title>Not Found</title></head><body><h1>Dashboard file not found.</h1></body></html>';

