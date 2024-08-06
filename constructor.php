<?php  

class Product {
    // property
    // public = vsibility
    public $title,
           $writer,
           $publisher,
           $price;

// Method yg special yg dimiliki Class, yang langsung ditampilkan
    public function __construct( $title = "Title", $writer = "writer", $publisher = "publisher", $price = 0) {
        $this->title = $title;
        $this->writer = $writer;
        $this->publisher = $publisher;
        $this->price = $price;

    }

    // method
    public function getLabel() {
        return "$this->title, $this->writer, $this->publisher, $this->price";
    }

}

// New Object
$product1 = new product("Naruto", "Kakashi", "Kagura", 1999);
$product2 = new product("Tereliye", "Nial Horan", "Khai", 5999);
$product3 = new product("Dragon Ball", "Chames");

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

echo "Film : " . $product1->getLabel();
echo "<br>";
echo "Comic : " . $product2->getLabel();
echo "<br>";
echo "Exp : " . $product3->getLabel();