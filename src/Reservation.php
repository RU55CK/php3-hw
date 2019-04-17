<?php

Class Reservation implements ReservableInterface {

    private $startDate;
    private $endDate;
    private $guest;

    public function __construct(\DateTime $startDate, \DateTime $endDate, $guest)
    {
        $startDate = $startDate->format('Y-m-d');
        $endDate = $endDate->format('Y-m-d');
        $this->setStartDate($startDate);
        $this->setEndDate($endDate);
        $this->setGuest($guest);
    }

    public function removeReservation($reservation): void
    {
        // TODO: Implement removeReservation() method.
    }

    public function addReservation($reservation): void
    {
        // TODO: Implement addReservation() method.
    }

    /**
     * @return mixed
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * @param mixed $guest
     */
    public function setGuest($guest): void
    {
        $this->guest = $guest;
    }


    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

    public function __toString()
    {
        return "from <time>". $this->getStartDate() . " " . "to <time>".$this->getEndDate(). "</time>";
    }


}