<?php

declare(strict_types=1);

namespace nilBora\Utils\Test;

include_once "Resources/TestValuesObject.php";

//use nilBora\Utils\ValuesObject;

use nilBora\Utils\Exceptions\ValuesObjectException;
use nilBora\Utils\Test\Resources\TestValuesObject;
use nilBora\Utils\ValuesObject;

class ValuesObjectTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testCreateValuesObject()
    {
        $data  = [
            'id'   => 1,
            'name' => "Test Name"
        ];
        
        $valuesObject = new TestValuesObject($data);
        
        $this->assertInstanceOf(ValuesObject::class, $valuesObject);
        
        $this->assertEquals($valuesObject->getID(), $data['id']);
        $this->assertEquals($valuesObject->getName(), $data['name']);
    } // end testCreateValuesObject
    
    public function testUndefinedOption()
    {
        $valuesObject = new TestValuesObject([]);
        $this->assertInstanceOf(ValuesObject::class, $valuesObject);
        
        try {
            $valuesObject->getUndefinedKey();
            $this->fail("Must be ValuesObjectException");
        } catch (ValuesObjectException $exp) {
            $this->assertEquals("Key undefined Not Found", $exp->getMessage());
        }
    } // end testUndefinedOption
}
