<?php

namespace App\Livewire;

use App\Models\Tasks;
use Livewire\Component;
use App\Models\Task;

class TodoApp extends Component
{
    public $title;
    public $content;

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        Task::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        session()->flash('message', 'Task successfully created.');

        // Reset form fields
        $this->reset(['title', 'content']);
    }


    public function render()
    {
        return view('livewire.todo-app');
    }
}
