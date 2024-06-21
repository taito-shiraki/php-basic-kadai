<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <?php
        $nums = [15, 4, 18, 23, 10 ];
        function sort_2way($array,$order){
            if($order){
                echo "昇順にソートします。";
                sort($array);
            }
            else
            {
                echo "降順にソートします。";
                rsort($array);
            }

            foreach ($array as $data) {
                echo "<br>$data";
            }

            echo "<br>";
        }

        sort_2way($nums,true);
        sort_2way($nums,false);

        ?>
 </body>
 
 </html>
