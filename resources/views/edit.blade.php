<link rel="stylesheet" href="{{ asset('form/style.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Edit Student</title>
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
        Edit Student
    </div>
    <form action="{{ route('student.update', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="input-data">
                <input type="text" name="studentFName" value="{{ $user->fName }}">
                <div class="underline"></div>
                <label for="">First Name</label>
            </div>
            <div class="input-data">
                <input type="text" name="studentLName" value="{{ $user->lName }}">
                <div class="underline"></div>
                <label for="">Last Name</label>
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <input type="email" name="studentEmail" value="{{ $user->email }}">
                <div class="underline"></div>
                <label for="">Email Address</label>
            </div>
        </div>
        <div class="form-row submit-btn">
            <div class="input-data">
                <div class="inner"></div>
                <input type="submit" value="edit">
            </div>
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="button" value="cancel" onclick="window.location.href='{{ route('student.index') }}';">
                </div>
            </div>
        </div>
    </form>
</div>
