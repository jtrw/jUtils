<?php

namespace nilBora\Utils;

use nilBora\Utils\Exceptions\ValuesObjectException;

/**
 * Class ValuesObject
 * @package nilBora\Utils
 */
class ValuesObject
{
    /**
     * @var array
     */
    protected $values;
    
    /**
     * ValuesObject constructor.
     * @param array $values
     */
    public function __construct(array $values)
    {
        $this->values = $values;
    } // end __construct
    
    /**
     * @param string $key
     * @return mixed
     * @throws ValuesObjectException
     */
    protected function get(string $key)
    {
        if (!$this->has($key)) {
            throw new ValuesObjectException("Key ".$key." Not Found");
        }
        
        return $this->values[$key];
    } // end get
    
    /**
     * @param string $key
     * @return bool
     */
    protected function has(string $key): bool
    {
        return array_key_exists($key, $this->values);
    } // end has
    
    /**
     * @param string $key
     * @param mixed $value
     * @throws ValuesObjectException
     */
    protected function set(string $key, $value)
    {
        if (!$this->has($key)) {
            throw new ValuesObjectException("Key ".$key." Not Found");
        }
        
        $this->values[$key] = $value;
    } // end set
    
    /**
     * @return false|string
     */
    public function toJson(): string
    {
        return json_encode($this->values);
    } //end toJson
}
