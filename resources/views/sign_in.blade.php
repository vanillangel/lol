
@extends('layouts.form_sign_in')

@section('title', 'Form')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Registration</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="btn btn-outline-primary" href="/">Home</a>
   <a class="btn btn-outline-primary" href="#">Sign In</a>
  <a class="btn btn-outline-primary" href="sign_up">Sign Up</a>
  </nav>
  
</div>
<form method="POST" action="sign_in">
	@csrf
        <h4 align="center">Sign In</h4>
        <input type="text" placeholder="username" name="si_username"><br>
<input type="password" placeholder="password" name="si_password"><br>
<button script="index.php">Enter</button>
    </form>

@endsection
