<?php 

namespace Akunts\Hw\books;

class PhysicalBook extends Book {
    protected string $libraryAddress;

    public function __constructor($title, $author, $libraryAddress) {
        parent::__construct($title, $author);
        $this->libraryAddress = $libraryAddress;
    }

    // Реализация метода получения информации о способе получения книги
    public function getDeliveryMethod() {
        return $this->libraryAddress;
    }
}