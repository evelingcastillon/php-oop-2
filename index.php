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

$cellulari = [
    new Phone('Iphone 12', "Penta Band - 5G - Wi-Fi - NFC - A-GPS Ceramic Shield - Display Super Retina XDR 6,1''. Resistente a gocce e schizzi - Modalita' Notte Doppia Fotocamera posteriore 12 MP - iOS 14 Processore A14 Bionic - Memoria interna: 128 GB, distribuito da APPLE Italia", 849.00, 1, 128, 'iOS 14'),
    new Phone(' Galaxy S21', 'La foto perfetta non potrà più sfuggirti. Dai il benvenuto a Galaxy S21 5G e S21+ 5G. Grazie a una risoluzione 8K di livello cinematografico, potrai ottenere foto staordinarie direttamente da un video. Qualcosa di rivoluzionario, per entrambi i mondi.', 1079.00, 1, 128, 'Android'),
    
];