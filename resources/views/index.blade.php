<!doctype html>
<html lang="en">

<head>
    <title>CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('table2/css/style.css') }}">

</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <a href="#">
                        <h2 class="heading-section">Students CRUD</h2>
                    </a>
                </div>
            </div>
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
                                @foreach ($students as $student)
                                    <tr class="alert" role="alert">
                                        {{-- @dd($students) --}}
                                        <th scope="row">{{ $student['id'] }}</th>
                                        <td>{{ $student['fnm'] }}</td>
                                        <td>{{ $student['lnm'] }}</td>
                                        <td>{{ $student['em'] }}</td>

                                        <td class="d-flex">
                                            <a href="{{ route('student.show', $student['id']) }}" class="view"
                                                data-toggle="tooltip" title="View">
                                                <i class="fa fa-eye"></i></a>
                                            <a href="{{ route('student.edit', $student['id']) }}" class="edit"
                                                data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-pencil"></i></a>
                                            <form action="{{ route('student.destroy', $student['id']) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a class="delete" data-toggle="tooltip" title="Delete" href="">
                                                    {{-- <button type="submit" class="delete">Delete</button>    --}}
                                                    <i class="fa fa-trash"></i></a>
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
    <script src="{{ asset('table2/js/jquery.min.js') }}"></script>
    <script src="{{ asset('table2/js/popper.js') }}"></script>
    <script src="{{ asset('table2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('table2/js/main.js') }}"></script>

</body>

</html>
