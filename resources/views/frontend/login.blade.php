 @extends('frontendtemplate')
 @section('content')


 <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>If you have an account</p>
            <h2>Login</h2>
        </div>
</section>
   
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Welcome Back</h3>
                       
                        <div class="login-form">
                             <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter E-mail"name="email">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"name="password">
                                </div>
                                <button type="submit" class="btn oneMusic-btn mt-30">Login</button>
                                {{-- <p>If you havn't an account</p>Go to <a href="{{route('registerpage')}}">Register</a> --}}
           
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection