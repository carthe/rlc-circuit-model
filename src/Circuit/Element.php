<?php

namespace Recruitment\Circuit;

use Recruitment\Calculator\Calculator;
use Recruitment\Element\AbstractElement;
use Recruitment\Exception\UnsupportedElementException;


class Element{
    protected string $connectionType;
    protected string $elementType;

    const TYPE_SERIAL = 'serial';
    const TYPE_PARALLEL = 'parallel';

    private $items = array();

    function __construct($conType, $elemType) {

        //check if connection type is valid
        if(
            $conType != Element::TYPE_SERIAL &&
            $conType != Element::TYPE_PARALLEL
        )
            throw new  \InvalidArgumentException();
            
        $this->connectionType = $conType;
        $this->elementType = $elemType;
    }

    function attach($item)
    {
        if($item->getType() != $this->elementType)
                throw new UnsupportedElementException(); 
        
        array_push($this->items, $item);
        return $this;
    }

    function calculate(){
        $calculator = new Calculator;

        $values = array();

        foreach ($this->items as $item) {
            array_push($values, $item->getValue());
        }

        switch($this->elementType){
            case AbstractElement::TYPE_CAPACITY:
                if($this->connectionType == Element::TYPE_SERIAL)
                    return $calculator->reciprocal(...$values);
                if($this->connectionType == Element::TYPE_PARALLEL)
                    return $calculator->strait(...$values);
                break;

            default:
                if($this->connectionType == Element::TYPE_SERIAL)
                    return $calculator->strait(...$values);
                if($this->connectionType == Element::TYPE_PARALLEL) 
                    return $calculator->reciprocal(...$values);
                break;
        }
    }

    /**
     * Get the value of elementType
     */ 
    public function getElementType()
    {
        return $this->elementType;
    }
}

?>