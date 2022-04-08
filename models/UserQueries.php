<?php

class UserQueries extends BaseQueries
{
    public function __construct($database)
    {
        parent::__construct($database);
    }

    function userExists($email, $password): bool
    {
        $query = 'select userid from user where email=:email and password=:password and is_active=1';
        $statement = $this->prepare($query);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':password', $password, PDO::PARAM_STR);
        $statement->execute();
        $this->printErrorInfo($statement);
        return $statement->rowCount() >= 1;
    }

    function findById($id)
    {
        $query = 'select first_name, last_name, email, userid from user where userid=:userid and is_active=1';
        $statement = $this->prepare($query);
        $statement->bindParam(':userid', $id, PDO::PARAM_INT);
        $statement->execute();
        $this->printErrorInfo($statement);
        return User::mapFromEntity($statement->fetch(PDO::FETCH_OBJ));
    }
}