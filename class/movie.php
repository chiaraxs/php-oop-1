<?php

// CLASS
class Movie
{

    // VARIABLES
    public string $title;
    public string $filmDirector;
    public string $genre;
    public string $year;
    public string $productionCompany;
    public string $totalMinutes;
    // / VARIABLES

    // CONSTRUCT
    function __construct(string $_title, string $_filmDirector, string $_genre, string $_year, string $_productionCompany, string $_totalMinutes)
    {
        $this->title = $_title;
        $this->filmDirector = $_filmDirector;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->productionCompany = $_productionCompany;
        $this->totalMinutes = $_totalMinutes;
    }
    // / CONSTRUCT

    // METHODS
    public function getTitle()
    {
        return $this->title;
    }

    public function getFilmDirector()
    {
        return $this->filmDirector;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getProductionCompany()
    {
        return $this->productionCompany;
    }

    public function getTotalMinutes()
    {
        return $this->totalMinutes;
    }
    // / METHODS
}
// / CLASS



?>