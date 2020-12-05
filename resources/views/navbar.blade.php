<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">New</a>
      </li>
    </ul>
  </div>
</nav>

<div class="row">
  <section class='col'>

      <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create New User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ url('/store')}}" method="post">
                  @csrf
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Enter username..." id="username">
                  @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Email address</label>
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" id="email">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" name="mobile" class="form-control @error('name') is-invalid @enderror" placeholder="Enter phone number..." id="mobile">
                  @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name..." id="name">
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Surname</label>
                  <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" placeholder="Enter surname..." id="surname">
                  @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Job Title</label>
                  <input type="text" name="job_title" class="form-control @error('job_title') is-invalid @enderror" placeholder="Enter job title..." id="job_title">
                  @error('job_title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Biography</label>
                  <textarea class="form-control" name="bio @error('bio') is-invalid @enderror" cols="10" rows="5" placeholder="Enter biography..." id="bio"></textarea>
                  @error('bio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control @error('confirmation_password') is-invalid @enderror" placeholder="Enter password..." id="password">
                   @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Confirmation Password</label>
                  <input type="password" name="confirmation_password" class="form-control @error('confirmation_password') is-invalid @enderror" placeholder="Enter confirmation password..." id="confirmation_password">
                  @error('confirmation_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-info" onclick="$('form').submit()">Save</button>
              <button type="button" class="btn btn-warning" onclick="$('form')[0].reset()">Reset</button>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>