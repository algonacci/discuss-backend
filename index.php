<?php
header('Content-type: application/json');
echo json_encode(array(
    "status_code" => 200,
    "message" => "Hello World!",
));
