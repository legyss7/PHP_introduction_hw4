<?php 

namespace Akunts\Hw\books;

class DigitalBook extends Book {
    protected string $downloadLink;

    public function __construct($title, $author, $downloadLink) {
        parent::__construct($title, $author);
        $this->downloadLink = $downloadLink;
    }

    public function getDeliveryMethod() {
        return $this->downloadLink;
    }
}