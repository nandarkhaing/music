@extends('frontendtemplate')
@section('content')
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>Please Register</p>
            <h2>Register</h2>
        </div>
</section>
   
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Create a account</h3>
                       
                        <div class="login-form">
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                 <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter E-mail">
                                </div>
                                <div class="form-group">
                                    <label for="Password1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password">
                                </div>
                                 <div class="form-group">
                                    <label for="Password1">Comfirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Comfirm your Password"name="password_confirmation">
                                </div>
                                
                              
                                <button type="submit" class="btn oneMusic-btn mt-30">Create accout</button>
                                <div class=" mt-3 text-center ">
          <a href="#" class="loginLink text-decoration-none">Have an account? Go to login</a>
        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

