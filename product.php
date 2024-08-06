<?php  

class Product {
    // property
    // public = vsibility
    public $title = "Title",
           $writer = "writer",
           $publisher = "publisher",
           $price = 0;

    // method
    public function getLabel() {
        return "$this->title, $this->writer, $this->publisher, $this->price";
    }

}

// $Product1 = new Product();
// $Product1->title = "Tereliye";

// $Product2 = new Product();
// $Product2->title = "Anime";

// var_dump($Product1);
// var_dump($Product2->title);

// Object
$product3 = new Product();
$product3->title = "Naruto";
$product3->writer = "Kakashi";
$product3->publisher = "Kagura";
$product3->price = 1999;

$product4 = new Product();
$product4->title = "Tereliye";
$product4->writer = "Nial Horan";
$product4->publisher = "Kagura";
$product4->price = 5999;

echo "Film : " . $product3->getLabel();
echo "<br>";
echo "Comic : " . $product4->getLabel();
