<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function link(): View
    {
       dd(12);
    }
    public function render(): View
    {
        return view('layouts.app');
    }
}
