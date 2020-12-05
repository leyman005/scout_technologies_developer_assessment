<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Scout Technology Development Assessment</title>
  </head>
  <body style="background-color: #fefefe">
    <div class="container-fluid mt-4">
        @include('navbar')
    </div>

    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class='col'>
                    @include("user_list")
                </section>
            </div>
        </div>

    @elseif($layout == 'show')
         <div class="container-fluid mt-4">
            <div class="row">
                <section class='col'>
                    @include("user_list")
                </section>
                <section class='col'>
                    @include("user_list")
                </section>
            </div>
        </div>

    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class='col-md-7'>
                    @include("user_list")
                </section>
                <section class='col-md-5'>
                    <form action="{{ url('/update/'.$user->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" value="{{ $user->username }}" class="form-control" placeholder="Enter username...">
                        </div>

                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" readonly value="{{ $user->email }}" class="form-control" placeholder="name@example.com">
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="mobile" value="{{ $user->mobile }}" class="form-control" placeholder="Enter phone number...">
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Enter name...">
                        </div>

                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" name="surname" value="{{ $user->surname }}" class="form-control" placeholder="Enter surname...">
                        </div>

                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" name="job_title" value="{{ $user->job_title }}" class="form-control" placeholder="Enter job title...">
                        </div>

                        <div class="form-group">
                            <label>Biography</label>
                            <textarea class="form-control" name="bio" cols="10" rows="5" placeholder="Enter biography...">{{ $user->bio }}</textarea>
                        </div>

                        <!-- <div class="form-group">
                            <label>Password</label>
                            <input type="password" readonly name="password" value="{{ $user->password }}" class="form-control" placeholder="Enter password...">
                        </div> -->


                        <input type="submit" name="save" class="btn btn-info" value="Update">
                        <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                    </form>
                </section>
            </div>
        </div>

    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>