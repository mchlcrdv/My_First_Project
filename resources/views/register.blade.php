@extends('layout')
@section('title', 'Registration')

@section('content')
<link rel='stylesheet' type='text/css' href='<?php echo asset('storage/css/style.css')?>'>
  <section class="vh-100">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 5px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5 fw-bold">Add users</h2>

              <form class="form-signin" action="{{ route('save-registration') }}" method="POST">
                @csrf

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name"/>
                  <label class="form-label fw-bold" for="form3Example1cg">Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email"/>
                  <label class="form-label fw-bold" for="form3Example3cg">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password"/>
                  <label class="form-label fw-bold" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="repeat_password"/>
                  <label class="form-label fw-bold" for="form3Example4cdg">Repeat your password</label>
                </div>

                <div class="d-flex justify-content-center mb-4">
                  <button type="submit"
                    class="btn btn-dark btn-lg text-white fw-bold">Submit</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection