<title>Add Student</title>
<link rel="stylesheet" href="{{ asset('form/style.css') }}">
<div class="container">
    <div class="text">
        Add Student
    </div>
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="input-data">
                <input type="text" name="studentFName" required>
                <div class="underline"></div>
                <label for="">First Name</label>
            </div>
            <div class="input-data">
                <input type="text" name="studentLName" required>
                <div class="underline"></div>
                <label for="">Last Name</label>
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <input type="email" name="studentEmail" required>
                <div class="underline"></div>
                <label for="">Email Address</label>
            </div>
        </div>

        <div class="form-row submit-btn">
            <div class="input-data">
                <div class="inner"></div>
                <input type="submit" value="add">
            </div>
            <div class="input-data">
                <div class="inner"></div>
                <input type="submit" value="cancel">
            </div>
        </div>
    </form>
</div>
