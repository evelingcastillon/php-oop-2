<?php
class User
{
    public $name;
    public $lastname;
    public $nickname;

    function __construct($name, $lastname, $nickname) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->nickname = $nickname;
    }
}

class Product
{
    public $name;
    protected $desc;
    protected $price;
    protected $qty;

    function __construct($name, $desc, $price, $qty)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->qty = $qty;
    }
    public function desc()
    {
        return $this->desc;
    }
}

class Phone extends Product
{
    public $memory;
    protected $operatingSystem;

    function __construct($name, $desc, $price, $qty, $memory, $operatingSystem) {
        
        parent::__construct($name, $desc, $price, $qty);
        $this->memory = $memory;
        $this->operatingSystem = $operatingSystem;
    }
}
