<?php

declare(strict_types=1);

namespace nilBora\Utils\Test\Resources;

use nilBora\Utils\ValuesObject;

class TestValuesObject extends ValuesObject
{
    public function getID()
    {
        return $this->get('id');
    } // end getID
    
    public function getName()
    {
        return $this->get('name');
    } // end getName
    
    public function getUndefinedKey()
    {
        return $this->get("undefined");
    } // end getUndefinedKey
}
