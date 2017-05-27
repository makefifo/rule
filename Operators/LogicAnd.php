<?php
namespace Rule\Operators;

require "LOperator.php";

use Rule\RuleInterface;
use Rule\Context;


class LogicAnd extends LOperator
{
    public function evaluate(Context $context)
    {
        foreach ($this->data as $cdt) {
            if ($cdt->evaluate($context) == false) {
                return false;
            }
        }

        return true;
    }
}
