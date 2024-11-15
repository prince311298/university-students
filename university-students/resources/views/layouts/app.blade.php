<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Course Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ url('asset/fonts/linearicons/style.css')}}">
    <link rel="stylesheet" href="{{ url('asset/css/style.css') }}">
</head>

<body>
    <header class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">UniCourses</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{url('')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                <div>
                    <a href="{{route('login')}}" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{route('register')}}" class="btn btn-primary">Signup</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 UniCourses. All rights reserved.</p>
        <div>
            <a href="#" class="text-white me-2">Privacy Policy</a>
            <a href="#" class="text-white me-2">Terms of Service</a>
            <a href="#" class="text-white">Contact Us</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ url('asset/js/main.js') }}"></script>
    <script src="{{ url('asset/js/jquery-3.3.1.min.js')}}"></script>
</body>

</html>
