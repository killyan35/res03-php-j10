<!--attributs-->
<!--Une Category a 4 attributs privés :-->

<!--$id qui peut être null ou un int-->
<!--$name qui est une string-->
<!--$description qui est une string-->
<!--$books qui est un array qui contiendra des Book-->
<!--constructeur-->
<!--Le constructeur prend id, name et description en paramètres et les initialise. Il initialise books comme un tableau vide.-->

<!--getters et setters-->
<!--Tous les attributs ont des getters et setters publics.-->


<?php
class Category {

    // private attribute
    private ?int $id;
    private string $name;
    private string $description;
    private array $books;

    // public constructor
    public function __construct(?int $id, string $name, string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->books = [];
    }

    // public getter
    public function getId() : ?int
    {
        return $this->id;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getDescription() : string
    {
        return $this->description;
    }
     public function getBooks() : array
    {
        return $this->books;
    }
    
    
    // public setter
    public function setId(int $id) : ?int
    {
        $this->id = $id;
    }
    public function setName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }
    public function setDescription(string $description) : void
    {
        $this->description = $description;
    }
    public function setBooks(array $books) : array
    {
        $this->books = $books;
    }
    
    
    
    public function addBook(Book $book) : array
    {
        $this->books[] = $book;
        return $this->books;
    }
    
 
    public function removeBook(Book $book) : array
    {
         foreach($this->books as $key=>$Book){
            
            if($Book->getId() === $book->getId()){
                
                unset($this->books[$key]);
                
            }
            
        }
        return $this->books;   
    }
}
?>
<!--méthodes-->
<!--Category a deux méthodes publiques :-->

<!--addBook(Book $book) : array qui ajoute le livre passé en paramètre au tableau des livres.-->
<!--removeBook(Book $book) : array qui retire le livre passé en paramètre du tableau des livres-->
