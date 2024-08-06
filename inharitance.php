<?php  

class Product {
    // property
    // public = vsibility
    public $title,
           $writer,
           $publisher,
           $price,
           $page,
           $hours,
           $type;

// Method yg special yg dimiliki Class, yang langsung ditampilkan
    public function __construct( $type, $title = "Title", $writer = "writer", $publisher = "publisher", 
                                $price = 0, $page = 0, $hours = 0) {
        $this->title = $title;
        $this->writer = $writer;
        $this->publisher = $publisher;
        $this->price = $price;
        $this->page = $page;
        $this->hours = $hours;
        $this->type  = $type;

    }

    // method
    public function getLabel() {
        return "$this->writer, $this->publisher";
    }


    // inheritance Part
    public function getInfoLengkap() {
        $str = "{$this->type} : {$this->title} | {$this->getLabel()} (Rp. {$this->price
        })";

        if( $this->type == "Comic") {
            $str .= " - {$this->page} Page.";
        } else if( $this->type == "game") {
            $str .= " ~ {$this->hours} Hours." ;
        }
        
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
$product1 = new product("Comic", "Naruto", "Kakashi", "Kagura", 1999, 100, null);
$product2 = new product("game", "Tereliye", "Nial Horan", "Khai", 5999, 0, 50);

echo $product1->getInfoLengkap();
echo "<br>";
echo $product2->getInfoLengkap();
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