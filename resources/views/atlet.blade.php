@extends('layouts.welcome')

@section('content')
    <div class="mt-10" style="margin-top: 100px;">
        <div class="max-w-[1200px] mx-auto px-[10px]">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-[20px]">
                @foreach ($atlet as $data)
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
                                <div class="relative w-full h-[250px] overflow-hidden">
                                    <a href="{{ route('det',  $data->slug) }}">
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
                                                src="{{ asset('images/boxers/'.$data->image) }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-[20px] p-[15px]">
                            <div class="info">
                                <div class="name">{{  $data->name }}</div>
                                <div class="weight-class">{{ $data->weight_class }}</div>
                                <div class="win">Win {{ $data->win }}</div>
                                <div class="lose">Lose {{ $data->lose }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <style>
        /* CSS untuk gambar link dan efek hover */
        a img {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        /* Efek ketika gambar di-hover */
        a:hover img {
            transform: scale(1.05); /* Zoom-in effect */
            opacity: 0.9; /* sedikit transparan saat di-hover */
        }

        /* Styling untuk kartu */
        .card {
            border: 1px solid #D5BDA2;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
        }

        /* Styling untuk bagian gambar pada kartu */
        .card img {
            object-fit: cover;
            width: 100%;
            height: 250px; /* Pastikan gambar punya tinggi tetap */
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        /* Efek zoom-in pada gambar saat di-hover */
        .card:hover img {
            transform: scale(1.05);
            opacity: 0.9;
        }

        /* Styling untuk bagian informasi atlet */
        .card .info {
            padding: 15px;
            background-color: #f5f5f5;
            border-top: 1px solid #D5BDA2;
        }

        /* Styling untuk nama atlet */
        .card .info .name {
            font-family: 'Teko', sans-serif;
            font-weight: 600;
            font-size: 20px;
            color: #D5BDA2;
        }

        /* Styling untuk kelas berat dan informasi lainnya */
        .card .info .weight-class,
        .card .info .win,
        .card .info .lose {
            font-size: 14px;
            color: #555;
        }

        /* Grid layout untuk menata kartu */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 10px;
        }

        /* Menata tampilan gambar dan informasi atlet dalam kartu */
        .card-container {
            border: 1px solid #D5BDA2;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
        }

        /* Untuk memastikan transisi gambar dan efek hover */
        .card-container img {
            object-fit: cover;
            width: 100%;
            height: 250px; /* Menjaga gambar dalam ukuran tetap */
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        /* Hover effect pada gambar dalam kartu */
        .card-container:hover img {
            transform: scale(1.05);
            opacity: 0.9;
        }

        /* Bagian informasi atlet di bawah gambar */
        .card-container .info {
            padding: 15px;
            background-color: #f5f5f5;
            border-top: 1px solid #D5BDA2;
        }

        /* Nama atlet */
        .card-container .info .name {
            font-family: 'Teko', sans-serif;
            font-weight: 600;
            font-size: 20px;
            color: #D5BDA2;
        }

        /* Info kelas berat, kemenangan, kekalahan */
        .card-container .info .weight-class,
        .card-container .info .win,
        .card-container .info .lose {
            font-size: 14px;
            color: #555;
        }
    </style>
@endsection
