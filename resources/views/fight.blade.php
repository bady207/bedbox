@extends('layouts.welcome')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
@section('content')
    <style>
        /* Background hitam untuk keseluruhan halaman */
        body {
            background-color: #121212;
            color: #ffffff;
        }

        /* Desain countdown */
        .countdown {
            text-align: center;
            font-size: 2rem;
            margin-top: 20px;
            padding: 15px;
            color: #ff5733;
            font-weight: bold;
            border-radius: 10px;
        }

        .countdown span {
            display: inline-block;
            margin: 0 10px;
            padding: 5px 15px;
            background-color: #333;
            border-radius: 5px;
            font-size: 1.3rem;
            color: #fff;
        }

        /* Desain event-info */
        .event-info {
            background-color: #ff5733;
            padding: 25px;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .event-info h5 {
            color: #ffe7d0;
            /* Warna teks sekunder */
            font-weight: 500;
            margin: 10px 0;
            font-size: 1.2rem;
        }

        .event-info h2 {
            color: #ffffff;
            font-size: 2rem;
            font-weight: bold;
            margin: 5px 0;
        }

        .event-info .location {
            font-size: 1rem;
            color: #ffd1a3;
            font-style: italic;
        }

        .event-info .fighter {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
            text-transform: uppercase;
            margin: 15px 0;
        }

        .event-info .vs {
            font-size: 2rem;
            font-weight: bold;
            color: #ffd700;
            /* Warna emas untuk efek dramatis */
            margin: 10px 0;
        }

        /* Desain gambar utama */
        .main-content {
            margin-top: 30px;
            text-align: center;
        }

        .main-content img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Desain deskripsi */
        .description {
            margin-top: 30px;
            border-top: 1px solid #555;
            padding-top: 15px;
            font-size: 1rem;
            line-height: 1.7;
            color: #ccc;
            text-align: justify;
        }

        .description p {
            margin-bottom: 15px;
        }

        .countdown {
            text-align: center;
            font-size: 2rem;
            margin-top: 20px;
            padding: 15px;
            font-weight: bold;
            border-radius: 10px;
        }

        .countdown span {
            display: inline-block;
            margin: 0 5px;
            padding: 5px 15px;
            background-color: #333;
            border-radius: 5px;
            font-size: 1.3rem;
            color: #ff5733;
            /* Pastikan semua teks dalam countdown berwarna oranye */
        }

        .countdown .time-label {
            font-size: 0.8rem;
            color: #ff5733;
            margin-left: -3px;
            display: inline-block;
        }
        .countdown {
            text-align: center;
            font-size: 2rem;
            margin-top: 20px;
            padding: 15px;
            color: #ff5733;
            font-weight: bold;
            border-radius: 10px;
        }
        .countdown span {
            display: inline-block;
            margin: 0 5px;
            padding: 5px 15px;
            background-color: #333;
            border-radius: 5px;
            font-size: 1.3rem;
            color: #ff5733;
        }
        .countdown .time-label {
            font-size: 0.8rem;
            color: #ff5733;
        }
    </style>

    @foreach ($pertandingan as $data)
        <div class="container" style="margin-top: 90px;">
            <!-- Countdown untuk setiap pertandingan -->
            <div class="container">
                <div class="countdown" id="countdown-{{ $data->id }}">
                    <span id="days-{{ $data->id }}">0</span><span class="time-label">Hari</span> :
                    <span id="hours-{{ $data->id }}">00</span><span class="time-label">Jam</span> :
                    <span id="minutes-{{ $data->id }}">00</span><span class="time-label">Menit</span> :
                    <span id="seconds-{{ $data->id }}">00</span><span class="time-label">Detik</span>
                </div>



            <div class="row">
                <div class="col-md-9">
                    <div class="main-content">
                        <img alt="Dua petarung dengan sabuk juara dalam pose dramatis"
                            src="{{ asset('images/pertandingans/' . $data->image) }}" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="event-info">
                        <h2>{{ \Carbon\Carbon::parse($data->tanggal_pertandingan)->translatedFormat('j M Y (D) hA ') }} WIB
                        </h2>
                        <h5 class="fighter">{{ $data->boxer1->name }}</h5>
                        <h2 class="vs">VS</h2>
                        <h5 class="fighter">{{ $data->boxer2->name }}</h5>
                        <h4>Lokasi</h4>
                        <h5 class="location">{{ $data->lokasi }}</h5>
                        <h2>BED Fight Night 26</h2>
                    </div>
                </div>
            </div>

            <div class="description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, totam? Provident, accusamus sequi et
                    incidunt optio nemo placeat quasi itaque molestias odit, in veritatis sed libero tempore adipisci harum
                    expedita.</p>
            </div>
        </div>

        <!-- Countdown Script untuk setiap pertandingan -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const countdownDate{{ $data->id }} = new Date("{{ \Carbon\Carbon::parse($data->tanggal_pertandingan)->format('Y-m-d\TH:i:s') }}").getTime();
                const countdownFunction{{ $data->id }} = setInterval(function() {
                    const now = new Date().getTime();
                    const distance = countdownDate{{ $data->id }} - now;

                    if (distance <= 0) {
                        // Hentikan interval jika pertandingan telah dimulai
                        clearInterval(countdownFunction{{ $data->id }});
                        document.getElementById("countdown-{{ $data->id }}").innerHTML = "Pertandingan telah selesai!";
                    } else {
                        // Perhitungan waktu
                        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        document.getElementById("days-{{ $data->id }}").innerHTML = days;
                        document.getElementById("hours-{{ $data->id }}").innerHTML = hours.toString().padStart(2, '0');
                        document.getElementById("minutes-{{ $data->id }}").innerHTML = minutes.toString().padStart(2, '0');
                        document.getElementById("seconds-{{ $data->id }}").innerHTML = seconds.toString().padStart(2, '0');
                    }
                }, 1000);
            });
        </script>

    @endforeach
@endsection
