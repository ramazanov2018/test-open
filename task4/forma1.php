<?php
$body = file_get_contents('php://input');

$params = array();
parse_str($body, $params);

echo json_encode($params);