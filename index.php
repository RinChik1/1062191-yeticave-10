<?php
require_once ('helpers.php');
require_once ('massive.php');
require_once ('function.php');

$page_content = include_template('main.php', [
    'categories' => $categories, 
    'catalog' => $catalog,
]);
$layout_content = include_template('layout.php', [
	'content' => $page_content,
    'categories' => $categories, 
	'title' => 'YetiCave - Главная страница'
   
    ]);

print($layout_content);