<?php 

namespace Akunts\Hw\inventory;

use Akunts\Hw\books\Book;


class Room {
    private BookInventory $bookInventory;

    // public function __construct(BookInventory $bookInventory) {

    //     $this->bookInventory = $bookInventory;
    // }

    public function __construct() {
        
        $this->bookInventory = new BookInventory();
    }
}

class BookInventory {
    protected array $books;

    public function __constructor() {
        $this->books = [];
    }

    // Метод для добавления книги в инвентарь
    public function addBook(Book $book): void {
        $this->books[] = $book;
    }

    // Метод для получения информации о способе получения всех 
    // книг в инвентаре
    public function getAllDeliveryMethods(): array {
        $deliveryMethods = [];
        foreach ($this->books as $book) {
            $deliveryMethods[] = $book->getAllDeliveryMethods();
        }
        return $deliveryMethods;
    }

    // Метод для получения общей статистики по прочтением всех 
    // книг в инвентаре 
    public function getTotalReadCount(): int {
        $totalReadCount = 0;

        foreach ($this->books as $book) {
            $totalReadCount += $book->getTotalReadCount();
        }

        return $totalReadCount;
    }
}