<?php
namespace Rule\Operators;

use Rule\RuleInterface;
use Rule\Context;


class LogicOr implements RuleInterface
{
    public function evaluate(Context $context)
    {
        foreach ($this->data as $cdt) {
            if ($cdt->evaluate($context) === true) {
                return true;
            }
        }

        return false;
    }
}
