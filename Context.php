<?php
namespace Rule;


class Context implements \ArrayAccess
{
    private $values;

    public function __construct(array $values)
    {
        $this->values = $values;
    }

    public function offsetGet($id)
    {
        if (!array_key_exists($id, $this->values)) {
            throw new \Exception('error', -1);
        }

        $value = $this->values[$id];

        return $value instanceof Closure ? $value($this) : $value;
    }

    public function offsetSet($id, $value)
    {
        $this->values[$id] = $value;
    }

    public function offsetExists($id)
    {
        return isset($this->values[$id]);
    }

    public function offsetUnset($id)
    {
        unset($this->values[$id]);
    }
}
