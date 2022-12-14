@extends('layouts.simple')
@section('content')
<section class="vh-100" style="background-color: #d6c6bf;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="{{ asset('images/capture.PNG') }}"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="{{ route('forgotPassword') }}">
                    @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <h1 class="fw-bold mb-2 fs-1">
                        VIRA<span class="text-danger">G</span>E
                    </h1>
                  </div>

                    <div class="mb-3 text-secondary"> Entrez votre adresse mail et nous vous encerrons un lien pour rĂ©initialiser votre mot de passe.</p>
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example17">Email </label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                      </svg></span>
                    <input type="email" class="form-control" id="inputEmailAddress" name="email" placeholder="Saisir votre email" />
                  </div>

                  <br> <br>
                  <div class="pt-1 mb-4">
                    <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                      <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                    </svg></i>RĂ©initialiser le mot de passe</button>
                                      </div>

                  <div> Retourner Ă  <a href="login" class="text-decoration-none">la page de connexion</a></div>
                  <br>
                  <img src="{{ asset('images/proverbe.PNG') }}"
                      alt="login form" class="img-fluid"  width="300" height="200"/>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
