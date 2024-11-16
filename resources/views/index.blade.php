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
                    <h2 class="heading-section">Students CRUD</h2>
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
                                <tr class="alert" role="alert">
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>markotto@email.com</td>
                                    <td>
                                        <!-- View Icon -->
                                        <a href="{{ route('student.create') }}" class="view" data-toggle="tooltip" title="View">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <!-- Edit Icon -->
                                        <a href="{{ route('student.create') }}" class="edit" data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <!-- Delete Icon -->
                                        <form action="{{ route('student.create') }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete" style="border:none; background:none;" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="alert" role="alert">
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>jacobthornton@email.com</td>
                                    <td>
                                        <!-- View Icon -->
                                        <a href="{{ route('student.create') }}" class="view" data-toggle="tooltip" title="View">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <!-- Edit Icon -->
                                        <a href="{{ route('student.create') }}" class="edit" data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <!-- Delete Icon -->
                                        <form action="{{ route('student.create') }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete" style="border:none; background:none;" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="alert" role="alert">
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>larrybird@email.com</td>
                                    <td>
                                        <!-- View Icon -->
                                        <a href="{{ route('student.create') }}" class="view" data-toggle="tooltip" title="View">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <!-- Edit Icon -->
                                        <a href="{{ route('student.create') }}" class="edit" data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <!-- Delete Icon -->
                                        <form action="{{ route('student.create') }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete" style="border:none; background:none;" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="alert" role="alert">
                                    <th scope="row">4</th>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>johndoe@email.com</td>
                                    <td>
                                        <!-- View Icon -->
                                        <a href="{{ route('student.create') }}" class="view" data-toggle="tooltip" title="View">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <!-- Edit Icon -->
                                        <a href="{{ route('student.create') }}" class="edit" data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <!-- Delete Icon -->
                                        <form action="{{ route('student.create') }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete" style="border:none; background:none;" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="alert" role="alert">
                                    <th scope="row">5</th>
                                    <td>Gary</td>
                                    <td>Bird</td>
                                    <td>garybird@email.com</td>
                                    <td>
                                        <!-- View Icon -->
                                        <a href="{{ route('student.create') }}" class="view" data-toggle="tooltip" title="View">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <!-- Edit Icon -->
                                        <a href="{{ route('student.create') }}" class="edit" data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <!-- Delete Icon -->
                                        <form action="{{ route('student.create') }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete" style="border:none; background:none;" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Add Student Button -->
                    <div class="text-left mt-3">
                        <a href="{{ route('student.create') }}" class="btn btn-primary">
                            Add Student
                        </a>
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
