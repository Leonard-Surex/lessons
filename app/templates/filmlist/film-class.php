<?php
class Film {
    private $title;
    private $stars;
    private $genre;
    private $tags;

    // Constructor
    public function __construct($title, $stars, $genre, $tags) {
        $this->title = $title;
        $this->stars = $stars;
        $this->genre = $genre;
        $this->tags = $tags;
    }

    // Getters
    public function getTitle() {
        return $this->title;
    }

    public function getStars() {
        return $this->stars;
    }

    public function getStarsHtml() {
        $starRating = round($this->stars); // Assuming $this->stars is a value between 0 and 5
        $htmlOutput = '';

        // Adding full stars
        for ($i = 0; $i < $starRating; $i++) {
            $htmlOutput .= '<i class="text-yellow-500 fas fa-star"></i>'; // full star
        }

        // Adding empty stars for the rest
        for ($i = $starRating; $i < 5; $i++) {
            $htmlOutput .= '<i class="far fa-star"></i>'; // empty star
        }

        return $htmlOutput;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getTags() {
        return $this->tags;
    }

    public function getTagsHtml() {
        if (empty($this->tags)) {
            return '';
        }

        // Split tags into an array
        $tagsArray = explode(',', $this->tags);

        // Start building the HTML string
        $htmlOutput = '';

        // Loop through each tag and create a span element
        foreach ($tagsArray as $tag) {
            $htmlOutput .= '<span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">' . trim($tag) . '</span>';
        }

        return $htmlOutput;    
    }

    // Setters
    public function setTitle($title) {
        $this->title = $title;
    }

    public function setStars($stars) {
        $this->stars = $stars;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function setTags($tags) {
        $this->tags = $tags;
    }
}
