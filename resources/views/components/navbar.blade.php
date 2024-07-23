<div>
    <div class="w-full secondary-bg h-15 grid grid-cols-12 justify-between p-5 z-100 shadow-lg">
        <div class="flex-row flex col-span-3 justify-start  w-full">
            <x-zondicon-menu class="w-4 h-4 mt-0.5 text-white cursor-pointer" />
          <div class="flex flex-row justify-between w-ful">
            <div class="flex-row flex cursor-pointer ml-10 mr-5">
                <x-zondicon-dashboard class="w-4 h-4 mt-0.5 text-white " />
                <a href="{{ route('dashboard') }}">
                    <p class="text-white text-center pl-2 hover:underline text-sm {{ request()->routeIs('dashboard') ? 'font-semibold' : '' }}"> Dashboard </p>
                </a>
            </div>
            <div class="flex-row flex cursor-pointer ">
                <x-zondicon-folder class="w-4 h-4 mt-0.5 text-white " />
                <a href="{{ route('collections') }}">
                    <p class="text-white text-center pl-2 hover:underline text-sm {{ request()->routeIs('collections') ? 'font-semibold' : '' }}"> Collections </p>
                </a>
            </div>
          </div>
        </div>

        <div class="col-span-9  ml-6 flex justify-end ">
       <div class="flex flex-row ">
        <div>
            <x-heroicon-s-plus-small class="w-6 h-6 text-white mr-10 cursor-pointer" />

        </div>
        <div class="flex flex-row">
            <x-zondicon-search class="w-4 h-4 mt-1 text-white mx-2 cursor-pointer" />
            <x-zondicon-notifications-outline  class="w-4 h-4 mt-1 mx-2 text-white  cursor-pointer" />
            <x-heroicon-s-user class="w-5 h-5 mt-0.5 mx-2 text-white border border-white rounded-full cursor-pointer" />
        </div>
       </div>
        </div>
    </div>
</div>
