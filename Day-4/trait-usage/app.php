<?php

include __DIR__ . '/DebuggerTrait.php';
include __DIR__ . '/LoggerTrait.php';

include __DIR__ . '/OrderProcessor.php';
include __DIR__ . '/UserManager.php';
include __DIR__ . '/ProductController.php';

$userManager = new UserManager();
$userManager->createUser("JohnDoe");

$productController = new ProductController();
$productController->deleteProduct("1234");

$orderProcessor = new OrderProcessor();
$orderProcessor->processOrder("1001");