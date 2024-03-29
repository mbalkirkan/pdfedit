@extends('app')
@section('title')
    Giriş Yap
@endsection
@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form method="post" action="{{route('login.login')}}">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                @csrf
                                <h2 class="fw-bold mb-2 text-uppercase">Giriş</h2>
                                <p class="text-white-50 mb-5">Mail ve şifre girin</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="email" name="email" id="typeEmailX"
                                           class="form-control form-control-lg"/>
                                    <label class="form-label" for="typeEmailX">Email</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="password" id="typePasswordX"
                                           class="form-control form-control-lg"/>
                                    <label class="form-label" for="typePasswordX">Şifre</label>
                                </div>


                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                            </div>
                            </form>
                            <div>
                                <p class="mb-0">Üyeliğiniz yok mu ? <a href="{{route('register.index')}}"
                                                                       class="text-white-50 fw-bold">Üyelik
                                        oluşturun</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
