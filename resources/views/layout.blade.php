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
            --green: #33ff66;
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
            padding: 2rem 1rem;
        }

        .container {
            width: 100%;
            max-width: 850px;
        }

        /* Branding Header */
        .header {
            display: flex;
            flex-direction: column;
            background: var(--bg);
            border: var(--border-width) solid var(--black);
            padding: 1.5rem 2rem;
            box-shadow: var(--shadow-offset) var(--shadow-offset) 0px 0px var(--black);
            margin-bottom: 2rem;
            gap: 1rem;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid var(--black);
            padding-bottom: 1rem;
        }

        .user-brand {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-avatar {
            width: 60px;
            height: 60px;
            background: var(--accent);
            border: 3px solid var(--black);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 1.75rem;
            box-shadow: 4px 4px 0px 0px var(--black);
        }

        .user-info h2 {
            font-size: 1.5rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: -1px;
        }

        .user-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            background: rgba(0,0,0,0.05);
            padding: 1rem;
            border: 2px solid var(--black);
        }

        .detail-item {
            font-weight: 700;
            font-size: 0.875rem;
            text-transform: uppercase;
        }

        .detail-item span {
            color: var(--black);
            background: var(--secondary);
            padding: 0.2rem 0.4rem;
            border: 1px solid var(--black);
            margin-right: 0.5rem;
        }

        .task-badge {
            background: var(--green);
            padding: 0.5rem 1rem;
            border: 3px solid var(--black);
            font-weight: 900;
            font-size: 0.75rem;
            text-transform: uppercase;
            box-shadow: 4px 4px 0px 0px var(--black);
        }

        /* Main Content */
        .card {
            background: var(--bg);
            border: var(--border-width) solid var(--black);
            padding: 2.5rem;
            box-shadow: var(--shadow-offset) var(--shadow-offset) 0px 0px var(--black);
            margin-bottom: 2rem;
            min-height: 250px;
        }

        .badge {
            display: inline-block;
            background: var(--secondary);
            padding: 0.5rem 1rem;
            border: var(--border-width) solid var(--black);
            font-weight: 900;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
            box-shadow: 4px 4px 0px 0px var(--black);
        }

        h1 {
            font-size: 3rem;
            font-weight: 900;
            text-transform: uppercase;
            line-height: 1;
            margin-bottom: 1.5rem;
        }

        p {
            font-size: 1.25rem;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 1.5rem;
        }

        code {
            background: var(--accent);
            padding: 0.2rem 0.5rem;
            border: 2px solid var(--black);
            font-weight: 900;
        }

        /* Navigation */
        .nav {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .nav-link {
            text-decoration: none;
            color: var(--black);
            font-weight: 900;
            padding: 1.25rem;
            background: var(--bg);
            border: var(--border-width) solid var(--black);
            box-shadow: 4px 4px 0px 0px var(--black);
            text-transform: uppercase;
            text-align: center;
            transition: all 0.1s;
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
            transform: translate(2px, 2px);
            box-shadow: 0px 0px 0px 0px var(--black);
        }

        /* Footer */
        .footer {
            text-align: center;
            font-weight: 900;
            text-transform: uppercase;
            padding: 2rem;
            border-top: var(--border-width) solid var(--black);
            width: 100%;
            margin-top: auto;
        }

        @media (max-width: 640px) {
            h1 { font-size: 2rem; }
            .header-top { flex-direction: column; gap: 1rem; text-align: center; }
            .user-brand { flex-direction: column; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header-top">
                <div class="user-brand">
                    <div class="user-avatar">AD</div>
                    <div class="user-info">
                        <h2>ALFI DIAS SAPUTRA</h2>
                    </div>
                </div>
                <div class="task-badge">
                    Postest Praktikum 5
                </div>
            </div>
            <div class="user-details">
                <div class="detail-item"><span>NIM</span> 2300018228</div>
                <div class="detail-item"><span>PRODI</span> INFORMATIKA</div>
                <div class="detail-item"><span>PRAKTIKUM</span> REKAYASA WEB</div>
            </div>
        </header>

        <nav class="nav">
            <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">HOME</a>
            <a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">CONTACT</a>
            <a href="{{ url('/user/ALFI') }}" class="nav-link {{ request()->is('user/*') ? 'active' : '' }}">USER</a>
            <a href="{{ url('/post/rekayasa-web') }}" class="nav-link {{ request()->is('post/*') ? 'active' : '' }}">POST</a>
            <a href="{{ url('/category/23') }}" class="nav-link {{ request()->is('category/*') ? 'active' : '' }}">CATEGORY</a>
        </nav>

        <main class="card">
            @yield('content')
        </main>
    </div>

    <footer class="footer">
        Handcrafted with 🖤 by Alfi Dias Saputra &copy; 2026
    </footer>
</body>
</html>
