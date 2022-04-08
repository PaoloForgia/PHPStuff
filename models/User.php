<?php

class User extends Person
{
    private string $userName;
    private bool $active;
    private bool $admin;

    public function __construct(string $firstName, string $lastName, string $userName, int $id = null, bool $active = true)
    {
        parent::__construct($firstName, $lastName, $id);
        $this->userName = $userName;
        $this->admin = $active;
    }

    static function mapFromEntity($entity): User
    {
        return new User($entity->first_name, $entity->last_name, $entity->email, $entity->userid);
    }

    function getUserName(): string
    {
        return $this->userName;
    }

    function setUserName(string $userName): User
    {
        $this->userName = $userName;
        return $this;
    }

    function isActive(): bool
    {
        return $this->active;
    }

    function setActive(bool $active): User
    {
        $this->active = $active;
        return $this;
    }

    function isAdmin(): bool
    {
        return $this->admin;
    }

    function setAdmin(bool $admin): User
    {
        $this->admin = $admin;
        return $this;
    }
}