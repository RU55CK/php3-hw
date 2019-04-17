<?php

class BookingManager {

    public static function bookRoom(Room $room, Reservation $reservation) {
        $room->addReservation($reservation);

        echo $room . " successfully booked for ". $reservation->getGuest(). " ". $reservation;
    }
}