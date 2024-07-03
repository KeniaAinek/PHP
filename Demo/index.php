<?php
 $books = [
           [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
           ],
           [
            'name' => 'The Langoliers',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
           ],
           [
            'name' => 'Hail Mary',
            'author' => 'Philip K. Dick',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
           ],
          ];

          /* function filter($items, $fn){
            $filterItems = [];

            foreach ($items as $item){
                if($fn($item)){
                    $filterItems[] = $item;
                }
            }
            return $filterItems;
          } */

          $filterBooks = array_filter($books, function($book){
            return $book['releaseYear'] < 2000;
          });

          include "index.view.php";
          
?>