<?php

namespace Recruitment\Element;

class Coil extends AbstractElement{
    public function setType()
    {
        $this->type = AbstractElement::TYPE_INDUCTION;
        return $this;
    }
}
?>