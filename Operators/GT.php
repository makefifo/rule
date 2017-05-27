<?php
namespace Rule\Operators;

require "COperator.php";

use Rule\RuleInterface;
use Rule\Context;


class GT extends COperator
{
    public function evaluate(Context $context)
    {
        return $this->left->preValue($context)->gt($this->right->preValue($context));
    }
}
