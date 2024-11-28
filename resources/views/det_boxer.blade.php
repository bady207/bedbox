@extends('layouts.welcome')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Boxer</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <style>
            /* Style Dasar */
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                background-color: #10101a;
                /* Warna gelap */
                color: #fff;
                /* Teks putih */
            }

            /* Container Utama */
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                /* Tinggi penuh layar */
            }

            /* Detail Petinju */
            .boxer-details {
                text-align: center;
                background-color: #1c1c2d;
                padding: 20px 30px;
                border-radius: 10px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.7);
                max-width: 600px;
                width: 100%;
            }

            /* Statistik Kemenangan */
            .stats-box {
                display: flex;
                justify-content: center;
                margin-bottom: 20px;
            }

            .stats-box .stat {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 80px;
                height: 50px;
                margin: 0 5px;
                border-radius: 5px;
                font-size: 18px;
                font-weight: bold;
                color: #fff;
            }

            .stats-box .stat.green {
                background-color: #28a745;
                /* Hijau */
            }

            .stats-box .stat.red {
                background-color: #dc3545;
                /* Merah */
            }

            .stats-box .stat span {
                font-size: 12px;
                margin-top: 5px;
            }

            .boxer-details img {
                width: 230px;
                /* Ukuran gambar */
                height: 230px;
                object-fit: cover;
                margin: 0 auto 20px;
                /* Gambar di tengah dengan margin bawah */
                border: 3px solid #ffa500;
                /* Border emas */
                display: block;
                /* Menjadikan gambar sebagai block element untuk bisa menggunakan margin auto */
            }


            .boxer-details h1 {
                margin-bottom: 20px;
                color: #ffa500;
                /* Warna emas */
            }

            /* Statistik */
            .stats {
                display: flex;
                justify-content: space-between;
                text-align: left;
            }

            .stats .left,
            .stats .right {
                width: 48%;
            }

            .stats p {
                margin: 5px 0;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <!-- Detail Petinju -->
            <div class="boxer-details">
                <!-- Statistik Kemenangan -->
                <div class="stats-box">
                    <div class="stat green">
                        21
                        <span>{{ $boxrec->win }}</span>
                    </div>
                    <div class="stat red">
                        0
                        <span>{{ $boxrec->lose }}</span>
                    </div>
                </div>

                <!-- Tambahkan Foto -->
                <img src="{{ asset('images/boxers/' . $boxrec->image) }}" alt="Artur Beterbiev">
                <h1>👑 {{ $boxrec->name }}</h1>
                <div class="stats">
                    <div class="left">
                        <p><strong>Divisi:</strong> {{ $boxrec->weight_class }}</p>
                        <p><strong>Kebangsaan:</strong> {{ $boxrec->negara }}</p>
                        <p><strong>ID#:</strong> 646981</p>
                        <p><strong>Sex:</strong> Male</p>
                        <p><strong>Rounds:</strong> 110</p>
                        <p><strong>Career:</strong> 2013-2024</p>
                        <p><strong>Height:</strong> 5' 11½" / 182 cm</p>
                    </div>
                    <div class="right">
                        <p><strong>Rating:</strong> ⭐⭐⭐⭐⭐</p>
                        <p><strong>Birth Name:</strong> {{ $boxrec->name }}</p>
                        <p><strong>Age:</strong> 39</p>
                        <p><strong>Bouts:</strong> 21</p>
                        <p><strong>KO%:</strong> 95.24%</p>
                        <p><strong>Debut:</strong> 2013-06-08</p>
                        <p><strong>Reach:</strong> 73" / 185 cm</p>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
