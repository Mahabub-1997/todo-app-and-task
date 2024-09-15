<?php

require_once 'LoginInterface.php';
require_once 'FileLogin.php';
require_once 'ConsoleLogin.php';

// Create a file login
$fileLogger = new FileLogin('logfile.txt');
$fileLogger->log('This is a message logged to a file.');

// Create a console login
$consoleLogger = new ConsoleLogin();
$consoleLogger->log('This is a message logged to the console.');

// Using both logins in a simple application
function performTask(LoginInterface $logger) {
    $logger->log('Task started.');
    $logger->log('Task completed.');
}

// Perform tasks with different logins
performTask($fileLogger);
performTask($consoleLogger);
?>

