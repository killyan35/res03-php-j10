<!--Un Book a 4 attributs privés :-->

<!--$id qui peut être null ou un int-->
<!--$title qui est une string-->
<!--$author qui est un Author-->
<!--$categories qui est un array qui contiendra des Category-->
<!--constructeur-->
<!--Le constructeur prend id, title et author en paramètres et les initialise. Il initialise categories comme un tableau vide.-->

<!--getters et setters-->
<!--Tous les attributs ont des getters et setters publics.-->


<?php
class Book {

    // private attribute
    private ?int $id;
    private string $title;
    private Author $author;
    private array $categories;

    // public constructor
    public function __construct(?int $id, string $title, Author $author)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->categories = [];
    }

    // public getter
    public function getId() : ?int
    {
        return $this->id;
    }
    public function getTitle() : string
    {
        return $this->title;
    }
    public function getAuthor() : string
    {
        return $this->author;
    }
    public function getCategories() : array
    {
        return $this->categories;
    }

    // public setter
    public function setId(?int $id) : ?int
    {
        $this->id = $id;
    }
    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }
    public function setAuthor(string $email) : void
    {
        $this->author = $author;
    }
    public function setCategories(array $categories) : array
    {
        $this->categories = $categories;
    }
    
    
    
    public function addCategory(Category $category) : array
    {
        $this->categories[] = $category;
        return $this->categories;
    }
    
 
    public function removeCategory(Category $category) : array
    {
         foreach($this->categories as $key=>$Category){
            
            if($Category->getId() === $category->getId()){
                
                unset($this->categories[$key]);
                
            }
            
        }
        return $this->categories;   
    }
    
}
?>
<!--méthodes-->
<!--Book a deux méthodes publiques :-->

<!--addCategory(Category $category) : array qui ajoute la catégorie passée en paramètre au tableau des catégories.-->
<!--removeCategory(Category $category) : array qui retire la catégorie passée en paramètre du tableau des catégories-->