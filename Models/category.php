<?php

class Category {
    private string $name;
    // private string $icon;

    // costruttore
    public function __construct(string $_name)
    {
        $this->name = $_name;
    }

    // getter
    public function getCategoryName() {
        return $this->name;
    }

    public function getIcon() {
        return $this->icon;
    }

}


?>