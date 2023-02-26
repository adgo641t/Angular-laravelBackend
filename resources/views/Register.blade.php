@extends('layout.navbar')
@section('content')
<style>

.get-in-touch {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
     color: #5543ca;
    background: #5543ca;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}

</style>
<div class="container">
<section class="get-in-touch">
   <h1 class="title">Register</h1>
   <form method="post" class="contact-form row">
      @csrf
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" type="text"  name="name" value="{{old('name')}}">
         <label class="label" for="name">Name</label>
        @error('name')
          <small style="color: red;">{{$message}}</small>
        @enderror
        </div>
      <div class="form-field col-lg-6 ">
      <label class="label" for="email">E-mail</label>
      <input id="email" class="input-text js-input" name="email" type="text"  value="{{old('email')}}">
        
         @error('email')
          <small style="color: red;">{{$message}}</small>
        @enderror
        </div>
      <div class="form-field col-lg-6 ">
         <input id="password" class="input-text js-input" name="password" type="text"  value="{{old('password')}}">
         <label class="label" for="company">Password</label>
         @error('password')
          <small style="color: red;">{{$message}}</small>
        @enderror
        </div>
      <div class="form-field col-lg-6 ">
         <input id="password" class="input-text js-input" type="text" required>
         <label class="label" for="company">Confirm Password</label>
      </div>
      <div style="text-align:center" class="form-field col-lg-12">
         <input  class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
</section>
</div>
@endsection


<footer class="text-center text-white" style="background-color: #f1f1f1;   position: fixed;
   bottom: 0;
   width: 100%;">

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:<b> Diseñado por Adrian</b>
  </div>
  <!-- Copyright -->
</footer>