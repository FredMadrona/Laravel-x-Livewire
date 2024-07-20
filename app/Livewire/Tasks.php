<?php

namespace App\Livewire;

use Livewire\Component;

class Tasks extends Component
{

    public $title;
    public $content;
    public $taskId; 
    
    public function render()
    {
        return view('livewire.tasks');
    }
}
