@extends('layout')
@section('title', 'Edit')

<html>
  <head>
  <title>@yield('title') - Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">

</head>

<body><section class="vh-100" style="background-color: black;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 5px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5 fw-bold">Update account</h2>

              <form action="{{ route('save-edit-students',['id' => $students['id']])}}" method="POST">
                @csrf

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" value="{{$students->name}}"/>
                  <label class="form-label fw-bold" for="form3Example1cg">Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" value="{{$students->email}}"/>
                  <label class="form-label fw-bold" for="form3Example3cg">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" value="{{$students->password}}"/>
                  <label class="form-label fw-bold" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="repeat_password" value="{{$students->repeat_password}}"/>
                  <label class="form-label fw-bold" for="form3Example4cdg">Repeat your password</label>
                </div>

                <div class="d-flex justify-content-center mb-4">
                  <button type="submit"
                    class="btn btn-dark btn-lg text-white fw-bold">Update</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>

</body>

</html>