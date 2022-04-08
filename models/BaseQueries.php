<?php

abstract class BaseQueries
{
    private DatabaseConnection $database;
    private bool $printErrorInfo;

    public function __construct($database, $printErrorInfo = false)
    {
        $this->database = $database;
        $this->printErrorInfo = $printErrorInfo;
    }

    protected function prepare($query): PDOStatement
    {
        return $this->database->prepare($query);
    }

    protected function printErrorInfo(PDOStatement $statement)
    {
        if ($this->printErrorInfo) {
            cool_dump($statement->errorInfo());
        }
    }

    abstract function findById($id);
}