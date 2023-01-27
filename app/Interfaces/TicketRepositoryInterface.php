<?php

namespace App\Interfaces;

interface TicketRepositoryInterface
{
    public function getAllTickets();
    public function getTicketById($ticketId);
    public function deleteTicket($ticketId);
    public function createTicket(array $ticketDetails);
    public function updateTicket($ticketId, array $newDetails);
    public function addTicketReview($user, $ticketId, $review);
    public function closeTicket();
}
