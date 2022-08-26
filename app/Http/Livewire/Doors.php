<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Doors extends Component
{
    public array $doors;
    public bool $doorClosed = false;   

    public function setDoorOpenOrClosed() 
    {
        $this->doorClosed = !$this->doorClosed;
    }

    public function render()
    {
        return view('livewire.doors');
    }
}
