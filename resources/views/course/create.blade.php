<x-page-title pageTitle="Add Student"></x-page-title>

<link rel="stylesheet" href="{{ asset('form/style.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="text">
        Add Course
    </div>
    <form action="{{ route('course.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="input-data">
                <input type="text" name="courseName" value="{{ old('courseName') }}">
                <div class="underline"></div>
                <label for="">Course</label>
            </div>
            <div class="input-data">
                <input type="text" name="courseBio" value="{{ old('courseBio') }}">
                <div class="underline"></div>
                <label for="">Bio</label>
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <input type="text" name="certificateName" value="{{ old('certificateName') }}">
                <div class="underline"></div>
                <label for="">Certificate</label>
            </div>
        </div>

        <div class="form-row submit-btn">
            <div class="input-data">
                <div class="inner"></div>
                <input type="submit" value="save">
            </div>
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="button" value="cancel" onclick="window.location.href='{{ route('student.index') }}';">
                </div>
            </div>
        </div>
    </form>
</div>

