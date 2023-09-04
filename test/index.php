<?php

//  téléchargement de la classe Cart
require_once('./Class/Cart.php');

//  1étape instancier la classe , puis lui passer les parametre
//  ici la quantity 0 et le totalPrice 100
$cart  = new Cart(0, 100);

// modification du totalPrice
$cart->setTotalPrice(50);

//  creéation d ' un discount price de 5%
$cart->discount(5);

//  exécution dans le lochalhost du var_dump
var_dump($cart->getTotalPrice());