<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Neobrutalism Laravel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #fff;
            --main: #ffdf6b; /* Bright Yellow */
            --accent: #ff90e8; /* Pink */
            --secondary: #00e1ff; /* Cyan */
            --black: #000000;
            --border-width: 4px;
            --shadow-offset: 8px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Public Sans', sans-serif;
        }

        body {
            background-color: var(--main);
            color: var(--black);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .container {
            width: 100%;
            max-width: 800px;
            text-align: left;
        }

        .card {
            background: var(--bg);
            border: var(--border-width) solid var(--black);
            padding: 2.5rem;
            box-shadow: var(--shadow-offset) var(--shadow-offset) 0px 0px var(--black);
            margin-bottom: 2rem;
            position: relative;
        }

        .badge {
            display: inline-block;
            background: var(--secondary);
            color: var(--black);
            padding: 0.5rem 1rem;
            border: var(--border-width) solid var(--black);
            font-weight: 900;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
            box-shadow: 4px 4px 0px 0px var(--black);
        }

        h1 {
            font-size: 3.5rem;
            font-weight: 900;
            text-transform: uppercase;
            line-height: 1;
            margin-bottom: 1.5rem;
            -webkit-text-stroke: 1px var(--black);
        }

        p {
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 1rem;
        }

        code {
            background: var(--accent);
            padding: 0.2rem 0.5rem;
            border: 2px solid var(--black);
            font-weight: 900;
        }

        .nav {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        .nav-link {
            text-decoration: none;
            color: var(--black);
            font-weight: 900;
            padding: 1rem 1.5rem;
            background: var(--bg);
            border: var(--border-width) solid var(--black);
            box-shadow: 4px 4px 0px 0px var(--black);
            text-transform: uppercase;
            transition: transform 0.1s, box-shadow 0.1s;
        }

        .nav-link:hover {
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0px 0px var(--black);
            background: var(--accent);
        }

        .nav-link:active {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0px 0px var(--black);
        }

        .nav-link.active {
            background: var(--secondary);
        }

        @media (max-width: 640px) {
            h1 { font-size: 2.5rem; }
            .card { padding: 1.5rem; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            @yield('content')
        </div>

        <div class="nav">
            <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">HOME</a>
            <a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">CONTACT</a>
            <a href="{{ url('/user/ALFY') }}" class="nav-link {{ request()->is('user/*') ? 'active' : '' }}">USER</a>
            <a href="{{ url('/post/neo-brutalism') }}" class="nav-link {{ request()->is('post/*') ? 'active' : '' }}">POST</a>
            <a href="{{ url('/category/99') }}" class="nav-link {{ request()->is('category/*') ? 'active' : '' }}">CATEGORY</a>
        </div>
    </div>
</body>
</html>
