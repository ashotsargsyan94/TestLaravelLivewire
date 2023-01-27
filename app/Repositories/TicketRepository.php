<?php

namespace App\Repositories;

use App\Interfaces\TicketRepositoryInterface;
use App\Models\Ticket;

class TicketRepository implements TicketRepositoryInterface
{

    public function getAllTickets()
    {
        // TODO: Implement getAllOrders() method.
    }

    public function getTicketById($ticketId)
    {
        // TODO: Implement getTicketById() method.
    }

    public function deleteTicket($ticketId)
    {
        // TODO: Implement deleteTicket() method.
    }

    public function createTicket(array $ticketDetails)
    {
        Ticket::create($ticketDetails);
    }

    public function updateTicket($ticketId, array $newDetails)
    {
        // TODO: Implement updateTicket() method.
    }

    public function addTicketReview($user, $ticketId, $review)
    {
        // TODO: Implement addTicketReview() method.
    }

    public function closeTicket()
    {
        // TODO: Implement closeTicket() method.
    }
}
