<?php
namespace Rule;

require_once "RuleInterface.php";
require_once "Context.php";
require_once "Value.php";
require_once "Operators/GT.php";
include_once "Operators/LT.php";


class Variable
{
    private $name;
    private $value;

    public function __construct($name = null, $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function preValue(Context $context)
    {
        if ($this->name && isset($context[$this->name])) {
            $value = $context[$this->name];
        } else {
            $value = $this->value;
        }

        return ($value instanceof Value) ? $value : new Value($value);
    }

    public function gt($var)
    {
        return new Operators\GT($this, $this->ensureVariable($var));
    }

    public function lt($var)
    {
        return new Operators\LT($this, $this->ensureVariable($var));
    }

    protected function ensureVariable($var) 
    {
        return ($var instanceof Variable) ? $var : new Variable(null, $var);
    }
}
