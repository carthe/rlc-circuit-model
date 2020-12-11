<?php

namespace Recruitment\Element;

class Resistor extends AbstractElement{
    public function setType()
    {
        $this->type = AbstractElement::TYPE_RESISTANCE;
        return $this;
    }
}
?>