<?php
trait Rating{
public float $rating;
public function getRating(){
    if ($this->rating >= 8) {
            return "Eccellente";
        } elseif ($this->rating >= 5) {
            return "Discreto";
        } else {
            return "Scarso";
        }
}
}
?>