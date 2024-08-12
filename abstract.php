<?php 

abstract class Product {
    private $title, 
           $writer,
           $publisher,
           $price,
           $discon = 0;

    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0 ) {
        $this->title = $title;
        $this->writer = $writer;
        $this->publisher = $publisher;
        $this->price = $price;
    }

    public function setTitle( $title ) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setWriter( $writer ) {
        $this->writer = $writer;
    }

    public function getWriter() {
        return $this->writer;
    }

    public function setPublisher( $publisher ) {
        $this->publisher = $publisher;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function setDiscon( $discon ) {
        $this->discon = $discon;
    }

    public function getDiscon() {
        return $this->discon;
    }

    public function setPrice( $price ) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price - ( $this->price * $this->discon / 100 );
    }

    public function getLabel() {
        return "$this->writer, $this->publisher";
    }

    abstract public function getInfoProduct();

    public function getInfo() {
        $str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";

        return $str;
    }

}


class Comic extends Product {
    public $page;

    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0, $page = 0 ) {

        parent::__construct( $title, $writer, $publisher, $price );

        $this->page = $page;
    }

    public function getInfoProduct() {
        $str = "Comic : " . $this->getInfo() . " - {$this->page} Page.";
        return $str;
    }
}


class Game extends Product {
    public $Hours;

    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0, $Hours = 0 ) {
        parent::__construct( $title, $writer, $publisher, $price );

        $this->Hours = $Hours;
    }

    public function getInfoProduct() {
        $str = "Game : " . $this->getInfo() . " ~ {$this->Hours} Hours.";
        return $str;
    }
}


class CetakInfoProduct {
    public $listProduct = array();

    public function addProduct( Product $Product ) {
        $this->listProduct[] = $Product;
    }

    public function cetak() {
        $str = "List Product : <br>";

        foreach( $this->listProduct as $p ) {
            $str .= "- {$p->getInfoProduct()} <br>";
        }

        return $str;
    }
}


$Product1 = new Comic("Tereliye", "Vegas", "Khai", 1999, 100);
$Product2 = new Game("Naruto", "Kakashi", "Kagura", 5999, 50);

$cetakProduct = new CetakInfoProduct();
$cetakProduct->addProduct( $Product1 );
$cetakProduct->addProduct( $Product2 );
echo $cetakProduct->cetak();