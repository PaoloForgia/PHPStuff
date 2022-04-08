<?php

class Person
{
    private int $id;
    private string $firstName;
    private string $lastName;

    public function __construct(string $firstName, string $lastName, int $id = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->id = $id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Person
    {
        $this->id = $id;
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): Person
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): Person
    {
        $this->lastName = $lastName;
        return $this;
    }
}