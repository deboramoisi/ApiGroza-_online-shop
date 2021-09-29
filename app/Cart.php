<?php

namespace App;

class Cart
{
	// Grupeaza produsele si le stocheaza
	public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    // Recream cart-ul de fiecare data cand il modificam in vreun fel, pe baza vechiului cart
    public function __construct($oldCart) 
    {	
    	if ($oldCart) {
    		$this->items = $oldCart->items;  
    		$this->totalPrice = $oldCart->totalPrice;
    		$this->totalQty = $oldCart->totalQty;
    	}
    }

    public function add($item, $id) {
    	// new item
    	$storedItem = [
    		'quantity' => 0,
    		'price' => $item->price,
    		'item' => $item
		];

		// Verificam daca cosul are vreun produs
		if ($this->items) {
			// Verificam daca avem deja item-ul in cos
			if (array_key_exists($id, $this->items)) {
				$storedItem = $this->items[$id];
			}
		}
		$storedItem['quantity']++;
		$storedItem['price'] = $item->price * $storedItem['quantity'];
        // adaugam in cart la id-ul produsului, produsul modificat
		$this->items[$id] = $storedItem;
        // crestem cantitatea totala din cart
		$this->totalQty++;
        // crestem totalul cart
		$this->totalPrice += $item->price;
    }

    // functionalitate pentru golire cos
    public function removeCart() {
    	$this->items = null;  
    	$this->totalPrice = 0;
    	$this->totalQty = 0;
    }

    // functionalitate pentru stergerea unui intreg produs din cos
    public function removeProduct($id) {
    	$this->totalQty -= $this->items[$id]['quantity'];
    	$this->totalPrice -= $this->items[$id]['price'];
    	unset($this->items[$id]);
    }

    // decrementam cosul cu o unitate /produs trimis
    public function reduceByOne($id) {
    	$this->items[$id]['quantity']--;
    	$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
    	$this->totalQty--;
    	$this->totalPrice -= $this->items[$id]['item']['price'];

    	// Stergem produsul daca qty <= 0
    	if ($this->items[$id]['quantity'] <= 0) {
    		unset($this->items[$id]);
    	}
    }

    // incrementam un produs din cos cu o unitate
    public function increaseByOne($id) {
    	$this->items[$id]['quantity']++;
    	$this->items[$id]['price'] += $this->items[$id]['item']['price'];
    	$this->totalQty++;
    	$this->totalPrice += $this->items[$id]['item']['price'];
    }

}