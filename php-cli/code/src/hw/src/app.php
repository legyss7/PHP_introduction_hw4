<?php 

use Akunts\Hw\books\DigitalBook;
use Akunts\Hw\books\PhysicalBook;
use  Akunts\Hw\inventory\BookInventory;

require_once __DIR__ . '/vendor/autoload.php';

// Пример использования
$digitalBook = new DigitalBook(
    "Digital Book Title", "Digital Book Author",
    "https://example.com/download-link");
$physicalBook = new PhysicalBook(
    "Physical Book Title", "Physical Book Author", "Library XYZ");

// Создаем инвентарь и добавляем книги
$inventory = new BookInventory();
$inventory->addBook($digitalBook);
$inventory->addBook($physicalBook);

// Увеличиваем счетчик прочтений для каждой книги
$digitalBook->incrementReadCount();
$physicalBook->incrementReadCount();

// Получаем информацию о способе получения всех книг
$deliveryMethods = $inventory->getAllDeliveryMethods();
print_r($deliveryMethods);

// Получаем общую статистку по прочтениям
$totalReadCount = $inventory->getTotalReadCount();
echo "Total Read Count: $totalReadCount";
