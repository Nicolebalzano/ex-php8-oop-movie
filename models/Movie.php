<?php
require_once './models/rating.php';
class Movie{
    use Rating;
    public $title;
    public int $release;
    public $director;
    public $age_limit;
    public array $genres;
    // Method
    public function ageLimit(){
        if($this-> age_limit >= 18){
            return "Con limite di età";
        } else{
            return "Adatto a famiglie";
        }
    }
    // Construct
    public function __construct($_title, $_release, $_director, $_age_limit, array $_genres, $rating ) {
        $this->title =$_title;
          $this->release =$_release;
            $this->director =$_director;
              $this->age_limit =$_age_limit;
                    $this->genres =$_genres;
                   $this->rating =$rating;
    }
}
?>