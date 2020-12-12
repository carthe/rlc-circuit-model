<?php

namespace Recruitment\Circuit;
use Recruitment\Calculator\Calculator;

use Recruitment\Element\AbstractElement;

class Element{
    protected string $connectionType;
    protected string $elementType;

    const TYPE_SERIAL = 'serial';
    const TYPE_PARALLEL = 'parallel';

    private $items = array();

    public function __construct($conType, $elemType) {
        $this->connectionType = $conType;
        $this->elementType = $elemType;
    }

    public function attach($item)
    {
        array_push($this->items, $item);
        return $this;
    }

    public function calculate(){
        $calculator = new Calculator;

        //figure out how to cast object paramater as fuction arguments

        //return $calculator->strait(...
        //return $calculator->strait($this->items[0]->getValue());

        //also calculation needs to check $elementType

        //temporary workaround
        return 3;
    }
}

?>