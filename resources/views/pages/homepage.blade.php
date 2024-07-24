@extends("components.layouts.homepagelayout")

@section('content')
<div class="grid grid-rows-12 ">

    <div class="row-span-2 p-10 "></div>

    <div class="row-span-8 p-10  flex flex-col justify-center items-center">
        <div>
            <h1 class="text-white text-3xl text-center font-bold">PLAN IT, DO IT</h1> 
            <br>
            <p class="text-md text-white text-center">
                List it, organize, then do it. <br> 
                A platform where you can list your tasks and plan ahead of it.
            </p>
        </div>
        <div>
            <div class="flex flex-row space-x-4 mt-8">
                <button class="secondary-bg hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Get Started
                </button>
                <button class="bg-transparent hover:bg-gray-500 text-white font-semibold py-2 px-4 border border-white rounded">
                    Learn More
                </button>
            </div>
        </div>
    </div>

    <div class="row-span-2 p-10 "></div>

</div>
@endsection
