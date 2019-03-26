<?php

class person
{
    protected $firstName, $lastName, $id;

    public function __construct($first_name, $last_name, $identification)
    {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }

    function printPerson()
    {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}

class Student extends person
{
    protected $scores;

    // Write your constructor here
    public function __construct($first_name, $last_name, $id, $scores)
    {
        parent::__construct($first_name, $last_name, $id);

        $this->scores = array_sum($scores) / count($scores);
    }

    /*
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here
    public function calculate()
    {
        if ($this->scores >= 90) {
            return 'O';
        } elseif ($this->scores >= 80) {
            return 'E';
        } elseif ($this->scores >= 70) {
            return 'A';
        } elseif ($this->scores >= 55) {
            return 'P';
        } elseif ($this->scores >= 40) {
            return 'D';
        } else {
            return 'T';
        }
    }
}

