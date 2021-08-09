    <!--navbar here-->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #002366; font-family: 'Maven Pro', sans-serif;">
        <a class="navbar-brand" href="#">IfMatics</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/vision-mission">Visi Misi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/organization">Struktur Organisasi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/accreditation">Akreditasi</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/social-activities">Aktifitas Sosial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/awards">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/facility">Fasilitas</a>
                </li>
                
            </ul>
            <div class="form-inline my-2 my-lg-0">
                @if (Route::has('login'))
                    @auth
                        <a class="userLinks" href="{{ url('/dashboard') }}" type="submit">#username</a>
                    @else
                            <a class="btn-login" type="submit" href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a class="btn-register" type="submit" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif

            </div>
        </div>
    </nav>
    @yield('mainContent')

    <!--footer-->

    <section class="page-section footer">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 text-left">
                <ul style="list-style: none;">
                        <li ><h2>//Change Later</h2></li>
                        <li >7-chōme-3-1 Hongō, Bunkyo City, Tokyo 113-8654, Japan</li>
                        <li >P. +93732374</li>
                        <li >M. if-matics-project@mailer.com</li>
                    </ul>
                </div>
                <div class="col-lg-4 text-left">
                <ul style="list-style: none;">
                        <li ><h2>//Change Later</h2></li>
                        <li >7-chōme-3-1 Hongō, Bunkyo City, Tokyo 113-8654, Japan</li>
                        <li >P. +93732374</li>
                        <li >M. if-matics-project@mailer.com</li>
                    </ul>
                </div>
                <div class="col-lg-4 text-left">
                    <ul style="list-style: none;">
                        <li ><h2>Hubungi Kami</h2></li>
                        <li >7-chōme-3-1 Hongō, Bunkyo City, Tokyo 113-8654, Japan</li>
                        <li >P. +93732374</li>
                        <li >M. if-matics-project@mailer.com</li>
                    </ul>
                    
                </div>
            </div>
            <div class="row">
                <d  iv class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">

                </div>
                <div class="col-lg-4 mr-auto text-center">

                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-3 bottom-footer" style="color: white; border-top: 0.5px solid #5C5557">
        <div class="container">
            <div class="row">
                <div class="col-4 small text-center footer-bottom-text">
                    IfMatics University
                </div>
                <div class="col-4 small text-center footer-bottom-text">
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    Project IfMatics
                </div>
                <div class="col-4 small text-center footer-bottom-text">
                    Department of IfMatics 
                </div>
            </div>


        </div>
    </footer>
</body>
<!--anime js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>