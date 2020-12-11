<?php

namespace Recruitment\Exception;

use Exception;
use Throwable;

class NullCapacitorException extends Exception implements Throwable
{
    //cannot use zero as a value for capacitor
}
?>