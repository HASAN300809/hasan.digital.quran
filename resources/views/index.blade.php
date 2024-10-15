<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{'c:\Users\z\Downloads\logo quran.png'}}" type="image/x-icon">

    <title>Digital Qur'an</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="https://kit.fontawesome.com/8b969e22b4.js" crossorigin="anonymous"></script>


</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Digital <span class="food" style="color: cornflowerblue">Qur'an</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 800px">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Qur'an</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- end for navbar --}}



      {{-- isian --}}
      <div class="container" style="margin-top: 250px">
        @yield('content')
      </div>
      {{-- end for --}}


      {{-- click to action --}}
      <div id="cta">
        <div class="dark-overlay">
            <div class="cloud-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto text-center">
                            <h3 class="display-4">Media <span style="color: cornflowerblue">Qur'an</span></h3>
                            <h5>informasi Mengenai Ajaran Islam Dan <br> Ilmu Al-Qur'an</h5>
                            <h3 style="margin-top: 30px">CONTACT INFORMATION</h3>
                            <div class="py-3" style="margin-top: 30px">
                                <i class="fas fa-phone"><br>
                                    <p style="color: #000">phone <br>
                                        <h5>+62 858 1394 8298</h5>
                                    </p>
                                </i>
                                <i class="fas fa-map-marked-alt" style="margin-left: 15px"><br>
                                    <p style="color: #000">Address <br>
                                        <h5>Dusun Ngadas, Ngadas, Poncokusumo, Malang Regency, East Java 65157</h5>
                                    </p>
                                </i>
                                <i class="fas fa-envelope" style="margin-left: 15px"><br>
                                    <p style="color: #000">Email <br>
                                        <h5>hasanabdurrahman0809@gmail.com</h5>
                                    </p>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      {{-- end for click to action --}}



      {{-- footer --}}
      <footer class="py-5 bg-light text-center text-dark font-bold">
        <p>Copyright &copy; 2023 | Digital <span style="color: cornflowerblue">Qur'an</span></p>
      </footer>
      {{-- end for footer --}}


{{-- link js --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
    
</body>
</html>