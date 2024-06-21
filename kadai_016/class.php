<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <?php
        class Food {
            private $name;
            private $price;

            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
            
           function show_price(){
                echo "$this->price";
           }
        }

        class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height,int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            function show_height(){
                echo "$this->height";
            }
        }

        $food = new Food('potato',250);
        $animal = new Animal('dog',60,5000);

        print_r($food);
        echo "<br>";
        print_r($animal);
        echo "<br>";
        $food->show_price();
        echo "<br>";
        $animal->show_height();

        ?>
 </body>
 
 </html>
