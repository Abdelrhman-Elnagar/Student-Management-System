
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('card/style.css') }}">


<x-page-title pageTitle="Show Student"></x-page-title>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <!-- Profile Card  -->
            <div class="col-md-4 mx-auto">
                <div class="card profile-card-3">
                    <div class="background-block">
                        <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                            alt="profile-sample1" class="background" />
                    </div>
                    {{-- <div class="profile-thumb-block">
                        <img src="https://randomuser.me/api/portraits/men/78.jpg" alt="profile-image" class="profile" />
                    </div> --}}
                    <div class="card-content text-center">
                        <h2>{{ "$singleStudent->fName $singleStudent->lName" }}<small>{{ $singleStudent->email }}</small></h2>
                        <div class="icon-block">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <p class="mt-3 w-100 text-center">
                    <a href="{{ route('student.index') }}" class="btn-link">Home</a>
                </p>
            </div>
        </div>
    </div>
</section>
