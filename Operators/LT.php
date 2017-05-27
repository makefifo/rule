<?php
namespace Rule\Operators;

use Rule\RuleInterface;
use Rule\Context;
use Rule\Variable;


class LT implements RuleInterface
{
    private $left;
    private $right;

    public function __construct(Variable $left, Variable $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function evaluate(Context $context)
    {
        return $this->left->preValue($context)->lt($this->right->preValue($context));
    }
}
