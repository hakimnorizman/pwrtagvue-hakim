<div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 377 340"
            xmlns="http://www.w3.org/2000/svg">
            <g>
                <g>
                    <path {{ $attributes->merge(['d' => $whiteTemplate])}}
                       />
                </g>
            </g>
        </svg>

        <!-- Import or change icon here -->
        @if($iconType == 1)
            <x-svg1/>
        @elseif($iconType == 2)
            <x-svg2/>
        @elseif($iconType == 3)
            <x-svg3/>
        @endif
        
        <!-- Import or change icon here -->

        <h4 class="relative mt-6 text-lg font-bold">{{ $title }}</h4>
        <p class="relative mt-2 text-base text-center text-gray-600">{{ $subtitle }}</p>
        <a href="#_" class="relative flex mt-2 text-sm font-medium text-indigo-500 underline">Learn
            More</a>
    </div>
</div>

