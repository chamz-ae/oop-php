<?php  

class Product {
    // property
    // public = vsibility
    // setelah dikasih overriding bagian ini menjadi general
    public $title,
           $writer,
           $publisher;

    //hanya bisa digunakan untuk class parent dan child
    protected $discon;

    // dan ini digunakan khusus class product sendiri
    private $price;

// Method yg special yg dimiliki Class, yang langsung ditampilkan
    public function __construct( $title = "Title", $writer = "writer", $publisher = "publisher", 
    $price = 0) {
        $this->title = $title;
        $this->writer = $writer;
        $this->publisher = $publisher;
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price - ($this->price * $this->discon / 100);
    }

    // method
    public function getLabel() {
        return "$this->writer, $this->publisher";
    }


    // inheritance Part
    public function getInfoProduct() {
        $str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price
        })";

        // if( $this->type == "Comic") {
        //     $str .= " - {$this->page} Page.";
        // } else if( $this->type == "game") {
        //     $str .= " ~ {$this->hours} Hours." ;
        // }
        
        return $str;
    }

}


// child and parent inheritance
class Comic extends Product {
    public $page;


    // OVERIDING
    public function __construct( $title = "Title", $writer = "writer", $publisher = "publisher", 
    $price = 0, $page =100) {

        parent::__construct($title, $writer, $publisher, $price);

        $this->page = $page;
    }

    public function getInfoProduct() {
        $str = "Comic : " . parent::getInfoProduct() . " - {$this->page} Page.";
        return $str;
    }
}

// INHERITANCE PARENT AND CHILD
class Game extends Product {
    public $hours;


    // OVERIDING
    public function __construct( $title = "Title", $writer = "writer", $publisher = "publisher", 
    $price = 0, $hours =50) {

        parent::__construct($title, $writer, $publisher, $price);

        $this->hours = $hours;
    }

    // METHOD DARI VISIBILITY PROTECTED
    public function setDiscon( $discon) {
        return $this->discon = $discon;

    }

    public function getInfoProduct() {
        $str = "Game : " . parent::getInfoProduct() . " - {$this->hours} Hours.";
        return $str;
    }
}

// Object-Type
class CetakInfoProduk {
    public function cetak( product $product ) {
        $str = "{$product->title} | {$product->getLabel()} (Rp. {$product->price})";
        return $str;
    }
    
}

// New Object + penambahan inharitance
$product1 = new Comic("Tereliye", "Vegas", "Khai", 1999);
$product2 = new Game("Naruto", "Kakashi", "Kagura", 5999);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();
echo "<hr>";

$product2->setDiscon(50);
echo $product2->getPrice();


// Old Object
// $product3 = new Product();
// $product3->title = "Naruto";
// $product3->writer = "Kakashi";
// $product3->publisher = "Kagura";
// $product3->price = 1999;

// $product4 = new Product();
// $product4->title = "Tereliye";
// $product4->writer = "Nial Horan";
// $product4->publisher = "Kagura";
// $product4->price = 5999;

// echo "Film : " . $product1->getLabel();
// echo "<br>";
// echo "Comic : " . $product2->getLabel();
// echo "<br>";

// output Object-Type
// $infoproduk1 = new CetakInfoProduk();
// echo $infoproduk1->cetak($product1);