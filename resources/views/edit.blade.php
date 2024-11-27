<link rel="stylesheet" href="{{ asset('form/style.css') }}">
<title>Edit Student</title>
<div class="container">
    <div class="text">
        Edit Student
    </div>
    <form action="{{ route('student.update',$user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="input-data">
                <input type="text" name="studentFName" value="{{ $user->fName }}" required>
                <div class="underline"></div>
                <label for="">First Name</label>
            </div>
            <div class="input-data">
                <input type="text" name="studentLName" value="{{ $user->lName }}" required>
                <div class="underline"></div>
                <label for="">Last Name</label>
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <input type="email" name="studentEmail" value="{{ $user->email }}" required>
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
                        <input type="submit" value="cancel">
                    </div>
                </div>
    </form>
</div>
