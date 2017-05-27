<?php
namespace Rule;


class Value
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function gt(Value $val)
    {
        return $this->value > $val->getValue();
    }

    public function ge(Value $val)
    {
        return $this->value >= $val->getValue();
    }

    public function lt(Value $val)
    {
        return $this->value < $val->getValue();
    }

    public function le(Value $val)
    {
        return $this->value <= $val->getValue();
    }

    public function eq(Value $val)
    {
        $this->value == $val->getValue();
    }
}
