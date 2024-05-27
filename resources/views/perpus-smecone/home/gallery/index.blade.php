<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Smecone</title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/blog/style.css') }}">

    {{-- box icon --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Raleway;
  background-color: #fff;
}

.heading {
    text-align: center;
    font-size: 2.0em;
    letter-spacing: 1px;
    padding: 40px;
    color: black;
    padding-top: 5rem
}

.gallery-image {
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.gallery-image img {
  height: 250px;
  width: 350px;
  transform: scale(1.0);
  transition: transform 0.4s ease;
}

.img-box {
  box-sizing: content-box;
  margin: 10px;
  height: 250px;
  width: 350px;
  overflow: hidden;
  display: inline-block;
  color: white;
  position: relative;
  background-color: white;
}

.caption {
  position: absolute;
  bottom: 5px;
  left: 20px;
  opacity: 0.0;
  transition: transform 0.3s ease, opacity 0.3s ease;
}

.transparent-box {
  height: 250px;
  width: 350px;
  background-color:rgba(0, 0, 0, 0);
  position: absolute;
  top: 0;
  left: 0;
  transition: background-color 0.3s ease;
}

.img-box:hover img {
  transform: scale(1.1);
}

.img-box:hover .transparent-box {
  background-color:rgba(0, 0, 0, 0.5);
}

.img-box:hover .caption {
  transform: translateY(-20px);
  opacity: 1.0;
}

.img-box:hover {
  cursor: pointer;
}

.caption > p:nth-child(2) {
  font-size: 0.8em;
}

.opacity-low {
  opacity: 0.5;
}

.container-g2 {
        display: flex;
        width: 100%;
        padding: 4% 2%;
        box-sizing: border-box;
        height: 100vh;
}

.hello {
  opacity: 1 !important;
}
.full {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}
.full .content {
  background-color: rgba(0,0,0,0.75) !important;
  height: 100%;
  width: 100%;
  display: grid;
}
.full .content img {
  left: 50%;
  transform: translate3d(0, 0, 0);
  animation: zoomin 1s ease;
  max-width: 100%;
  max-height: 100%;
  margin: auto;
}
.byebye {
  opacity: 0;
}
.byebye:hover {
  transform: scale(0.2) !important;
}
.gallery {
  display: grid;
  grid-column-gap: 8px;
  grid-row-gap: 8px;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  grid-auto-rows: 8px;
}
.gallery img {
  max-width: 100%;
  border-radius: 8px;
  box-shadow: 0 0 16px #333;
  transition: all 1.5s ease;
}
.gallery img:hover {
  box-shadow: 0 0 32px #333;
}
.gallery .content {
  padding: 4px;
}
.gallery .gallery-item {
  transition: grid-row-start 300ms linear;
  transition: transform 300ms ease;
  transition: all 0.5s ease;
  cursor: pointer;
}
.gallery .gallery-item:hover {
  transform: scale(1.025);
}
@media (max-width: 600px) {
  .gallery {
    grid-template-columns: repeat(auto-fill, minmax(30%, 1fr));
  }
}
@media (max-width: 400px) {
  .gallery {
    grid-template-columns: repeat(auto-fill, minmax(50%, 1fr));
  }
}
@-moz-keyframes zoomin {
  0% {
    max-width: 50%;
    transform: rotate(-30deg);
    filter: blur(4px);
  }
  30% {
    filter: blur(4px);
    transform: rotate(-80deg);
  }
  70% {
    max-width: 50%;
    transform: rotate(45deg);
  }
  100% {
    max-width: 70%;
    transform: rotate(0deg);
  }
}
@-webkit-keyframes zoomin {
  0% {
    max-width: 50%;
    transform: rotate(-30deg);
    filter: blur(4px);
  }
  30% {
    filter: blur(4px);
    transform: rotate(-80deg);
  }
  70% {
    max-width: 50%;
    transform: rotate(45deg);
  }
  100% {
    max-width: 70%;
    transform: rotate(0deg);
  }
}
@-o-keyframes zoomin {
  0% {
    max-width: 50%;
    transform: rotate(-30deg);
    filter: blur(4px);
  }
  30% {
    filter: blur(4px);
    transform: rotate(-80deg);
  }
  70% {
    max-width: 50%;
    transform: rotate(45deg);
  }
  100% {
    max-width: 70%;
    transform: rotate(0deg);
  }
}
@keyframes zoomin {
  0% {
    max-width: 50%;
    transform: rotate(-30deg);
    filter: blur(4px);
  }
  30% {
    filter: blur(4px);
    transform: rotate(-80deg);
  }
  70% {
    max-width: 50%;
    transform: rotate(45deg);
  }
  100% {
    max-width: 70%;
    transform: rotate(0deg);
  }
}
    </style>
</head>
<body>

    {{-- header --}}

    <header>
        <div class="nav container">
            {{-- logo --}}
            <a href="#" class="logo">Perpustakaan<span> Smecone</span></a>

            {{-- login --}}
            {{-- <a href="" class="login">Login</a> --}}
        </div>
    </header>

    {{-- post content --}}
    <section class="post-header">
        <div class="header-content post-container">
            <a href="{{ route('home') }}" class="back-home">Back To Home</a>
            <h1 class="header-title">Gallery Perpustakaan Smecone</h1>
            {{-- <img src="{{ asset('assets/perpus-smc/images/home-images/bicorner-landscape.jpeg') }}" alt="" class="header-img"> --}}
        </div>
    </section>


    <p class="heading">Gallery Perpustakaan Smecone</p>
    <div class="gallery container" id="gallery">
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,care" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,studied" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,substance" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,choose" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,past" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,lamp" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,yet" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,eight" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,crew" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,event" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,instrument" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,practical" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,pass" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,bigger" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,number" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,feature" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,line" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,railroad" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,pride" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,too" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,bottle" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,base" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,cell" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,bag" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,card" alt=""></div>
        </div>
    </div>

    <p class="heading">Gallery BI CORNER</p>
    <div class="gallery-image">
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner1.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Library</p>
                <p class="opacity-low">Architect Design</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner2.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Night Sky</p>
                <p class="opacity-low">Cinematic</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner3.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Tea Talk</p>
                <p class="opacity-low">Composite</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner4.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Road</p>
                <p class="opacity-low">Landscape</p>
                </div>
            </div>
        </div>
    </div>

    <p class="heading">Gallery Layanan Sirkulasi</p>
    <div class="gallery-image">
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner1.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Library</p>
                <p class="opacity-low">Architect Design</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner2.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Night Sky</p>
                <p class="opacity-low">Cinematic</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner3.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Tea Talk</p>
                <p class="opacity-low">Composite</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner4.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Road</p>
                <p class="opacity-low">Landscape</p>
                </div>
            </div>
        </div>
    </div>

    <p class="heading">Gallery Layanan Literasi</p>
    <div class="gallery-image">
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner1.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Library</p>
                <p class="opacity-low">Architect Design</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner2.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Night Sky</p>
                <p class="opacity-low">Cinematic</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner3.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Tea Talk</p>
                <p class="opacity-low">Composite</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner4.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Road</p>
                <p class="opacity-low">Landscape</p>
                </div>
            </div>
        </div>
    </div>

    <p class="heading">Gallery Layanan Pemustaka</p>
    <div class="gallery-image">
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner1.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Library</p>
                <p class="opacity-low">Architect Design</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner2.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Night Sky</p>
                <p class="opacity-low">Cinematic</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner3.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Tea Talk</p>
                <p class="opacity-low">Composite</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner4.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Road</p>
                <p class="opacity-low">Landscape</p>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="footer container">
        <p>&#169; Perpustakaan Smecone All Right Reserved</p>
        <div class="social">
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
            <a href="#"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>


    <script src="{{ asset('assets/perpus-smc/js/gallery/scriptc.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/perpus-smc/js/blog/script.js') }}"></script>
</body>
</html>
