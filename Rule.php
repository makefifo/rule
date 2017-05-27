<?php
namespace Rule;

use Rule\RuleInterface;
use Rule\Context;


class Rule implements RuleInterface
{
    protected $condition = null;
    protected $action = null;

    public function __construct(RuleInterface $condition, $action = null)
    {
        $this->condition = $condition;
        $this->action = $action;
    }

    public function evaluate(Context $context)
    {
        return $this->condition->evaluate($context);
    }

    public function execute(Context $context)
    {
        if ($this->evaluate($context) && $this->action) {

            return call_user_func($this->action);
        } else {
            return false;
        }
    }
}
