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
        Add Student
    </div>
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="input-data">
                <input type="text" name="studentFName" value="{{ old('studentFName') }}">
                <div class="underline"></div>
                <label for="">First Name</label>
            </div>
            <div class="input-data">
                <input type="text" name="studentLName" value="{{ old('studentLName') }}">
                <div class="underline"></div>
                <label for="">Last Name</label>
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <input type="email" name="studentEmail" value="{{ old('studentEmail') }}">
                <div class="underline"></div>
                <label for="">Email Address</label>
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

