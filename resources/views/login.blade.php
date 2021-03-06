@extends('master')

@section('content')
   <div class="container mt-5">
    <div class="row">
     <div class="">
      <form method="POST" action="login" class="mx-auto" style="height: 435px; width: 500px;">
     <h3 class="mt-4">User Login</h3>
     @csrf
     <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" name="email" class="form-control " aria-describedby="emailHelp">
      @error('email')
         <span class="text-danger">{{$message}}</span> 
      @enderror
     </div>
     <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" name="password" class="form-control">
      @error('password')
          <span class="text-danger">{{$message}}</span> 
      @enderror
     </div>
     <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
     <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
     </div>
    </div>
    
   </div>
@endsection