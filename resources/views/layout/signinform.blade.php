<form action="{{url('/')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">User Name</label>
      <input type="text" class="form-control" value="{{old('name')}}" name="name" id="exampleInputName" aria-describedby="textHelp">
      <span class="text-danger">
        @error('name')
          {{$message}}
        @enderror
       </span>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" value="{{old('email')}}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
      <span class="text-danger">
        @error('email')
          {{$message}}
        @enderror
       </span>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control"  name="password" id="exampleInputPassword1">
      <span class="text-danger">
        @error('password')
          {{$message}}
        @enderror
       </span>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Comfirm Password</label>
      <input type="password" class="form-control"  name="password_confirmation" id="exampleInputPassword1">
     <span class="text-danger">
      @error('password_confirmation')
        {{$message}}
      @enderror
     </span>
    </div>
    <button type="submit" class="btn btn-primary">Signin</button>
  </form>