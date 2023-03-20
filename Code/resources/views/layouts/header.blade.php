@section('header')
    {{-- All dependencies --}}
    @vite(['resources/js/app.js'])    
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    
    {{-- Navigation bar --}}
    <header>
        {{-- Branding-logo --}}
        <div class="branding" onclick=" window.location.href = '{{ URL::to('/') }}' ">
            <img src="imgs/branding/logo v3-cropped.png" alt="CaptureIt Logo" title="CaptureIt" />
            <h3>Capture.It</h3>
        </div>
        {{-- Anchors --}}
        <nav>
            <i class="fa-solid fa-magnifying-glass" title="search categories" onclick="window.location.href = '{{ url('/category') }}'"></i>
            <a href="{{ URL::to('/') }}#explore">Explore</a>
            <a href="">Upload</a>
            <a href="">Log in</a>
            <a href="">Join</a>
        </nav>
    </header>

    {{-- ScrollTop Btn --}}
    <button id="scrollTop">
        <i class="fa-sharp fa-solid fa-arrow-up"></i>
    </button>

    {{-- Navigation bar & ScrollTop btn custom --}}
    <script src="js/index.js" type="text/javascript"></script>
    @show