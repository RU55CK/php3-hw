<?php

interface ReservableInterface {

    public function addReservation($reservation): void;

    public function removeReservation($reservation): void;


}