<div class="w-full max-w-md mx-auto mt-10">
    <div class="w-full text-center p-5 border border-black m-2 rounded shadow-md">
        <h1 class="cursor-pointer text-green-900 font-bold text-3xl">To Do App</h1>
    </div>

    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" id="title" wire:model="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('title') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
            <textarea id="content" wire:model="content" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('content') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ $taskId ? 'Update Task' : 'Create Task' }}
            </button>
        </div>
    </form>

    <!-- Display the list of created tasks -->
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-gray-700 text-lg font-bold mb-4">Tasks</h2>
        @if($tasks->isEmpty())
            <p class="text-gray-500">No tasks available.</p>
        @else
            <ul>
                @foreach($tasks as $task)
                    <li class="border-b border-gray-200 py-2 flex justify-between items-center">
                        <div>
                            <h3 class="text-gray-900 font-bold">{{ $task->title }}</h3>
                            <p class="text-gray-700">{{ $task->content }}</p>
                        </div>
                        <div class="flex space-x-2">
                            <button wire:click="edit({{ $task->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                Edit
                            </button>
                            <button wire:click="delete({{ $task->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Delete
                            </button>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
