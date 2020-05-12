<?php

namespace Source\App\Models;

class Model 
{
   private array $data = [];

    public function __call(string $name, array $arguments)
    {
        /** For method get or set */
        $method = substr($name, 0, 3);

        /** For fieldname after three caracters */
        $fieldname = substr($name, 3);

        switch ($method) {
            case 'get':
                return (isset($this->data[$fieldname]) ? $this->data[$fieldname] : NULL);
            break;
            
            case 'set':
                $this->data[$fieldname] = $arguments[0]; 
            break;
        }
    }

    public function setValues(array $data = [])
    {
        foreach ($data as $key => $value) {
            $this->{"set" . ucfirst($key)}($value);
        }
    }

    public function getValues(): array
    {
        return $this->data;
    }
}

