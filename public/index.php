<?php
require('../app/Controllers/UserController.php');
require('../app/Controllers/MainController.php');

// $taskController = new \MyApp\Controllers\TaskController();
$mainController = new \MyApp\Controllers\MainController();

// Define routes and handle requests
if ($_SERVER['REQUEST_URI'] === '/crypto-trade/') {
    // echo $_SERVER['REQUEST_URI'];
    $mainController->index();
} elseif ($_SERVER['REQUEST_URI'] === '/tasks') {
    // $taskController->index();
} elseif ($_SERVER['REQUEST_URI'] === '/tasks/create') {
    // $taskController->create();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === '/tasks') {
    // $taskController->store();
} elseif (preg_match('/^\/tasks\/(\d+)\/edit$/', $_SERVER['REQUEST_URI'], $matches)) {
    $taskId = $matches[1];
    // $taskController->edit($taskId);
} elseif (preg_match('/^\/tasks\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
    $taskId = $matches[1];
    // $taskController->update($taskId);
} elseif (preg_match('/^\/tasks\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
    $taskId = $matches[1];
    // $taskController->delete($taskId);
} else {
    // Handle 404 Not Found
    header('HTTP/1.0 404 not found');
    // http_response_code(404);
    // echo '404 Not Found';
    // echo $_SERVER['REQUEST_URI'];
}
