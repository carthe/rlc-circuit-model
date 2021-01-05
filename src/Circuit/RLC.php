<?php

namespace Recruitment\Circuit;

use Recruitment\Circuit\Element;
use Recruitment\Element\AbstractElement;
use Recruitment\Element\Capacitor;


class RLC{
    private $resistance = 0;
    private $induction = 0;
    private $capacity;

    private $elements = array();

    function attachElement(Element $element)
    {
        array_push($this->elements, $element);

        switch ($element->getElementType()) {
            case AbstractElement::TYPE_RESISTANCE:
                $this->setResistance($this->getResistance() + $element->calculate());
                break;
            case AbstractElement::TYPE_INDUCTION:
                $this->setInduction($this->getInduction() + $element->calculate());
                break;
            case AbstractElement::TYPE_CAPACITY:
                
                //getting math done...
                if($this->getCapacity() == 0)
                    $value = $this->getCapacity();
                else
                    $value = pow($this->getCapacity(),-1);

                $value = $value+pow($element->calculate(),-1);
                
                $this->setCapacity(pow($value, -1));
                break;
            default:
                break;
        }


        return $this;
    }

    /**
     * Get the value of resistance
     */ 
    public function getResistance()
    {
        return $this->resistance;
    }

    /**
     * Set the value of resistance
     *
     * @return  self
     */ 
    public function setResistance($resistance)
    {
        $this->resistance = $resistance;

        return $this;
    }

    /**
     * Get the value of induction
     */ 
    public function getInduction()
    {
        return $this->induction;
    }

    /**
     * Set the value of induction
     *
     * @return  self
     */ 
    public function setInduction($induction)
    {
        $this->induction = $induction;

        return $this;
    }

    /**
     * Get the value of capacity
     */ 
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @return  self
     */ 
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }
}

?>