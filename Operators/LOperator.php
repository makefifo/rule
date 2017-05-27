<?php
namespace Rule\Operators;

use Rule\RuleInterface;
use Rule\Variable;


abstract class LOperator implements RuleInterface
{
    public $data = array();

    public function __construct(array $conditions)
    {
        foreach ($conditions as $cdt) {
            $this->data[] = $cdt;
        }
    }

    protected function setCondition($condition)
    {
        $this->data[] = $condition;
    }
}
