@extends("components.layouts.app")


@section("content")

<div class="w-full grid grid-cols-10  h-full ">
<div class="col-span-1">
</div>

<div class="col-span-8 p-5 ">

    <div class="flex justify-between items-center border-b pb-4 border-gray-500">
        <div class="flex flex-row items-center mt-5">
            <x-heroicon-m-arrow-left-circle class="h-8 w-8 text-gray-600 cursor-pointer mr-3 mt-2"/>
            <h1 class="font-bold text-white text-3xl cursor-pointer hover:tertiary-text"> School </h1>
        </div>
    
        <div>
            <x-heroicon-c-ellipsis-horizontal class="h-6 w-6 mt-5 text-white cursor-pointer"/>
        </div>
    </div>

    <div class="w-full rounded-lg mt-20 cursor-pointer hover:shadow-xl border border-gray-800">
        <div class="w-full p-5 flex flex-row items-center">
            <x-heroicon-s-plus-circle class="tertiary-text h-6 w-6 "/>
            <h1 class="text-white font-bold text-lg ml-5">Add Task</h1>
        </div>
    </div>

    <div class="w-full p-5  mt-5">
        <div>
            <h1 class="text-lg text-white font-semibold">Task - 0</h1>
        </div>

        <div class="w-full">
            <ul class="mt-3">
                <li>
                    <div class='secondary-bg p-5 items-center rounded-md'>
                        <div class="flex flex-row">
                        <input type="checkbox" name="task" id="task" class="form-checkbox h-5 w-5 tertiary-bg focus:tertiary-text ">
                        <label class="ml-3 text-white cursor-pointer" for="task" >Check for assignment</label>
                        </div>
                        <div class="w-full mt-2 ml-8 flex items-center  cursor-pointer">
                            <x-heroicon-o-calendar class="h-4 w-4 text-red-900"/>
                            <p class="ml-1 text-center text-red-900 "> Today </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class='secondary-bg  p-5 items-center rounded-md mt-3'>
                        <div class="flex flex-row">
                        <input type="checkbox" name="task" id="task" class="form-checkbox h-5 w-5 tertiary-bg focus:tertiary-text ">
                        <label class="ml-3 text-white cursor-pointer" for="task" >Attend group activitities</label>
                        </div>
                        <div class="w-full mt-2 ml-8 flex items-center  cursor-pointer">
                            <x-heroicon-o-calendar class="h-4 w-4 text-red-900"/>
                            <p class="ml-1 text-center text-red-900 "> Today </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>

<div class="col-span-1">
</div>

</div>

@endsection