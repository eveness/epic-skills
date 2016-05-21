<?php

require 'config.php';
require 'functions.php';

$db = connection($config);

$stmt = $db->prepare("SELECT `m`.*, `u`.`login` FROM `messages` AS `m` 
                    LEFT JOIN `users` AS `u` ON `u`.`id` = `m`.`user_id` 
                    WHERE `m`.`id` = :id");

$stmt->execute([ 'id' => $_GET['id'] ]);

$messages[0] = $stmt->fetch();

include 'template.php';