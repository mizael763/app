<!doctype html>
<html lang="en">
<head>
  <title>Webleb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
<div class="section">
  <div class="container">
    <div class="row full-height justify-content-center">
      <div class="col-12 text-center align-self-center py-5">
        <div class="section pb-5 pt-5 pt-sm-2 text-center">
                <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                <label for="reg-log"></label>
          <div class="card-3d-wrap mx-auto">
            <div class="card-3d-wrapper">
              <div class="card-front">
                <div class="center-wrap">
                  <div class="section text-center">
                    <form method="POST" action="{{route('register')}}">
                      @csrf
                      <h4 class="mb-3 pb-3">Registrarse</h4>
                      <div class="form-group">
                        <input type="text" class="form-style" placeholder="Nombre Completo" name="name">
                        <i class="input-icon uil uil-user"></i>
                      </div>	
                      <div class="form-group mt-2">
                        <input type="text" class="form-style" placeholder="Telefono" name="phone">
                        <i class="input-icon uil uil-phone"></i>
                      </div>	
                      <div class="form-group mt-2">
                        <input type="email" class="form-style" placeholder="Email" name="email">
                        <i class="input-icon uil uil-at"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="password" class="form-style" placeholder="Contraseña" name="password">
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      <div class="form-group mt-2">
                          <input type="password" class="form-style" placeholder="Confirmar Contraseña" name="password_confirmation">
                          <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                        <button type="submit" class="btn mt-4">Regístrarse</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h1 class="mb-3 pb-3" style="text-shadow: -1px -7px 4px rgba(0, 0, 0, 0.8);">¿Que miras?</h1>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          @if ($errors->any())
            <div class="alert alert-danger" style="display: flex;flex-direction: column;width: 63%;margin: auto;margin-top: 10px">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </div>
      </div>
  </div>
  </div>
</div>
</body>
</html>