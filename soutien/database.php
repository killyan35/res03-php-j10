<?php
require 'class/Author.php';
require 'class/Book.php';
require 'class/Category.php';

function findAllAuthors() : array

    // se connecter à la base de données

    // récupérer tous les auteurs de la base de données

    // remplir un tableau de Author avec

    // retourner le tableau
{
    $db = new PDO
    (
        "mysql:host=db.3wa.io;port=3306;dbname=kilyangerard_phpj10",
        "kilyangerard",
        "e17f39e5cb4de95dba99a2edd6835ab4"
    );
    $query = $db->prepare("SELECT * FROM authors");
    $query->execute([]);
    $authors = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($authors);
    $return = [];
    foreach ($authors as $author)
    {
        $return[] = new Author($author["id"],$author["first_name"],$author["last_name"],$author["biography"]);
    }
    return $return;
}
// $Authors=findAllAuthors();
// var_dump($Authors);

function findAuthorByFirstAndLastName(string $firstName, string $lastName) : Author
    // se connecter à la base de données

    // récupérer un auteur qui a ce firstName et lastName

    // remplir un Author avec

    // retourner l'Author
{
   $db = new PDO(
        "mysql:host=db.3wa.io;port=3306;dbname=kilyangerard_phpj10",
        "kilyangerard",
        "e17f39e5cb4de95dba99a2edd6835ab4"
    );
    $query = $db->prepare("SELECT * FROM authors WHERE first_name=:first_name AND last_name=:last_name");
    $parameters = [
        'first_name'=>$firstName,
        'last_name'=>$lastName
    ];
    $query->execute($parameters);
    $author = $query->fetch(PDO::FETCH_ASSOC);
    $return = new Author($author["id"],$author["first_name"],$author["last_name"],$author["biography"]);
    return $return ;
}
// $Author=findAuthorByFirstAndLastName("R.L","Stine");
// var_dump($Author);

function findAuthorById(int $id) : Author
    // se connecter à la base de données

    // récupérer un auteur qui a cet id

    // remplir un Author avec

    // retourner l'Author
{
    $db = new PDO(
        "mysql:host=db.3wa.io;port=3306;dbname=kilyangerard_phpj10",
        "kilyangerard",
        "e17f39e5cb4de95dba99a2edd6835ab4"
    );
    $query = $db->prepare("SELECT * FROM authors WHERE id=:id");
    $parameters = [
        'id'=>$id
    ];
    $query->execute($parameters);
    $author = $query->fetch(PDO::FETCH_ASSOC);
    $return = new Author($author["id"],$author["first_name"],$author["last_name"],$author["biography"]);
    return $return ;
}
// $aUthor=findAuthorById("2");
// var_dump($aUthor);
function updateAuthor(Author $author) : void
// se connecter à la base de données

    // sauvegarder l'author dans la base de données

    // ne rien retourner (la fonction retourne void)
{
    $db = new PDO(
        "mysql:host=db.3wa.io;port=3306;dbname=kilyangerard_phpj10",
        "kilyangerard",
        "e17f39e5cb4de95dba99a2edd6835ab4"
    );
    $query = $db->prepare("UPDATE authors SET first_name=:first_name, last_name=:last_name, biography=:biography WHERE authors.id=:id");
    $parameters = [
        'id'=>$author->getId(),
        'first_name'=>$author->getFirstName(),
        'last_name'=>$author->getLastName(),
        'biography'=>$author->getBiography()
    ];
    $query->execute($parameters);
}
// $author = new Author ("2","mari","doucet","torture des etudiant developpeur web");
// updateAuthor($author);

function createAuthor(Author $author) : Author
    // se connecter à la base de données

    // insérer l'author dans la base de données

    // utiliser findAuthorByFirstAndLastName pour le récupérer

    // le retourner
{
    $db = new PDO
    (
        "mysql:host=db.3wa.io;port=3306;dbname=kilyangerard_phpj10",
        "kilyangerard",
        "e17f39e5cb4de95dba99a2edd6835ab4"
    );
    $query = $db->prepare('INSERT INTO authors VALUES (null, :value1, :value2, :value3)');
    $parameters = [
    'value1' => $author->getFirstName(),
    'value2' => $author->getLastName(),
    'value3' => $author->getBiography()
    ];
    $query->execute($parameters);
    
    $newauthor=$query->fetch(PDO::FETCH_ASSOC);
    return $author;
}
// $author2 = new Author (null,"mari","doucet","tue des etudiant developpeur web");
// createAuthor($author2);

function deleteAuthor(Author $author) : void
    // se connecter à la base de données

    // supprimer l'author dans la base de données

    // ne rien retourner (la fonction retourne void)
{
    $db = new PDO(
        "mysql:host=db.3wa.io;port=3306;dbname=kilyangerard_phpj10",
        "kilyangerard",
        "e17f39e5cb4de95dba99a2edd6835ab4"
    );
    $query = $db->prepare("DELETE FROM authors WHERE authors.id=:id");
    $parameters = [
        'id'=>$author->getId()
    ];
    $query->execute($parameters);
}
// $author3=findAuthorById("20");
// deleteAuthor($author3);
function findAllCategories() : array

    // se connecter à la base de données

    // récupérer tous les auteurs de la base de données

    // remplir un tableau de Author avec

    // retourner le tableau
{
    $db = new PDO
    (
        "mysql:host=db.3wa.io;port=3306;dbname=kilyangerard_phpj10",
        "kilyangerard",
        "e17f39e5cb4de95dba99a2edd6835ab4"
    );
    $query = $db->prepare("SELECT * FROM categories");
    $query->execute([]);
    $categories = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($categories);
    $return = [];
    foreach ($categories as $categorie)
    {
        $return[] = new Categorie($categorie["id"],$categorie["first_name"],$categorie["last_name"],$categorie["biography"]);
    }
    return $return;
}
// $Authors=findAllAuthors();
// var_dump($Authors);

function findCategoryByName(string $name) : Category
    // se connecter à la base de données

    // récupérer une catégorie qui a ce name

    // remplir une Category avec

    // retourner la Category
{
   $db = new PDO(
        "mysql:host=db.3wa.io;port=3306;dbname=kilyangerard_phpj10",
        "kilyangerard",
        "e17f39e5cb4de95dba99a2edd6835ab4"
    );
    $query = $db->prepare("SELECT * FROM categories WHERE name=:name");
    $parameters = [
        'name'=>$name
    ];
    $query->execute($parameters);
    $categorie = $query->fetch(PDO::FETCH_ASSOC);
    $return = new Categorie($categorie["id"],$categorie["name"],$categorie["description"]);
    return $return ;
}
// $Author=findAuthorByFirstAndLastName("R.L","Stine");
// var_dump($Author);

function findCategoryById(int $id) : Category
{
    // se connecter à la base de données

    // récupérer une catégorie qui a cet id

    // remplir une Category avec

    // retourner la Category
    $db = new PDO(
        "mysql:host=db.3wa.io;port=3306;dbname=kilyangerard_phpj10",
        "kilyangerard",
        "e17f39e5cb4de95dba99a2edd6835ab4"
    );
    $query = $db->prepare("SELECT * FROM categories WHERE id=:id");
    $parameters = [
        'id'=>$id
    ];
    $query->execute($parameters);
    $categorie = $query->fetch(PDO::FETCH_ASSOC);
    $return = new Categorie ($categorie["id"],$categorie["name"],$categorie["description"]);
    return $return ;
}

function updateCategory(Category $category) : void

    // se connecter à la base de données

    // insérer la category dans la base de données

    // utiliser findCategoryByName pour la récupérer

    // la retourner
{
    $db = new PDO(
        "mysql:host=db.3wa.io;port=3306;dbname=kilyangerard_phpj10",
        "kilyangerard",
        "e17f39e5cb4de95dba99a2edd6835ab4"
    );
    $query = $db->prepare("UPDATE categories SET name=:name, description=:description WHERE categories.id=:id");
    $parameters = [
        'id'=>$category->getId(),
        'name'=>$category->getName(),
        'description'=>$category->getDescription()
    ];
    $query->execute($parameters);
}

function createCategory(Category $category) : Category

    // se connecter à la base de données

    // insérer la category dans la base de données

    // utiliser findCategoryByName pour la récupérer

    // la retourner
{
    $db = new PDO
    (
        "mysql:host=db.3wa.io;port=3306;dbname=kilyangerard_phpj10",
        "kilyangerard",
        "e17f39e5cb4de95dba99a2edd6835ab4"
    );
    $query = $db->prepare('INSERT INTO categories VALUES (null, :value1, :value2)');
    $parameters = [
    
    'value1' => $category->getName(),
    'value2' => $category->getDescription()
    ];
    $query->execute($parameters);
    
    $newcategory=$query->fetch(PDO::FETCH_ASSOC);
    return $category;
}

function deleteCategory(Category $category) : void
{
    // se connecter à la base de données

    // supprimer la catégorie dans la base de données

    // ne rien retourner (la fonction retourne void)

    $db = new PDO(
        "mysql:host=db.3wa.io;port=3306;dbname=kilyangerard_phpj10",
        "kilyangerard",
        "e17f39e5cb4de95dba99a2edd6835ab4"
    );
    $query = $db->prepare("DELETE FROM categories WHERE categories.id=:id");
    $parameters = [
        'id'=>$category->getId()
    ];
    $query->execute($parameters);
}

?>