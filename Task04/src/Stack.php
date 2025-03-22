<?php

namespace App;

class Stack implements StackInterface
{
    private $stack;

    public function __construct(...$elements) {
        $this->stack = [];
        if (!empty($elements)) {
            $this->push(...$elements);
        }
    }

    public function push(...$elements): void {
        // Добавляем элементы в конец массива
        foreach ($elements as $element) {
            $this->stack[] = $element;
        }
    }

    public function pop(): mixed {
        if ($this->isEmpty()) {
            return null;
        }
        return array_pop($this->stack); // Удаляем верхний элемент
    }

    public function top(): mixed {
        if ($this->isEmpty()) {
            return null;
        }
        return $this->stack[count($this->stack) - 1]; // Возвращаем последний элемент
    }

    public function isEmpty(): bool {
        return empty($this->stack);
    }

    public function copy(): Stack {
        $newStack = new Stack();
        $newStack->stack = $this->stack;
        return $newStack;
    }

    // Теперь порядок в строковом представлении правильный
    public function __toString(): string {
        return '[' . implode('->', array_reverse($this->stack)) . ']'; // Выводим элементы начиная с последнего
    }
}

