<!--Un Author a 4 attributs privés :-->

<!--$id qui peut être null ou un int-->
<!--$firstName qui est une string-->
<!--$lastName qui est une string-->
<!--$biography qui peut être null ou une string-->
<!--constructeur-->
<!--Le constructeur prend id, firstName, lastName et biography en paramètres et les initialise.-->

<!--getters et setters-->
<!--Tous les attributs ont des getters et setters publics.-->
<?php
class Author {

    // private attribute
    private ?int $id;
    private string $firstName;
    private string $lastName;
    private ?string $biography;

    // public constructor
    public function __construct(?int $id, string $firstName, string $lastName, ?string $biography)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->biography = $biography;
    }

    // public getter
    public function getId() : int
    {
        return $this->id;
    }
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    public function getLastName() : string
    {
        return $this->lastName;
    }
    public function getBiography() : string
    {
        return $this->biography;
    }
  

    // public setter
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }
    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
    public function setBiography(string $biography) : void
    {
        $this->biography = $biography;
    }
   
}
?>
