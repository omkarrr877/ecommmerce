@extends('master')
@section('content')

<div class="container my-5 py-5 z-depth-1">


    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
 

      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-md-6">
          <!-- Default form login -->
          <form class="text-center" action="/login" method="POST">
@csrf
            <p class="h4 mb-4">Sign in</p>
            <!-- Email -->
            <input type="email" name="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
            <!-- Password -->
            <input type="password" name="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4 pink darken-4" type="submit" name="login">Log in</button>
            <!-- Register -->
            <p>Not a member?
              <a href="">Register</a>
            </p>
            <!-- Social login -->
            <p>or sign in with:</p>
                <a href="#" class="mx-1" role="button"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="mx-1" role="button"><i class="fab fa-twitter"></i></a>
                <a href="#" class="mx-1" role="button"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="mx-1" role="button"><i class="fab fa-github"></i></a>
          </form>
          <!-- Default form login -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>

      
@endsection