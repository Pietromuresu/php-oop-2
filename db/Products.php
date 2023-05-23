<?php
include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/Food.php';
include __DIR__ . '/../Models/Accessory.php';
include __DIR__ . '/../Models/Toy.php';


$products = [
  new Toy('4 balls SET', '19,99', 'balls-300x300.jpg', new Species('dog'), 'A set of 4 coloured balls for your dog', 'ND' ),
  new Accessory('Aquarium', '229,99', 'aquarium.jpeg', new Species('fish'), 'glass, plastic', '129cm x 40xm x 60cm' ),
  new Accessory('Bird Cage', '59,99', 'bird-cage.jpeg', new Species('bird'), 'Steel', '50cm x 80cm' ),
  new Food('Bird Food', '9,99', 'bird-food.webp', new Species('bird'), '60g' ,'
  monkfish, spider eye, seaweed'),
  new Food('Dog Bone', '7,99', 'bone-300x300.jpg', new Species('dog'),  '100g', 'bone'),
  new Accessory('Cat Carrier', '59,99', 'cat-carrier-400x400.jpg', new Species('cat'), 'Steel, plastic', '50cm x 80cm' ),
  new Accessory('Cat toilette', '39,99', 'cat-toilette-300x300.jpg', new Species('cat'), 'plastic', '50cm x 80cm' ),

];



