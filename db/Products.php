<?php
include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/Food.php';
include __DIR__ . '/../Models/Accessory.php';
include __DIR__ . '/../Models/Toy.php';


$products = [
  new Toy('Cuccia', '29,99', '#', new Species('Cane'), 'Gioco di gomma', '29x29' ),
  new Accessory('Cuccia', '29,99', '#', new Species('Gatto'), 'ferro', '29x29' ),
  new Food('Cuccia', '29,99', '#', new Species('Uccelli'), '1kg', '29x29' ),
  
];


var_dump($products);

