@extends('layouts.welcome')

@section('content')
<!-- atas -->
{{-- @foreach ( $boxer as $data ) --}}
<div class="hidden xl:block pt-[50px]"></div>
<div data-slider="" class="relative">
    <div data-slider-cog="" class="hidden">
        {
            "container": ".hero",
            "items": 1,
            "nav": 0,
            "prevButton": ".hero-prev",
            "nextButton": ".hero-next"
        }
    </div>
    <div class="hero">
        <div class="group/s">
            <div class="relative">
                <div class="absolute top-0 right-0 bottom-0 left-0 hidden xl:grid grid-cols-2 gap-[200px]">
                    <div class=""></div>
                    <div class="relative">
                        <div class="absolute top-0 right-0 bottom-0 left-0 bg-[#D5BDA2] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.7s] delay-[.3s] transition-all duration-[.3s]"></div>
                        <div class="absolute top-0 right-0 bottom-0 left-0 bg-[#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.6s] delay-[.4s] transition-all duration-[.3s]"></div>
                        <div class="absolute top-0 right-0 bottom-0 left-0 bg-[#01010F] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.5s] delay-[.5s] transition-all duration-[.3s]"></div>
                        <div class="absolute top-0 right-0 bottom-0 left-0 bg-[#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.4s] delay-[.6s] transition-all duration-[.3s]"></div>
                        {{-- foto --}}
                        @if($atlet && $atlet->image)
                        <img class="absolute top-0 left-0 w-full h-full object-cover object-center group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.3s] delay-[.7s] transition-all duration-[.3s]" src="{{ asset('images/boxers/'. $atlet->image) }}" alt="">
                        @endif
                    </div>
                </div>
                {{-- kata-kata --}}
                <div class="relative max-w-[1320px] mx-auto px-[15px] py-[100px]">
                    <div class="font-bold leading-[1] uppercase">
                        <div class="font-[Oswald]">
                            <div class="text-[80px] md:text-[160px] text-transparent">
                                <div class="flex">
                                    <div class="relative ">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.04s] delay-0 transition-all duration-[.3s]">B</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.03s] delay-[.01s] transition-all duration-[.3s]">B</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.02s] delay-[.02s] transition-all duration-[.3s]">B</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.01s] delay-[.03s] transition-all duration-[.3s]">B</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-0 delay-[.04s] transition-all duration-[.3s]">B</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.08s] delay-[.04s] transition-all duration-[.3s]">O</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.07s] delay-[.05s] transition-all duration-[.3s]">O</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.06s] delay-[.06s] transition-all duration-[.3s]">O</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.05s] delay-[.07s] transition-all duration-[.3s]">O</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.04s] delay-[.08s] transition-all duration-[.3s]">O</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.12s] delay-[.08s] transition-all duration-[.3s]">X</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.11s] delay-[.09s] transition-all duration-[.3s]">X</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.1s] delay-[.1s] transition-all duration-[.3s]">X</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.09s] delay-[.11s] transition-all duration-[.3s]">X</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.08s] delay-[.12s] transition-all duration-[.3s]">X</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.16s] delay-[.12s] transition-all duration-[.3s]">!</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.15s] delay-[.13s] transition-all duration-[.3s]">!</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.14s] delay-[.14s] transition-all duration-[.3s]">!</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.13s] delay-[.15s] transition-all duration-[.3s]">!</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.12s] delay-[.16s] transition-all duration-[.3s]">!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-[40px] md:text-[92px] text-transparent">
                                <div class="flex">
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.28s] delay-[.24s] transition-all duration-[.3s]">T</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.27s] delay-[.25s] transition-all duration-[.3s]">T</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.26s] delay-[.26s] transition-all duration-[.3s]">T</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.25s] delay-[.27s] transition-all duration-[.3s]">T</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.24s] delay-[.28s] transition-all duration-[.3s]">T</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.32s] delay-[.28s] transition-all duration-[.3s]">r</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.31s] delay-[.29s] transition-all duration-[.3s]">r</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.30s] delay-[.30s] transition-all duration-[.3s]">r</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.29s] delay-[.31s] transition-all duration-[.3s]">r</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.28s] delay-[.32s] transition-all duration-[.3s]">r</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.36s] delay-[.32s] transition-all duration-[.3s]">a</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.35s] delay-[.33s] transition-all duration-[.3s]">a</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.34s] delay-[.34s] transition-all duration-[.3s]">a</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.33s] delay-[.35s] transition-all duration-[.3s]">a</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.32s] delay-[.36s] transition-all duration-[.3s]">a</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.40s] delay-[.36s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.39s] delay-[.37s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.38s] delay-[.38s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.37s] delay-[.39s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.36s] delay-[.40s] transition-all duration-[.3s]">n</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.44s] delay-[.40s] transition-all duration-[.3s]">s</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.43s] delay-[.41s] transition-all duration-[.3s]">s</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.42s] delay-[.42s] transition-all duration-[.3s]">s</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.41s] delay-[.43s] transition-all duration-[.3s]">s</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.40s] delay-[.44s] transition-all duration-[.3s]">s</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.48s] delay-[.44s] transition-all duration-[.3s]">f</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.47s] delay-[.45s] transition-all duration-[.3s]">f</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.46s] delay-[.46s] transition-all duration-[.3s]">f</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.45s] delay-[.47s] transition-all duration-[.3s]">f</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.44s] delay-[.48s] transition-all duration-[.3s]">f</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.52s] delay-[.48s] transition-all duration-[.3s]">o</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.51s] delay-[.49] transition-all duration-[.3s]">o</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.50s] delay-[.50] transition-all duration-[.3s]">o</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.49s] delay-[.51] transition-all duration-[.3s]">o</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.48s] delay-[.52] transition-all duration-[.3s]">o</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.56s] delay-[.52s] transition-all duration-[.3s]">r</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.55s] delay-[.53s] transition-all duration-[.3s]">r</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.54s] delay-[.54s] transition-all duration-[.3s]">r</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.53s] delay-[.55s] transition-all duration-[.3s]">r</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.52s] delay-[.56s] transition-all duration-[.3s]">r</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.60s] delay-[.56s] transition-all duration-[.3s]">m</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.59s] delay-[.57s] transition-all duration-[.3s]">m</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.58s] delay-[.58s] transition-all duration-[.3s]">m</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.57s] delay-[.59s] transition-all duration-[.3s]">m</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.56s] delay-[.60s] transition-all duration-[.3s]">m</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.64s] delay-[.60s] transition-all duration-[.3s]">a</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.63s] delay-[.61s] transition-all duration-[.3s]">a</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.62s] delay-[.62s] transition-all duration-[.3s]">a</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.61s] delay-[.63s] transition-all duration-[.3s]">a</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.6s] delay-[.64s] transition-all duration-[.3s]">a</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.68s] delay-[.64s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.67s] delay-[.65s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.66s] delay-[.66s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.65s] delay-[.67s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.64s] delay-[.68s] transition-all duration-[.3s]">t</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.72s] delay-[.68s] transition-all duration-[.3s]">i</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.71s] delay-[.69s] transition-all duration-[.3s]">i</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.70s] delay-[.70s] transition-all duration-[.3s]">i</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.69s] delay-[.71s] transition-all duration-[.3s]">i</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.68s] delay-[.72s] transition-all duration-[.3s]">i</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.76s] delay-[.72s] transition-all duration-[.3s]">o</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.75s] delay-[.73s] transition-all duration-[.3s]">o</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.74s] delay-[.74s] transition-all duration-[.3s]">o</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.73s] delay-[.75s] transition-all duration-[.3s]">o</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.72s] delay-[.76s] transition-all duration-[.3s]">o</div>
                                    </div>
                                    <div class="relative">
                                        <div class="[-webkit-text-stroke:1px_#F67A45] group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.80s] delay-[.76s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.79s] delay-[.77s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.78s] delay-[.78s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.77s] delay-[.79s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.76s] delay-[.80s] transition-all duration-[.3s]">n</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="font-[Teko] pt-[10px] md:pt-[30px]">
                            <div class="text-[30px] md:text-[73px]">
                                <div class="flex">
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.84s] delay-[.80s] transition-all duration-[.3s]">&amp;</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.83s] delay-[.81s] transition-all duration-[.3s]">&amp;</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.82s] delay-[.82s] transition-all duration-[.3s]">&amp;</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.81s] delay-[.83s] transition-all duration-[.3s]">&amp;</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.80s] delay-[.84s] transition-all duration-[.3s]">&amp;</div>
                                    </div>
                                    <div class="">&nbsp;</div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.88s] delay-[.84s] transition-all duration-[.3s]">U</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.87s] delay-[.85s] transition-all duration-[.3s]">U</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.86s] delay-[.86s] transition-all duration-[.3s]">U</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.85s] delay-[.87s] transition-all duration-[.3s]">U</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.84s] delay-[.88s] transition-all duration-[.3s]">U</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.92s] delay-[.88s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.91s] delay-[.89s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.9s] delay-[.9s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.89s] delay-[.91s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.88s] delay-[.92s] transition-all duration-[.3s]">n</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[.96s] delay-[.92s] transition-all duration-[.3s]">i</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.95s] delay-[.93s] transition-all duration-[.3s]">i</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.94s] delay-[.94s] transition-all duration-[.3s]">i</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.93s] delay-[.95s] transition-all duration-[.3s]">i</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.92s] delay-[.96s] transition-all duration-[.3s]">i</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1s] delay-[.96s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.99s] delay-[.97s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.98s] delay-[.98s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.97s] delay-[.99s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[.96s] delay-[1s] transition-all duration-[.3s]">t</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1.05s] delay-[1.01s] transition-all duration-[.3s]">e</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.04s] delay-[1.02s] transition-all duration-[.3s]">e</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.03s] delay-[1.03s] transition-all duration-[.3s]">e</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.02s] delay-[1.04s] transition-all duration-[.3s]">e</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.01s] delay-[1.05s] transition-all duration-[.3s]">e</div>
                                    </div>
                                    <div class="">&nbsp;</div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1.09s] delay-[1.05s] transition-all duration-[.3s]">Y</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.08s] delay-[1.06s] transition-all duration-[.3s]">Y</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.07s] delay-[1.07s] transition-all duration-[.3s]">Y</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.06s] delay-[1.08s] transition-all duration-[.3s]">Y</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.05s] delay-[1.09s] transition-all duration-[.3s]">Y</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1.14s] delay-[1.10s] transition-all duration-[.3s]">O</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.13s] delay-[1.11s] transition-all duration-[.3s]">O</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.12s] delay-[1.12s] transition-all duration-[.3s]">O</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.11s] delay-[1.13s] transition-all duration-[.3s]">O</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.10s] delay-[1.14s] transition-all duration-[.3s]">O</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1.18s] delay-[1.14s] transition-all duration-[.3s]">U</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.17s] delay-[1.15s] transition-all duration-[.3s]">U</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.16s] delay-[1.16s] transition-all duration-[.3s]">U</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.15s] delay-[1.17s] transition-all duration-[.3s]">U</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.14s] delay-[1.18s] transition-all duration-[.3s]">U</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1.22s] delay-[1.18s] transition-all duration-[.3s]">R</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.21s] delay-[1.19s] transition-all duration-[.3s]">R</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.20s] delay-[1.20s] transition-all duration-[.3s]">R</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.19s] delay-[1.21s] transition-all duration-[.3s]">R</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.18s] delay-[1.22s] transition-all duration-[.3s]">R</div>
                                    </div>
                                    <div class="">&nbsp;</div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1.26s] delay-[1.22s] transition-all duration-[.3s]">s</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.25s] delay-[1.23s] transition-all duration-[.3s]">s</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.24s] delay-[1.24s] transition-all duration-[.3s]">s</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.23s] delay-[1.25s] transition-all duration-[.3s]">s</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.22s] delay-[1.26s] transition-all duration-[.3s]">s</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1.30s] delay-[1.26s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.29s] delay-[1.27s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.28s] delay-[1.28s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.29s] delay-[1.29s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.30s] delay-[1.30s] transition-all duration-[.3s]">t</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1.35s] delay-[1.30s] transition-all duration-[.3s]">r</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.34s] delay-[1.32] transition-all duration-[.3s]">r</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.33s] delay-[1.33] transition-all duration-[.3s]">r</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.32s] delay-[1.34] transition-all duration-[.3s]">r</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.31s] delay-[1.35] transition-all duration-[.3s]">r</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1.39s] delay-[1.35s] transition-all duration-[.3s]">e</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.38s] delay-[1.36s] transition-all duration-[.3s]">e</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.37s] delay-[1.37s] transition-all duration-[.3s]">e</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.36s] delay-[1.38s] transition-all duration-[.3s]">e</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.35s] delay-[1.39s] transition-all duration-[.3s]">e</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1.43s] delay-[1.39s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.42s] delay-[1.40s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.41s] delay-[1.41s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.40s] delay-[1.42s] transition-all duration-[.3s]">n</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.39s] delay-[1.43s] transition-all duration-[.3s]">n</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1.47s] delay-[1.43s] transition-all duration-[.3s]">g</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.46s] delay-[1.44s] transition-all duration-[.3s]">g</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.45s] delay-[1.45s] transition-all duration-[.3s]">g</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.44s] delay-[1.46s] transition-all duration-[.3s]">g</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.43s] delay-[1.47s] transition-all duration-[.3s]">g</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1.51s] delay-[1.47s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.50s] delay-[1.48s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.49s] delay-[1.49s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.48s] delay-[1.50s] transition-all duration-[.3s]">t</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.47s] delay-[1.51s] transition-all duration-[.3s]">t</div>
                                    </div>
                                    <div class="relative">
                                        <div class="group-[:not(.tns-slide-active)]/s:scale-y-0 group-[:not(.tns-slide-active)]/s:delay-[1.55s] delay-[1.51s] transition-all duration-[.3s]">h</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.54s] delay-[1.52s] transition-all duration-[.3s]">h</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.53s] delay-[1.53s] transition-all duration-[.3s]">h</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.52s] delay-[1.54s] transition-all duration-[.3s]">h</div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.tns-slide-active]/s:scale-y-0 group-[.tns-slide-active]/s:delay-[1.51s] delay-[1.55s] transition-all duration-[.3s]">h</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-[50px]"></div>
                    <div class="">
                        <div class="">Discover fitness excellence at our premier gym. With top equipment, expert trainers,</div>
                        <div class="md:flex gap-[20px] pt-[10px]">
                            <div class="hidden md:block">
                                <div class="relative top-[-5px]">and dynamic classes, we're committed to helping you reach</div>
                                <div class="">your goals. Join us today and unleash your full potential!</div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-[100px]"></div>
                </div>
            </div>
        </div>
        <div class="group/s">
        </div>
    </div>

</div>
{{-- @endforeach --}}
<!-- /atas -->
{{-- lebel --}}
<div class="overflow-hidden pb-[50px] mt-[-100px]">
    <div data-scroll="[data-scroll-item]" class="">
        <div data-scroll-cog="" class="hidden">
            {
                "scrollTrigger": {
                    "trigger": "[data-scroll-item]"

                }
            }
        </div>
        <div data-scroll-item="" class="group">
            <div class="origin-left relative top-[50px] text-[#01010F] overflow-hidden py-[20px] group-[.c-active]:rotate-[3deg] transition-all duration-[.3s]">
                <div class="origin-top absolute top-0 right-0 bottom-0 left-0 bg-[#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-[.09s] delay-0 transition-all duration-[.3s]"></div>
                <div class="origin-top absolute top-0 right-0 bottom-0 left-0 bg-[#D5BDA2] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-[.06s] delay-[.03s] transition-all duration-[.3s]"></div>
                <div class="origin-top absolute top-0 right-0 bottom-0 left-0 bg-[#01010F] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-[.03s] delay-[.06s] transition-all duration-[.3s]"></div>
                <div class="origin-top absolute top-0 right-0 bottom-0 left-0 bg-[#D5BDA2] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.09s] transition-all duration-[.3s]"></div>
                <div class="relative flex whitespace-nowrap items-center justify-center gap-[30px] font-[Teko] font-semibold text-[28px] uppercase">
                    <div class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-0 delay-0 transition-all duration-[.3s]">Rise up</div>
                    <img class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.03s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding.svg" alt="">
                    <div class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.06s] delay-0 transition-all duration-[.3s]">show up</div>
                    <img class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.09s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding.svg" alt="">
                    <div class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.12s] delay-0 transition-all duration-[.3s]">never give up</div>
                    <img class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.15s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding.svg" alt="">
                    <div class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.16s] delay-0 transition-all duration-[.3s]">Train hard</div>
                    <img class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.19s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding.svg" alt="">
                    <div class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.22s] delay-0 transition-all duration-[.3s]">Train hard</div>
                    <img class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.25s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding.svg" alt="">
                    <div class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.28s] delay-0 transition-all duration-[.3s]">Train hard</div>
                    <img class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.31s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding.svg" alt="">
                    <div class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.33s] delay-0 transition-all duration-[.3s]">stay humble</div>
                    <img class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.36s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding.svg" alt="">
                    <div class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.39s] delay-0 transition-all duration-[.3s]">stay humble</div>
                    <img class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.42s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding.svg" alt="">
                    <div class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.45s] delay-0 transition-all duration-[.3s]">be proud</div>
                    <img class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.48s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding.svg" alt="">
                    <div class="origin-right group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.51s] delay-0 transition-all duration-[.3s]">Believe in yourself</div>
                </div>
            </div>
            <div class="relative overflow-hidden py-[20px] group-[.c-active]:rotate-[-3deg]">
                <div class="origin-bottom absolute top-0 right-0 bottom-0 left-0 bg-[#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-[.09s] delay-0 transition-all duration-[.3s]"></div>
                <div class="origin-bottom absolute top-0 right-0 bottom-0 left-0 bg-[#D5BDA2] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-[.06s] delay-[.03s] transition-all duration-[.3s]"></div>
                <div class="origin-bottom absolute top-0 right-0 bottom-0 left-0 bg-[#01010F] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-[.03s] delay-[.06s] transition-all duration-[.3s]"></div>
                <div class="origin-bottom absolute top-0 right-0 bottom-0 left-0 bg-[#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.09s] transition-all duration-[.3s]"></div>
                <div class="relative flex whitespace-nowrap items-center justify-center gap-[30px] font-[Teko] font-semibold text-[28px] uppercase">
                    <div class="origin-left group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-0 delay-0 transition-all duration-[.3s]">never give up</div>
                    <img class="origin-left group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.03s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding-black.svg" alt="">
                    <div class="origin-left group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.06s] delay-0 transition-all duration-[.3s]">Undisputed</div>
                    <img class="origin-left group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.09s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding-black.svg" alt="">
                    <div class="origin-left group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.12s] delay-0 transition-all duration-[.3s]">King of the Road</div>
                    <img class="origin-left group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.15s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding-black.svg" alt="">
                    <div class="origin-left group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.18s] delay-0 transition-all duration-[.3s]">Be a champion</div>
                    <img class="origin-left group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.21s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding-black.svg" alt="">
                    <div class="origin-left group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.24s] delay-0 transition-all duration-[.3s]">Warrior in the ring</div>
                    <img class="origin-left group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.25s] delay-0 transition-all duration-[.3s]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/sliding-black.svg" alt="">
                    <div class="origin-left group-[:not(.c-active)]:scale-x-0 group-[:not(.c-active)]:delay-[.28s] delay-0 transition-all duration-[.3s]">train, train and beat</div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- /lebel --}}
<!-- tengah -->
{{-- @foreach ($tengah as $data ) --}}
<div class="py-[150px]">
    <div class="relative max-w-[1320px] mx-auto px-[15px]">
        <div class="xl:grid grid-cols-2 gap-[100px]">
            <div class="hidden xl:block">
                <div class="grid grid-cols-2 gap-[30px]">
                    <div class="">
                        <div data-scroll="[data-scroll-item]" class="">
                            <div data-scroll-cog="" class="hidden">
                                {
                                    "scrollTrigger": {
                                        "trigger": "[data-scroll-item]"

                                    }
                                }
                            </div>
                            <div data-scroll-item="" class="group">
                                <div class="relative">
                                    <div class="absolute top-0 right-0 bottom-0 left-0 bg-[#D5BDA2] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.4s] delay-0 transition-all duration-[.3s]"></div>
                                    <div class="absolute top-0 right-0 bottom-0 left-0 bg-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.3s] delay-[.1s] transition-all duration-[.3s]"></div>
                                    <div class="absolute top-0 right-0 bottom-0 left-0 bg-[#01010F] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.2s] delay-[.2s] transition-all duration-[.3s]"></div>
                                    <div class="absolute top-0 right-0 bottom-0 left-0 bg-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.1s] delay-[.3s] transition-all duration-[.3s]"></div>
                                    {{-- foto1 --}}
                                    @if($pelatih && $pelatih->image)
                                    <img class="group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.4s] transition-all duration-[.3s]" src="{{ asset('/images/pelatihs/'. $pelatih->image) }}" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="relative">
                            <div class="pt-[75px]"></div>
                            <div data-scroll="[data-scroll-item]" class="">
                                <div data-scroll-cog="" class="hidden">
                                    {
                                        "scrollTrigger": {
                                            "trigger": "[data-scroll-item]"

                                        }
                                    }
                                </div>
                                <div data-scroll-item="" class="group">
                                    <div class="relative">
                                        <div class="absolute top-0 right-0 bottom-0 left-0 bg-[#D5BDA2] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.4s] delay-0 transition-all duration-[.3s]"></div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 bg-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.3s] delay-[.1s] transition-all duration-[.3s]"></div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 bg-[#01010F] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.2s] delay-[.2s] transition-all duration-[.3s]"></div>
                                        <div class="absolute top-0 right-0 bottom-0 left-0 bg-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.1s] delay-[.3s] transition-all duration-[.3s]"></div>
                                        {{-- foto2 --}}
                                        @if($guru && $guru->image)
                                        <img class="group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.4s] transition-all duration-[.3s]" src="{{ asset('/images/pelatihs/'. $guru->image) }}" alt="">
                                        @endif
                                    </div>
                                    {{-- muter --}}
                                    <div class="absolute top-0 left-0">
                                        <img class="bg-[#01010F] rounded-full group-[.c-active]:animate-spin group-[.c-active]:[animation:spin_10s_linear_infinite]" src="https://raw.githubusercontent.com/uiaextend/gymfito/main/home/Circle.svg" alt="">
                                        <div class="absolute top-0 right-0 bottom-0 left-0 flex items-center justify-center">
                                            <img class="" src="img/bagus.png" alt="" style="width: 93px; height: 93px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="font-[Teko] flex items-center gap-[15px] uppercase">
                    <div class="font-semibold text-[40px] md:text-[60px] leading-[1]">BEDBOX Meets</div>
                    <div class="hidden md:block font-medium text-[12px] text-[#F67A45] relative top-[-5px] border-r-[2px] border-l-[2px] border-[#F67A45] px-[5px] [writing-mode:tb]">About Us</div>
                    <div class="hidden md:block font-semibold text-[60px] leading-[1]">Here</div>
                </div>
                <div class="md:flex gap-[10px]">
                    <div class="">
                        <div class="font-[Oswald] font-semibold text-[60px] leading-[1] uppercase">
                            <div data-scroll="[data-scroll-item]" class="">
                                <div data-scroll-cog="" class="hidden">
                                    {
                                        "scrollTrigger": {
                                            "trigger": "[data-scroll-item]"

                                        }
                                    }
                                </div>
                                <div data-scroll-item="odometer" class="group">
                                    <div class="flex">
                                        <div class="relative">
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.4s] delay-0 transition-all duration-[.3s]">E</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.3s] delay-[.1s] transition-all duration-[.3s]">E</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.2s] delay-[.2s] transition-all duration-[.3s]">E</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.1s] delay-[.3s] transition-all duration-[.3s]">E</div>
                                            <div class="text-transparent [-webkit-text-stroke:1px_#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.4s] transition-all duration-[.3s]">E</div>
                                        </div>
                                        <div class="relative">
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.4s] delay-0 transition-all duration-[.3s]">x</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.3s] delay-[.1s] transition-all duration-[.3s]">x</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.2s] delay-[.2s] transition-all duration-[.3s]">x</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.1s] delay-[.3s] transition-all duration-[.3s]">x</div>
                                            <div class="text-transparent [-webkit-text-stroke:1px_#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.4s] transition-all duration-[.3s]">x</div>
                                        </div>
                                        <div class="relative">
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.4s] delay-0 transition-all duration-[.3s]">c</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.3s] delay-[.1s] transition-all duration-[.3s]">c</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.2s] delay-[.2s] transition-all duration-[.3s]">c</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.1s] delay-[.3s] transition-all duration-[.3s]">c</div>
                                            <div class="text-transparent [-webkit-text-stroke:1px_#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.4s] transition-all duration-[.3s]">c</div>
                                        </div>
                                        <div class="relative">
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.4s] delay-0 transition-all duration-[.3s]">e</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.3s] delay-[.1s] transition-all duration-[.3s]">e</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.2s] delay-[.2s] transition-all duration-[.3s]">e</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.1s] delay-[.3s] transition-all duration-[.3s]">e</div>
                                            <div class="text-transparent [-webkit-text-stroke:1px_#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.4s] transition-all duration-[.3s]">e</div>
                                        </div>
                                        <div class="relative">
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.4s] delay-0 transition-all duration-[.3s]">l</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.3s] delay-[.1s] transition-all duration-[.3s]">l</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.2s] delay-[.2s] transition-all duration-[.3s]">l</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.1s] delay-[.3s] transition-all duration-[.3s]">l</div>
                                            <div class="text-transparent [-webkit-text-stroke:1px_#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.4s] transition-all duration-[.3s]">l</div>
                                        </div>
                                        <div class="relative">
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.4s] delay-0 transition-all duration-[.3s]">l</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.3s] delay-[.1s] transition-all duration-[.3s]">l</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.2s] delay-[.2s] transition-all duration-[.3s]">l</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.1s] delay-[.3s] transition-all duration-[.3s]">l</div>
                                            <div class="text-transparent [-webkit-text-stroke:1px_#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.4s] transition-all duration-[.3s]">l</div>
                                        </div>
                                        <div class="relative">
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.4s] delay-0 transition-all duration-[.3s]">e</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.3s] delay-[.1s] transition-all duration-[.3s]">e</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.2s] delay-[.2s] transition-all duration-[.3s]">e</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.1s] delay-[.3s] transition-all duration-[.3s]">e</div>
                                            <div class="text-transparent [-webkit-text-stroke:1px_#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.4s] transition-all duration-[.3s]">e</div>
                                        </div>
                                        <div class="relative">
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.4s] delay-0 transition-all duration-[.3s]">n</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.3s] delay-[.1s] transition-all duration-[.3s]">n</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.2s] delay-[.2s] transition-all duration-[.3s]">n</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.1s] delay-[.3s] transition-all duration-[.3s]">n</div>
                                            <div class="text-transparent [-webkit-text-stroke:1px_#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.4s] transition-all duration-[.3s]">n</div>
                                        </div>
                                        <div class="relative">
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.4s] delay-0 transition-all duration-[.3s]">c</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.3s] delay-[.1s] transition-all duration-[.3s]">c</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.2s] delay-[.2s] transition-all duration-[.3s]">c</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.1s] delay-[.3s] transition-all duration-[.3s]">c</div>
                                            <div class="text-transparent [-webkit-text-stroke:1px_#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.4s] transition-all duration-[.3s]">c</div>
                                        </div>
                                        <div class="relative">
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.4s] delay-0 transition-all duration-[.3s]">e</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.3s] delay-[.1s] transition-all duration-[.3s]">e</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.2s] delay-[.2s] transition-all duration-[.3s]">e</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.1s] delay-[.3s] transition-all duration-[.3s]">e</div>
                                            <div class="text-transparent [-webkit-text-stroke:1px_#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.4s] transition-all duration-[.3s]">e</div>
                                        </div>
                                        <div class="relative">
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#D5BDA2] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.4s] delay-0 transition-all duration-[.3s]">!</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.3s] delay-[.1s] transition-all duration-[.3s]">!</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#01010F] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.2s] delay-[.2s] transition-all duration-[.3s]">!</div>
                                            <div class="absolute top-0 right-0 bottom-0 left-0 text-[#F67A45] group-[.c-active]:scale-y-0 group-[.c-active]:delay-[.1s] delay-[.3s] transition-all duration-[.3s]">!</div>
                                            <div class="text-transparent [-webkit-text-stroke:1px_#F67A45] group-[:not(.c-active)]:scale-y-0 group-[:not(.c-active)]:delay-0 delay-[.4s] transition-all duration-[.3s]">!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="pt-[5px]"></div>
                        <div class="">Lorem Ipsum is simply dummy text</div>
                        <div class="pt-[5px]"></div>
                        <div class="">of the printing and typesetting</div>
                    </div>
                </div>
                <div class="pt-[5px]"></div>
                <div class="leading-[1.8]">
                    <div class="">industry. Lorem Ipsum has been the industry's stan. Lorem Ipsum</div>
                    <div class="">is simply dummy text of the printing and typesetting industry.</div>
                </div>
                <div class="pt-[70px]"></div>
                <div class="relative">
                    <div class="absolute top-0 right-0 bottom-0 left-0 border-t-[2px] border-[#F67A45] m-auto h-[2px]"></div>
                    <div class="relative font-[Teko] leading-[1] font-semibold text-[60px] grid grid-cols-1 md:grid-cols-2 gap-[100px] uppercase">
                        <div class="hidden md:block">
                            <div class="flex gap-[30px]">
                                <div class="w-[105px] flex justify-end items-center leading-[.8]">
                                    <div data-scroll="[data-scroll-item]" class="">
                                        <div data-scroll-cog="" class="hidden">
                                            {
                                                "scrollTrigger": {
                                                    "trigger": "[data-scroll-item]"

                                                }
                                            }
                                        </div>
                                        <div data-scroll-item="odometer" class="group">
                                            <div class="odometer" data-v="17">0</div>
                                        </div>
                                    </div>
                                    <div class="">+</div>
                                </div>
                                <div class="border-l-[2px] border-[#F67A45]"></div>
                                <div class="text-[24px]">
                                    <div class="">YEARS OF</div>
                                    <div class="">SERVICE</div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="flex gap-[30px]">
                                <div class="w-[105px] flex justify-end items-center leading-[.8]">
                                    <div data-scroll="[data-scroll-item]" class="">
                                        <div data-scroll-cog="" class="hidden">
                                            {
                                                "scrollTrigger": {
                                                    "trigger": "[data-scroll-item]"

                                                }
                                            }
                                        </div>
                                        <div data-scroll-item="odometer" class="group">
                                            <div class="odometer" data-v="29">0</div>
                                        </div>
                                    </div>
                                    <div class="">+</div>
                                </div>
                                <div class="border-l-[2px] border-[#F67A45]"></div>
                                <div class="text-[24px]">
                                    <div class="">BOXERS</div>
                                    <div class="">TRAINEE</div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex gap-[30px]">
                                <div class="w-[105px] flex justify-end items-center leading-[.8]">
                                    <div data-scroll="[data-scroll-item]" class="">
                                        <div data-scroll-cog="" class="hidden">
                                            {
                                                "scrollTrigger": {
                                                    "trigger": "[data-scroll-item]"

                                                }
                                            }
                                        </div>
                                        <div data-scroll-item="odometer" class="group">
                                            <div class="odometer" data-v="3">0</div>
                                        </div>
                                    </div>
                                    <div class="">k</div>
                                </div>
                                <div class="border-l-[2px] border-[#F67A45]"></div>
                                <div class="text-[24px]">
                                    <div class="">Hours</div>
                                    <div class="">Trained</div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex gap-[30px]">
                                <div class="w-[105px] flex justify-end items-center leading-[.8]">
                                    <div data-scroll="[data-scroll-item]" class="">
                                        <div data-scroll-cog="" class="hidden">
                                            {
                                                "scrollTrigger": {
                                                    "trigger": "[data-scroll-item]"

                                                }
                                            }
                                        </div>
                                        <div data-scroll-item="odometer" class="group">
                                            <div class="odometer" data-v="42">0</div>
                                        </div>
                                    </div>
                                    <div class="">+</div>
                                </div>
                                <div class="border-l-[2px] border-[#F67A45]"></div>
                                <div class="text-[24px]">
                                    <div class="">Happy</div>
                                    <div class="">Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endforeach --}}
{{-- /tengah --}}
@endsection
