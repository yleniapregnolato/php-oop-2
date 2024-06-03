<?php

class Category {
    private string $name;
    private string $icon;

    // costruttore
    public function __construct(string $_name, string $_icon)
    {
        $this->name = $_name;
        $this->icon =$_icon;
    }

    // getter
    public function getCategoryName() {
        return $this->name;
    }

    public function getIcon() {
        return $this->icon;
    }

    public function getFullCategory() {
        return $this->name . $this->icon;
    }
}


?>