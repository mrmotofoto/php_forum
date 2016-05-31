<?php require('core/init.php'); ?>

<?php
//Get Template and assign Vars

$topic = new Topic();

$template = new Template('templates/frontpage.php');

//Assign Vars
$template->topics = $topic->getAllTopics();

echo $template;


?>