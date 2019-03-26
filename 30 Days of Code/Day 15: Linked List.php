<?php

class Node
{
    public $data;
    public $next;

    function __construct($d)
    {
        $this->data = $d;
        $this->next = null;
    }
}

class Solution
{
    function insert($head, $data)
    {
        $n = new Node($data);

        if ($head == null) {
            $head = $n;
            return $head;
        }

        $temp = $head;
        while ($temp->next !== null) {
            $temp = $temp->next;
        }

        $temp->next = $n;

        return $head;
    }

    function display($head)
    {
        $start = $head;
        while ($start) {
            echo $start->data, ' ';
            $start = $start->next;
        }
    }
}

$T = intval(fgets(STDIN));

$head = null;
$mylist = new Solution();
while ($T-- > 0) {
    $data = intval(fgets(STDIN));
    $head = $mylist->insert($head, $data);
}

$mylist->display($head);
