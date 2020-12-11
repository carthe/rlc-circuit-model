<?php

namespace Recruitment\Element;

use Recruitment\Exception\NullCapacitorException;

class Capacitor extends AbstractElement{

    function __construct($v) {
        if ($v < 0)
            throw new \InvalidArgumentException();
        elseif ($v == 0) {
            throw new NullCapacitorException();
        }
        else{
            $this->setValue($v);
            $this->setType();
        }
    }

    public function setType()
    {
        $this->type = AbstractElement::TYPE_CAPACITY;
        return $this;
    }
}
?>