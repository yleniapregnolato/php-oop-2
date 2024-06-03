<?php

class Products {
    private string $name;
    private string $image;
    private int $price;

    // costruttore
    public function __construct(string $_name, string $_image, int $_price) {
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
    }
    // getter
    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getFullInfo() {
        return $this->name . $this->image . $this->price . "€";
    }
    
}

?>