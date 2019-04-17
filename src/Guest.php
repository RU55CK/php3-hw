<?php

Class Guest {

    private $firstname;
    private $lastname;

    public function __construct(string $firstname, string $lastname)
    {
        $this->setFirstname($firstname);
        $this->setLastname($lastname);

    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    public function __toString()
    {
        return '<strong>'.$this->getFirstname(). " ". $this->getLastname().'</strong>';
    }

}