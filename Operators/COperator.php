<?php
namespace Rule\Operators;

use Rule\RuleInterface;
use Rule\Variable;


abstract class COperator implements RuleInterface
{
    protected $left;
    protected $right;

    public function __construct(Variable $left, Variable $right)
    {
        $this->left = $left;
        $this->right = $right;
    }
}
