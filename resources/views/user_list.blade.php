<div class="col">
  <table class="table table-responsive">
    <thead class="thead-dark">
      <tr>
        <!-- <th scope="col">#</th> -->
        <th scope="col">Fullname</th>
        <th scope="col">Email Address</th>
        <th scope="col">Phone Number</th>
        <th scope="col">&nbsp;</th>
      </tr>
    </thead>
      @foreach($users as $user)
    <tbody>
      <tr>
        <!-- <th scope="row">1</th> -->
        <td>{{ $user->surname }} {{ $user->name }} </td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->mobile }}</td>
        <td>
          <!-- <a href="#" class="btn btn-sm btn-info">Show</a> -->
          <a href="{{url('/edit/'.$user->id)}}" class="btn btn-sm btn-warning">Edit</a>
          <!-- <a href="{{url('/delete/'.$user->id)}}" class="btn btn-sm btn-danger">Delete</a> -->
        </td>
      </tr>
    </tbody>
      @endforeach
  </table>
</div>