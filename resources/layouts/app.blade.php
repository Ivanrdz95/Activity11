<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('photos') }}" class="{{ request()->routeIs('photos') ? 'active' : '' }}">Photos</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>Activity by [Your Name]</p>
    </footer>
</body>
</html>
