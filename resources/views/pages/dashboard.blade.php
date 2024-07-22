@extends("components.layouts.app")


@section("content")

<div class="w-full grid grid-cols-10  h-full ">
    <div class="col-span-1">
    </div>
    
    <div class="col-span-8 p-5 ">
        
        {{-- container for dashboard header --}}
        <div class="w-full flex  justify-between align-center mt-5 items-center px-10">
            <h1 class="text-white text-lg"> Dashboard </h1>
            <x-heroicon-c-ellipsis-horizontal class="h-6 w-6  text-white cursor-pointer "/>
        </div>

        {{-- container for use greeting --}}
        <div class="flex-col justify-start align-baseline w-[25%] ml-10 mt-5">
            <h1 class="text-3xl text-white font-semibold"> Good morning, Jane Doe</h1>
            <div class="mt-10 space-x-2">
                <button class="secondary-bg shadow-sm p-2 px-4 rounded-xl text-xs opacity-80 text-white"> Daily overview </button>
                <button class="primary-bg shadow-sm p-2 px-4 rounded-xl text-xs opacity-80 text-white border"> Statistics </button>

            </div>
        </div>

        {{--Container for asks--}}
        <div>

        </div>

    </div>
    
    <div class="col-span-1">
    </div>
    
    </div>

@endsection