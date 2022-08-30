<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics strike Again</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('comics.index') }}">Products</a>
                </li>
                <li>
                    <a href="{{ route('comics.create') }}">Suggerisci prodotto</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('main_content')
    </main>
</body>
</html>