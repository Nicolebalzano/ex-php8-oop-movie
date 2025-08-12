<?php
class Genre{
    public $genreName;
    public $subGenre; 
    public function __construct ($_genreName, $_subGenre){
        $this->genreName = $_genreName;
         $this->subGenre = $_subGenre;
    }
}
?>