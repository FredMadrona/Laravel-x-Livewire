<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TodoApp extends Component

{ public $title;
    public $content;
    public $taskId; 

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        if ($this->taskId) {
            // Update existing task
            $task = Task::find($this->taskId);
            $task->update([
                'title' => $this->title,
                'content' => $this->content,
            ]);
            session()->flash('message', 'Task successfully updated.');
        } else {
            // Create new task
            Task::create([
                'title' => $this->title,
                'content' => $this->content,
            ]);
            session()->flash('message', 'Task successfully created.');
        }

        // Reset form fields
        $this->reset(['title', 'content', 'taskId']);
    }

    public function edit($id)
    {
        $task = Task::find($id);
        $this->taskId = $task->id;
        $this->title = $task->title;
        $this->content = $task->content;
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();
        session()->flash('message', 'Task successfully deleted.');
    }

    public function render()
    {
        // Fetch all tasks from the database
        $tasks = Task::all();

        return view('livewire.todo-app', ['tasks' => $tasks]);
    }
}
