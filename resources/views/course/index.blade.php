<x-app-layout>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('student.index') }}">Student Management System</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                @include('includes.navbar')

                </div>

                {{-- sweet alert --}}
                @if (session()->has('success'))
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: '{{ session('success') }}',
                                confirmButtonText: 'OK',
                                timer: 3000
                            });
                        });
                    </script>
                @elseif (session()->has('error'))
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: '{{ session('error') }}',
                            confirmButtonText: 'OK',
                            timer: 3000
                        });
                    });
                </script>
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
                                        <th>course name</th>
                                        <th>about</th>
                                        <th>certificate</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr class="alert" role="alert">
                                            {{-- @dd($students) --}}
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $course['name'] }}</td>
                                            <td>{{ $course['bio'] }}</td>
                                            <td>{{ $course->certificate->name }}</td>

                                            <td class="d-flex">
                                                <a href="{{ route('course.show', $course->id) }}" class="view"
                                                    data-toggle="tooltip" title="View">
                                                    <i class="fa fa-eye"></i></a>
                                                <a href="{{ route('course.edit', $course->id) }}" class="edit"
                                                    data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i></a>
                                                <form action="{{ route('course.destroy', $course->id) }}"
                                                    method="POST" id="deleteForm_{{ $course->id }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    {{-- <a class="delete" data-toggle="tooltip" title="Delete" href=""> --}}
                                                    <button type="button" class="delete" data-toggle="tooltip"
                                                        title="Delete" onclick="confirmDelete({{ $course->id }})"> <i class="fa fa-trash" ></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{-- pagination --}}
                            <div class="d-flex justify-content-center">
                                {{ $courses->links('pagination::bootstrap-4') }}
                            </div>

                            <!-- Add Student Button -->
                            <div class="text-left mt-3">
                                <a href="{{ route('course.create') }}" class="btn btn-primary">
                                    Add course
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- modal delete --}}
        <script>
            function confirmDelete(courseId) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this student!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Submit the delete form
                        document.getElementById('deleteForm_' + courseId).submit();
                    }
                });
            }
        </script>

</x-app-layout>
