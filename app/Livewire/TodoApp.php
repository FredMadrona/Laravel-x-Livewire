<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use App\Models\User;

class TodoApp extends Component
{
    public $users;
    public $user_id; // Added user_id for user selection
    public $title;
    public $content;
    public $taskId;

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'user_id' => 'required|exists:users,id', // Validation rule for user_id
    ];

    public function mount()
    {
        // Fetch users and assign to $users property
        $this->users = User::all();
    }

    public function submit()
    {
        $this->validate();

        if ($this->taskId) {
            // Update existing task
            $task = Task::find($this->taskId);
            $task->update([
                'title' => $this->title,
                'content' => $this->content,
                'user_id' => $this->user_id, // Assign user_id when updating task
            ]);
            session()->flash('message', 'Task successfully updated.');
        } else {
            // Create new task
            Task::create([
                'title' => $this->title,
                'content' => $this->content,
                'user_id' => $this->user_id, // Assign user_id when creating task
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
        $this->user_id = $task->user_id; // Populate user_id for editing
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

        return view('livewire.todo-app', [
            'tasks' => $tasks,
            'users' => $this->users, // Pass users to the Blade view
        ]);
    }
}
