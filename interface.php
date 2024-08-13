<?php 

interface InfoProduct {
    public function getInfoProduct();
}

Abstract class Product {
    protected $title, 
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

    abstract public function getInfo();

}


class Comic extends Product implements InfoProduct {
    public $page;

    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0, $page = 0 ) {

        parent::__construct( $title, $writer, $publisher, $price );

        $this->page = $page;
    }

    public function getInfo() {
        $str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";

        return $str;
    }

    public function getInfoproduct() {
        $str = "Comic : " . $this->getInfo() . " - {$this->page} Page.";
        return $str;
    }
}


class Game extends product implements Infoproduct {
    public $Hours;

    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0, $Hours = 0 ) {
        parent::__construct( $title, $writer, $publisher, $price );

        $this->Hours = $Hours;
    }

    public function getInfo() {
        $str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";

        return $str;
    }

    public function getInfoproduct() {
        $str = "Game : " . $this->getInfo() . " ~ {$this->Hours} Hours.";
        return $str;
    }
}


class CetakInfoproduct {
    public $addproduct = array();

    public function addproduct( product $product ) {
        $this->addproduct[] = $product;
    }

    public function print() {
        $str = "LIST product : <br>";

        foreach( $this->addproduct as $p ) {
            $str .= "- {$p->getInfoproduct()} <br>";
        }

        return $str;
    }
}


$product1 = new Comic("Tereliye", "Vegas", "Khai", 1999, 100);
$product2 = new Game("Naruto", "Kakashi", "Kagura", 5999, 50);

$cetakproduct = new CetakInfoproduct();
$cetakproduct->addproduct( $product1 );
$cetakproduct->addproduct( $product2 );
echo $cetakproduct->print();

// $tes = new product();







