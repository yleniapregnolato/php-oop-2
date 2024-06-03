<?php

class Products {
    private string $name;
    private string $image;
    protected int $price;

    // costruttore
    public function __construct(string $_name, string $_image, int $_price) {
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
    }
    
}

?>