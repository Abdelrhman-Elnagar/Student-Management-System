<x-app-layout>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('student.index') }}">Student Management System</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('student.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Posts</a>
                        </li>
                        {{-- login and other need enhance,need validate --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">logout</a>
                        </li>
                    </ul>

                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
        </nav>
        <section>
            <div class="container">
                {{-- <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <a href="#">
                        <h2 class="heading-section">Students CRUD</h2>
                    </a>
                </div>
            </div> --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrap">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID no.</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Students as $student)
                                        <tr class="alert" role="alert">
                                            {{-- @dd($students) --}}
                                            <th scope="row">{{ $student['id'] }}</th>
                                            <td>{{ $student['fName'] }}</td>
                                            <td>{{ $student['lName'] }}</td> {{-- this object not array but magic method -> [''] --}}
                                            <td>{{ $student->email }}</td>

                                            <td class="d-flex">
                                                <a href="{{ route('student.show', $student['id']) }}" class="view"
                                                    data-toggle="tooltip" title="View">
                                                    <i class="fa fa-eye"></i></a>
                                                <a href="{{ route('student.edit', $student['id']) }}" class="edit"
                                                    data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i></a>
                                                <form action="{{ route('student.destroy', $student['id']) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    {{-- <a class="delete" data-toggle="tooltip" title="Delete" href=""> --}}
                                                    <button type="submit" class="delete" data-toggle="tooltip"
                                                        title="Delete"
                                                        onclick="confirm('Are you sure to delete this student?') //i click cancel and the student was deleted">
                                                        <i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Add Student Button -->
                            <div class="text-left mt-3">
                                <a href="{{ route('student.create') }}" class="btn btn-primary">
                                    Add Student
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-app-layout>
