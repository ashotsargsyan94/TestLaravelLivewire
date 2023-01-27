<?php

namespace App\Http\Livewire;

use App\Repositories\TicketRepository;
use Livewire\Component;

class UserTickets extends Component
{
    public string $subject = '';
    public string $content = '';

    public function mount()
    {
        $this->subject = '';
        $this->content = '';
    }

    public function create(TicketRepository $ticketRepository)
    {
        $validatedData = $this->validate([
            'subject' => 'required|string',
            'content' => 'required|string',
        ]);

        $validatedData['creator_id'] = auth()->id();

        $ticketRepository->createTicket($validatedData);

        $this->reset();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.user-tickets');
    }
}
