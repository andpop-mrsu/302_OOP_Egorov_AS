<?php

namespace App;

function BalanceChecker(string $expression): bool
{
    $stack = new Stack();
    $pairs = [
        ')' => '(',
        '}' => '{',
        ']' => '[',
        '>' => '<'
    ];
    $openBrackets = array_values($pairs);

    foreach (str_split($expression) as $char) {
        if (in_array($char, $openBrackets, true)) {
            $stack->push($char);
        } elseif (isset($pairs[$char])) {
            if ($stack->pop() !== $pairs[$char]) {
                return false;
            }
        }
    }

    return $stack->isEmpty();
}
