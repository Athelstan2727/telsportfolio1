<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Athelstan Bundalian</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body { 
            font-family: 'Syne', sans-serif; 
            background-color: #050505; /* Deep Black */
            color: #ffffff;
            cursor: default;
        }

        /* --- 1. The Marquee Animation --- */
        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
            position: absolute;
            bottom: 2rem;
            left: 0;
            width: 100%;
        }

        .marquee-content {
            display: inline-block;
            animation: scroll 20s linear infinite;
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* --- 2. Custom Scrollbar --- */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #050505; }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 3px; }
    </style>
</head>
<body class="antialiased overflow-x-hidden selection:bg-white selection:text-black">

    <main>
        @yield('content')
    </main>

</body>
</html>