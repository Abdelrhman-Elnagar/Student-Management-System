<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('student.index') }}">Home</a>
        </li>

        {{-- users --}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Users
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('student.index') }}">Students</a>
                <a class="dropdown-item" href="#">Parents</a>
                <a class="dropdown-item" href="#">Teachers</a>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Community</a>
        </li>

        {{-- activity --}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Activity
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('course.index') }}">Courses</a>
                <a class="dropdown-item" href="{{ route('register') }}">Quizzes</a>
                <a class="dropdown-item" href="#">Assignment</a>
                <a class="dropdown-item" href="#">Certificates</a>
            </div>
        </li>

        {{-- login and other need enhance,need validate,active class,component --}}
        {{-- auth --}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Auth
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </li>


    </ul>
