<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Laravel Praktikum</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --bg: #0f172a;
            --card-bg: #1e293b;
            --text: #f8fafc;
            --text-muted: #94a3b8;
            --accent: #f43f5e;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 800px;
            padding: 2rem;
            text-align: center;
        }

        .card {
            background: var(--card-bg);
            border-radius: 24px;
            padding: 3rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.1) 0%, transparent 70%);
            z-index: 0;
        }

        .card-content {
            position: relative;
            z-index: 1;
        }

        h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(to right, #818cf8, #f43f5e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.02em;
        }

        p {
            font-size: 1.25rem;
            color: var(--text-muted);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: rgba(99, 102, 241, 0.2);
            color: #818cf8;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(99, 102, 241, 0.3);
        }

        .nav {
            margin-top: 3rem;
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .nav-link {
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.05);
            transition: all 0.2s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: var(--text);
            transform: translateY(-2px);
        }

        .nav-link.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .glow {
            position: absolute;
            width: 300px;
            height: 300px;
            background: var(--primary);
            filter: blur(150px);
            opacity: 0.15;
            z-index: -1;
            border-radius: 50%;
        }

        .glow-1 { top: 10%; left: 10%; }
        .glow-2 { bottom: 10%; right: 10%; background: var(--accent); }

        @media (max-width: 640px) {
            h1 { font-size: 2.5rem; }
            .card { padding: 2rem; }
        }
    </style>
</head>
<body>
    <div class="glow glow-1"></div>
    <div class="glow glow-2"></div>

    <div class="container">
        <div class="card">
            <div class="card-content">
                @yield('content')
            </div>
        </div>

        <div class="nav">
            <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            <a href="{{ url('/user/JohnDoe') }}" class="nav-link {{ request()->is('user/*') ? 'active' : '' }}">User</a>
            <a href="{{ url('/post/hello-world') }}" class="nav-link {{ request()->is('post/*') ? 'active' : '' }}">Post</a>
            <a href="{{ url('/category/123') }}" class="nav-link {{ request()->is('category/*') ? 'active' : '' }}">Category</a>
        </div>
    </div>
</body>
</html>
