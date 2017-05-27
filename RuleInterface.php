<?php
namespace Rule;

use Rule\Context;


interface RuleInterface
{
    public function evaluate(Context $context);
}
