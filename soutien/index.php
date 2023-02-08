<?php
require "class/Author.php";
require "class/Book.php";
require "class/Category.php";

$tolkien = new Author(null, "J.R.R", "Tolkien", null);
$fantasy = new Category(null, "Fantasy", "Dwarves, elves and magic");
$horror = new Category(null, "Horror", "Brrrrr scary");
$lotr = new Book(null, "Lord of The Rings", $tolkien);

$lotr->addCategory($fantasy);
$lotr->addCategory($horror);

var_dump($lotr);
echo "<br>";

$lotr->removeCategory($horror);

var_dump($lotr);
echo "<br>";

$fantasy->addBook($lotr);
$horror->addBook($lotr);

var_dump($fantasy);
echo "<br>";
var_dump($horror);
echo "<br>";

$horror->removeBook($lotr);

var_dump($horror);
echo "<br>";

?>