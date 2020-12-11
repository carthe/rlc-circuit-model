<?php

namespace Recruitment\Element;

class AbstractElement {
    protected int $value;
    protected string $type;

    const TYPE_CAPACITY = 'capacity';
    const TYPE_INDUCTION = 'induction';
    const TYPE_RESISTANCE = 'resistance';

    function __construct($v) {
        if ($v < 0)
            throw new \InvalidArgumentException();
        else{
            $this->setValue($v);
            $this->setType();
        }
    }

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType()
    {
        return;
    }
}
?>