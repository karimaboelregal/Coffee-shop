<?php
class coffee {
    public $name;
    public $description;
    public $prices;
    function __construct() {
        $this->prices = array();
    }
}
class condement {
    public $id;
    public $name;
    public $price;
}

class flavor {
    public $id;
    public $name;
    public $price;
}


class order {
    public $orderType;
    public $flav;
    public $cond;
    public $coffee;
    function createOrder($t, $f, $c) {
        $this->orderType = $t;
        $this->cond = $c;
        if ($this->orderType == "custom") {
            $this->flav = $f;
        } else {
            $this->coffee = $c;
        }
    }
}



?>