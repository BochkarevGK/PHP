<?
header('Content-type: text/html; charset=utf-8');
require_once 'Student.php';
require_once 'Group.php';

$group1 = new Group(1, 'И-02', 2);
$s1 = new Student('Аркаша', 'Мышь', 'Аркадиевич', $group1);
$s2 = new Student('Аркадий', 'Мышь', 'Аркадиевич', $group1);
$s3 = new Student('Арка', 'Мышь', 'Аркадиевич', $group1);

$group1->display();
?>