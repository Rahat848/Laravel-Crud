<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users Trash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
     {{-- navbar added --}}
     @include('./layout/navbar')
     <h1 class="text-center bg-primary text-light">Welcome to Home Page!</h1>
     <table class="table">
        <a href="{{url('/home')}}"><button class="btn btn-warning text-light">Go To Home</button></a>
      <thead>
        <tr class="text-center">
          <th scope="Id">ID</th>
          <th scope="Name">Name</th>
          <th scope="Email">Email</th>
          <th scope="Password">Password</th>
          <th scope="Action">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($users as $user)
          <tr class="text-center">
          <td>{{$user['id']}}</td>
          <td>{{$user['name']}}</td>
          <td>{{$user['email']}}</td>
          <td>{{$user['password']}}</td>
          <td>
            <a href="{{url('/restore')}}/{{$user['id']}}"><button class="btn btn-primary text-light">Restore</button></a>
            <a href="{{url('/force-delete')}}/{{$user['id']}}"><button class="btn btn-danger text-light">Delete</button></a>
          </td>
        </tr>
      @endforeach

      </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
