<?php


class User
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $phone;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {

        $this->password = hash('sha256', $password);
}

    public function checkPassword($password)
    {
        $password = hash('sha256', $password);

        return $this->password === $password;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function __set($name, $value)
    {
        $method = $this->snakeCaseToCamelCase($name);
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }

    protected function snakeCaseToCamelCase($str)
    {
        $upperCamelCase = str_replace('_', '', ucwords($str, '_'));

        return 'set' . ucwords(strtolower(substr($upperCamelCase, 0, 1)) . substr($upperCamelCase, 1));
    }
}