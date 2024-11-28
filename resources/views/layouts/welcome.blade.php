<!doctype html>
<html lang="en" class="scroll-smooth">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Teko:wght@300..700&family=Vazirmatn:wght@100..900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://ajax.cdnjs.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
		<link rel="stylesheet" href="https://ajax.cdnjs.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-minimal.min.css">
		<link rel="stylesheet" href="https://ajax.cdnjs.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.min.css">
		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="stylesheet" href="css/all.css">
	</head>
	<body class="bg-[#01010F] text-[#E7E7E7] text-[18px] leading-[1.5] font-[Vazirmatn]">
		<div class="pt-[40px]"></div>

        {{-- navbar --}}
        @include('layouts.user.navbar')
        {{-- /navbar --}}

        <main>

		@yield('content')

        </main>

		{{-- footer --}}
		@include('layouts.user.footer')
		<!-- /footer -->

		<!-- section -->



		<script src="https://ajax.cdnjs.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
		<script src="https://ajax.cdnjs.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
		<script src="https://ajax.cdnjs.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
		<script src="https://ajax.cdnjs.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>
		<script src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
		<script src="js/all.js"></script>
	</body>
</html>
