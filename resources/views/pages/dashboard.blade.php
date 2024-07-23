@extends('components.layouts.app')


@section('content')
    <div class="w-full grid grid-cols-10  h-full ">
        <div class="col-span-1">
        </div>

        <div class="col-span-8 p-5 ">

            {{-- container for dashboard header --}}
            <div class="w-full flex  justify-between align-center mt-5 items-center px-10">
                <h1 class="text-white text-lg"> Dashboard </h1>
                <x-heroicon-c-ellipsis-horizontal class="h-6 w-6  text-white cursor-pointer " />
            </div>

            {{-- container for use greeting --}}
            <div class="flex-col justify-start align-baseline w-[25%] ml-10 mt-5">
                <h1 class="text-3xl text-white font-semibold"> Good morning, Jane Doe</h1>
                <div class="mt-10 space-x-2">
                    <button class="secondary-bg shadow-sm p-2 px-4 rounded-xl text-xs opacity-80 text-white"> Daily overview
                    </button>
                    <button class="primary-bg shadow-sm p-2 px-4 rounded-xl text-xs opacity-80 text-white border">
                        Statistics </button>

                </div>
            </div>

            {{-- Container for asks --}}
            <div class="m-5">
                {{-- School --}}
                <div class="mt-5 w-full ">
                    <div class="flex flex-row secondary-bg justify-between align-center p-4 rounded-t-lg shadow-lg border-b border">
                        <div class="flex-row flex justify-start">
                            <x-zondicon-book-reference class="h-5 w-5 text-white  mr-3" />
                            <p class="text-white text-md"> School </p>
                        </div>
                        <button>
                            <x-zondicon-cheveron-up class="h-5 w-5 text-white" />
                        </button>
                    </div>
                    <div class="secondary-bg ">
                       <div class="flex flex-row space-x-5 mt-5 px-5 ">
                        <input type="checkbox" class=""> <p class="text-white text-md font-normal"> Check for assignment </p> 
                       </div> 
                       <div class="flex flex-row space-x-5 mt-5 px-5 ">
                        <input type="checkbox" class=""> <p class="text-white text-md font-normal "> Attend group activities </p> 
                       </div> 
                       <div class=" mt-5 flex flex-row space-x-2 items-center border-t border-gray-700 p-3 cursor-pointer">
                        <p class="text-white text-md "> Go to collections </p> <x-zondicon-arrow-thin-right class="h-4 w-4 text-white "/>
                       </div>
                    </div>
                </div>
                {{-- Personal --}}
                <div class="mt-5 w-full ">
                    <div class="flex flex-row secondary-bg justify-between align-center p-4 rounded-t-lg shadow-lg border-b border">
                        <div class="flex-row flex justify-start">
                            <x-zondicon-book-reference class="h-5 w-5 text-white  mr-3" />
                            <p class="text-white text-md"> Personal </p>
                        </div>
                        <button>
                            <x-zondicon-cheveron-up class="h-5 w-5 text-white" />
                        </button>
                    </div>
                    <div class="secondary-bg ">
                       <div class="flex flex-row space-x-5 mt-5 px-5 ">
                        <input type="checkbox" class=""> <p class="text-white text-md font-normal"> Workout </p> 
                       </div> 
                       <div class="flex flex-row space-x-5 mt-5 px-5 ">
                        <input type="checkbox" class=""> <p class="text-white text-md font-normal "> Read the book </p> 
                       </div> 
                       <div class=" mt-5 flex flex-row space-x-2 items-center border-t border-gray-700 p-3 cursor-pointer">
                        <p class="text-white text-md "> Go to collections </p> <x-zondicon-arrow-thin-right class="h-4 w-4 text-white "/>
                       </div>
                    </div>


                </div>
            </div>

        </div>

        <div class="col-span-1">
        </div>

    </div>
@endsection
