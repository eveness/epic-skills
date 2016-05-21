<?php

require 'config.php';
require 'functions.php';

$db = connection($config);

if(!empty($_POST)) {

  if(!empty($_POST['title']) && !empty($_POST['message'])) {
    
    $stmt = $db->prepare("INSERT INTO `messages` SET 
                    `title` = :zagolovok,
                    `message` = :teeeext,
                    `time` = NOW();
               ");
    $stmt->execute([ 'zagolovok' => $_POST['title'], 
                     'teeeext' => $_POST['message'] 
                  ]);

  }
  header('Location: index.php');
}

$stmt = $db->query("SELECT `m`.*, `u`.`login` FROM `messages` AS `m` 
                    LEFT JOIN `users` AS `u` ON `u`.`id` = `m`.`user_id` ");

$messages = $stmt->fetchAll();

include 'template.php';