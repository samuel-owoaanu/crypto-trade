<?php
require('../app/Controllers/UserController.php');
require('../app/Controllers/MainController.php');
require('../app/Controllers/AssetManager.php');

// $taskController = new \MyApp\Controllers\TaskController();
$mainController = new \MyApp\Controllers\MainController();


if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];

$cssBasePath = $uri.'/crypto-trade/public/css/';
$jsBasePath = $uri.'/crypto-trade/public/js/';
$imgBasePath = $uri.'/crypto-trade/public/img/';
// To be used in the header.php layout
$assetManager = new \MyApp\Controllers\AssetManager($cssBasePath,$jsBasePath,$imgBasePath);

// Define routes and handle requests
if ($_SERVER['REQUEST_URI'] === '/home') {
    // echo $_SERVER['REQUEST_URI'];
    $mainController->index();
    echo $uri;
} elseif ($_SERVER['REQUEST_URI'] === '/faq') {
    $mainController->faq();
}
// {
//     // $taskController->index();
// } elseif ($_SERVER['REQUEST_URI'] === '/tasks/create') {
//     // $taskController->create();
// } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === '/tasks') {
//     // $taskController->store();
// } elseif (preg_match('/^\/tasks\/(\d+)\/edit$/', $_SERVER['REQUEST_URI'], $matches)) {
//     $taskId = $matches[1];
//     // $taskController->edit($taskId);
// } elseif (preg_match('/^\/tasks\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
//     $taskId = $matches[1];
//     // $taskController->update($taskId);
// } elseif (preg_match('/^\/tasks\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
//     $taskId = $matches[1];
//     // $taskController->delete($taskId);
// } 
else {
    // Handle 404 Not Found
    // header('HTTP/1.0 404 not found');
    // http_response_code(404);
    // echo '404 Not Found';
    echo $_SERVER['REQUEST_URI'];
    echo "<br>";
    echo ($_SERVER['HTTP_HOST']);
    echo "<br>";
    echo dirname($_SERVER['SCRIPT_NAME']);
    echo "<br>";
    echo $uri;
    echo "<br>";
    echo $assetManager->getCssLink("bootstrap.min.css");
}
