@extends('layouts.welcome')
@section('content')
    <div class="mt-10" style="margin-top: 100px;">
        <div class="max-w-[1320px] mx-auto px-[15px]">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-[50px]">
                @foreach ($wasit as $data)
                    <div class="">
                        <div class="border-[1px] border-[#D5BDA2] border-opacity-30">
                            <div data-scroll="[data-scroll-item]" class="">
                                <div data-scroll-cog="" class="hidden">
                                    {
                                    "scrollTrigger": {
                                    "trigger": "[data-scroll-item]"

                                    }
                                    }
                                </div>
                                <div data-scroll-item="" class="group/i">
                                    <div class="relative w-full h-[450px] overflow-hidden">
                                        <div
                                            class="absolute top-0 right-0 bottom-0 left-0 bg-[#D5BDA2] group-[.c-active]/i:scale-y-0 group-[.c-active]/i:delay-[.4s] delay-0 transition-all duration-[.3s]">
                                        </div>
                                        <div
                                            class="absolute top-0 right-0 bottom-0 left-0 bg-[#F67A45] group-[.c-active]/i:scale-y-0 group-[.c-active]/i:delay-[.3s] delay-[.1s] transition-all duration-[.3s]">
                                        </div>
                                        <div
                                            class="absolute top-0 right-0 bottom-0 left-0 bg-[#01010F] group-[.c-active]/i:scale-y-0 group-[.c-active]/i:delay-[.2s] delay-[.2s] transition-all duration-[.3s]">
                                        </div>
                                        <div
                                            class="absolute top-0 right-0 bottom-0 left-0 bg-[#F67A45] group-[.c-active]/i:scale-y-0 group-[.c-active]/i:delay-[.1s] delay-[.3s] transition-all duration-[.3s]">
                                        </div>
                                        <div
                                            class="group-[:not(.c-active)]/i:scale-y-0 group-[:not(.c-active)]/i:delay-0 delay-[.4s] transition-all duration-[.3s]">
                                            <img class="object-cover w-full h-full"
                                                src="{{ asset('images/wasits/'.$data->image) }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-[50px] p-[30px]">
                                <div class="">
                                    <div class="font-[Teko] font-semibold text-[28px] text-[#D5BDA2]">{{  $data->name }}</div>
                                    <div class="text-[16px]">{{ $data->sertifikat }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
