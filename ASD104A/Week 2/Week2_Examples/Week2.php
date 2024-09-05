<?php
require_once('database.php');

$query = 'SELECT * FROM students WHERE firstName=("John")';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>

<?php
require_once('database.php');

$query = 'SELECT * FROM students WHERE GPA>=("2.0") AND major=("ASD")';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>

<?php
require_once('database.php');

$query = 'SELECT * FROM students WHERE state=("CA") OR state=("NY")';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>

<?php
require_once('database.php');

$query = 'SELECT * FROM students WHERE state=("CA") OR state=("NY")';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>