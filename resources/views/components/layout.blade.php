<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body style="display: flex;flex-direction: column; justify-content: space-between; height: 100%; ">
    <header>
        <nav>
            <ul style="display: flex; list-style-type: none; gap: 10px; padding: 0;">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/service">Service</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div>
            {{$main_header??''}}
        </div>
        <div>
            {{$main??''}}
        </div>
    </main>
    <footer>
        <p>&copy; 2025 Your Company. All rights reserved.</p>
    </footer>

</body>

</html>