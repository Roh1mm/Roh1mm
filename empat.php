<?php

// File: Author.php
class Author {
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function showtype() {
        return [
            'name' => $this->name,
            'description' => $this->description
        ];
    }
}

// File: Book.php
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

// File: Publisher.php
class Publisher {
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }
}

// File utama: Keenam.php
require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

// Contoh penggunaan
$author = new Author("Rohim Amrullah", "An experienced author");
$book = new Book(123456789, "PHP Programming", "Education", "A comprehensive guide to PHP", "English", "Rohim Amrullah", 300, "Tech Books Publishing");
$publisher = new Publisher("Tech Books Publishing", "123 Tech Street", "1234567890");

echo "Author: ";
print_r($author->showtype());

echo "\nBook: ";
print_r($book->showAll());

echo "\nPublisher Phone: ";
echo $publisher->getPhone();
?>
