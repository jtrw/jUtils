<?php

declare(strict_types=1);

namespace Jtrw\Utils\Test\Resources;

use Jtrw\Utils\ValuesObject;

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
