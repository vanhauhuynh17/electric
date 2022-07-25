@extends('layouts.master')
@section('content')
<style>
  .error{
    color:red;
    display:none;
  }
</style>
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
              <img src="assets/images/logo.svg" alt="logo">
            </div>

            <h6 class="font-weight-light">Sign in to continue.</h6>
            <div method="POST" onSubmit="handleSubmit"  class="pt-3">
              @csrf 
            <div class="form-group">
                <input name="username"  class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
              </div>
              <div class="form-group">
                <input name="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="mt-3">
               <label class="error"> Username or password not correctly ! </label>
              </div>
              <div class="mt-3">
                <button onclick="submitLogin()" type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
              </div>
              <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <!-- <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input">
                    Keep me signed in
                  </label>
                </div> -->
                <!-- <a href="#" class="auth-link text-black">Forgot password?</a> -->
              </div>
          
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- base:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/template.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- endinject -->
<script>
  function submitLogin(){
    $.ajax({
          // url: "{{$data['base_url']}}/login",
          url:"{{route('post-login')}}",
          type: 'POST',
          dataType: "json",
          data:{
              username: $("[name='username']").val(),
              password:$("[name='password']").val()
          }
        }).done(function(data) {
          if(data.error){
            $(".error").css("display", "block");
          }
          else{
            $(".error").css("display", "none");
            window.location.href = "/index";
          }
          $(".loading").toggle();
        });
    }
</script>
</body>

</html>

@endsection