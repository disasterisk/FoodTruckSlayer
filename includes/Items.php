<?php

class Item
{
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
 //   public $Toppings = array();

    public function __construct($ID,$Name,$Description,$Price)
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;

    }
}

$item = new Item(1,"Pizza","Round dough baked with tomato sauce and cheese.",10.00);
$menu[] = $item;

$item = new Item(2,"Hamburger","A patty of ground beef, grilled and served on a bun.",5.00);
$menu[] = $item;

$item = new Item(3,"Popsicle","A piece of flavored ice.",2.00);
$menu[] = $item;











