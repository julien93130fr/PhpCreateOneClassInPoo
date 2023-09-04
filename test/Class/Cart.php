<?php

class Cart
{
    //  class   parametre  attribut
        public   ?int      $quantity   ;
        public    float     $totalPrice ;
    // construct attend ce que l on va demander a lobjet
    public function __construct(int $quantity, float $totalPrice)
    { 
        // on hydrate les données cela veux dire que l on injecte des nouvelles données 
        $this ->quantity   = $quantity;
        $this->totalPrice  = $totalPrice;
    }

    //  création d' une public function du prtix total qui renvoi un float
    public function getTotalPrice(): float
    {
        //  on accede a notre classe et on renvoi le total du price
        return $this->totalPrice;
    }

    //  modifier la valeur du totalPrice avec une function
    //  void veux dire ne renvoie rien 
    public function setTotalPrice(float $price) : void
    {
        // injection des données
        $this->totalPrice = $price;

    }

    public function discount(float $discount) :void
    {
        $this->totalPrice -= $this->totalPrice * ($discount / 100);
    }
   
}

