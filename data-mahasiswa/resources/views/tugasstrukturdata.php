<?php
class Queue
{
    private $items = array();

    public function enqueue($item)
    {
        array_push($this->items, $item);
    }

    public function dequeue()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->items);
        }
    }

    public function isEmpty()
    {
        return empty($this->items);
    }
}

$myQueue = new Queue();
$myQueue->enqueue("A");
$myQueue->enqueue("B");
$myQueue->enqueue("C");

echo $myQueue->dequeue();
