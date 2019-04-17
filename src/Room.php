<?php

Class Room implements ReservableInterface {

    private $roomType;
    private $hasRestroom;
    private $hasBalcony;
    private $bedCount;
    private $roomNumber;
    private $extras;
    private $price;
    private $reservation = [];

    public function addReservation($reservation): void
    {
        array_push($this->reservation, $reservation);

    }

    public function removeReservation($reservation): void
    {
        // TODO: Implement removeReservation() method.
    }


    /**
     * @return mixed
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param mixed $roomType
     */
    public function setRoomType($roomType): void
    {
        $this->roomType = $roomType;
    }

    /**
     * @return mixed
     */
    public function getHasRestroom()
    {
        return $this->hasRestroom;
    }

    /**
     * @param mixed $hasRestroom
     */
    public function setHasRestroom($hasRestroom): void
    {
        $this->hasRestroom = $hasRestroom;
    }

    /**
     * @return mixed
     */
    public function getHasBalcony()
    {
        return $this->hasBalcony;
    }

    /**
     * @param mixed $hasBalcony
     */
    public function setHasBalcony($hasBalcony): void
    {
        $this->hasBalcony = $hasBalcony;
    }

    /**
     * @return mixed
     */
    public function getBedCount()
    {
        return $this->bedCount;
    }

    /**
     * @param mixed $bedCount
     */
    public function setBedCount($bedCount): void
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return mixed
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * @param mixed $roomNumber
     */
    public function setRoomNumber($roomNumber): void
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras($extras): void
    {
        $this->extras = $extras;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function getReservation(): array
    {
        return $this->reservation;
    }

    /**
     * @param array $reservation
     */
    public function setReservation(array $reservation): void
    {
        $this->reservation = $reservation;
    }



    public function __toString()
    {
        return 'Room <strong>'. $this->getRoomNumber(). '</strong>';
    }


}