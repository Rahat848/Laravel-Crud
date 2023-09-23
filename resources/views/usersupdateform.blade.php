
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        {{-- navbar added --}}
        @include('./layout/navbar')
                    <h1 class="text-center bg-primary text-light">Edit your details!</h1>
        {{-- update form added             --}}
        <form action="{{$url}}" method="post">
          @csrf
          <div class="mb-3">
            <label for="exampleInputName" class="form-label">User Name</label>
            <input type="text" class="form-control" value="{{$users['name']}}" name="name" id="exampleInputName" aria-describedby="textHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" value="{{$users['email']}}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control"  name="password" id="exampleInputPassword1" value="{{$users['password']}}">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>