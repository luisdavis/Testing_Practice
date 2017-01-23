<?php

class Game
{
    protected $title;
    protected $imagePath;
    protected $rating;
    private $placeHolderImagePath = "placeholder.png";

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setImagePath($path)
    {
        if($path == null){
            $this->imagePath = $this->placeHolderImagePath;
            return;
        }
        $this->imagePath = $path;
    }


    public function setRating($rating)
    {
        $this->rating = $rating;
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function getImagePath()
    {
        return $this->imagePath;
    }


    public function getRating()
    {
        return $this->rating;
    }

}