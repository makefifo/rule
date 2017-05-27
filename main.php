<?php

require "RuleInterface.php";
require "Rule.php";
require "Context.php";
require "Variable.php";
require "Operators/GT.php";
require "Operators/LogicAnd.php";

$condition = new Rule\Operators\GT(new Rule\Variable('a'), new Rule\Variable('b'));
$condition = new Rule\Operators\LogicAnd([
    new Rule\Operators\GT(new Rule\Variable('a'), new Rule\Variable('b')),
    new Rule\Operators\GT(new Rule\Variable(51), new Rule\Variable(8)),
    ]
);

$ru = new Rule\Rule($condition, function(){
    return 'Hello World!';
});

$ctx = new Rule\Context([
    'a' => 50,
    'b' => 6,
    'c' => 1,
]);

$r = $ru->execute($ctx);
var_dump($r);
