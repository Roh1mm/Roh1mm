<?php
namespace App\Model\Pustaka;
class Book {
    public $ISBN;
    public $title;
    public $category;
    public $description;
    public $language;
    public $authorName;
    public $numberOfPage;
    public $publisher;

    public function __construct($ISBN, $title, $category, $description, $language, $authorName, $numberOfPage, $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->category = $category;
        $this->description = $description;
        $this->language = $language;
        $this->authorName = $authorName;
        $this->numberOfPage = $numberOfPage;
        $this->publisher = $publisher;
    }

    public function showAll() {
        return [
            'ISBN' => $this->ISBN,
            'title' => $this->title,
            'category' => $this->category,
            'description' => $this->description,
            'language' => $this->language,
            'authorName' => $this->authorName,
            'numberOfPage' => $this->numberOfPage,
            'publisher' => $this->publisher
        ];
    }

    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return null;
        }
    }
}