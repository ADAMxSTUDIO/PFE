@extends('layouts.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="imgs/branding/icon.png" type="image/icon type">
    <title>Capture.It | World's best & high end pictures for all categories</title>
    <link rel="stylesheet" href="css/pictures/index.css" />
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container-fluid p-0">
        {{-- Index section that will be displayed just when opening this website --}}
        <section class="welcome">
            {{-- Background-video --}}
            <video muted autoplay loop plays-inline>Update your browser to the latest version so, you can preview this media :to
                <source src="vids/StartVideo.mp4" type="video/mp4" />
            </video>

            {{-- Header Component --}}
            @section('header')

            {{-- Section's content --}}
            <div class="content">
                <h1>CAPTURE.IT</h1>
                <p class="text-light text-center">World's best & high end pictures for all categories.</p>
                <a href="#explore" id="explore">Explore</a>
            </div>
        </section>

        {{-- Explore section that will display the pictures with different filters to set on --}}
        <section class="main" id="explore">
            {{-- Pictures-filter --}}
            <div class="main-filters d-flex justify-content-between align-items-center">
                <h3 class="">Dive in, and explore unique pictures</h3>
                <form action="{{ route('picture.filter') }}" method="GET">
                    @csrf
                    <select name="filter" id="filter" onchange = "this.form.submit()" class="form-control @error('filter') is-invalid @enderror">
                        <option selected disabled>Filter</option>
                        <option value="trending">Trending</option>
                        <option value="new">New</option>
                        <option value="liked">Liked</option>
                        <option value="free">Free</option>
                        <option value="license">License</option>
                    </select>
                    @error('filter')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </form>
            </div>
            {{-- <script>
                document.querySelector('select').onchange = (event) => {
                        window.location.href = '/picture/' + event.target.value + '/filter';
                    }
            </script> --}}
            {{-- Pictures --}}
            @php
                use App\Models\Owner;
            @endphp
            @if (session()->has('pictures'))
                @php $pictures = session()->get('pictures'); @endphp
            @endif
            <div class="main-pictures">
                @forelse ($pictures as $picture)
                    <div class="picture">

                        <div class="picture-upper">
                            <span>    {{ $picture->views }}</span>
                            <i class="fa-regular fa-heart" title="Like"></i>
                            {{-- <i class="fa-solid fa-heart"></i> --}}
                            <i class="fa-regular fa-bookmark" title="Collect"></i>
                            {{-- <i class="fa-solid fa-bookmark"></i> --}}
                        </div>

                        <div class="picture-lower">
                            <i class="fa-solid fa-circle-arrow-down" title="Download"></i>
                            {{-- <i class="fa-solid fa-check-to-slot"></i> --}}

                            <div class="picture-profile" title="{{ Owner::findOrFail($picture->owner_id)->firstname }} {{ Owner::findOrFail($picture->owner_id)->lastname }}">
                                <img src="{{ Owner::findOrFail($picture->owner_id)->profile_pic }}" alt="picture's owner profile" />
                                <p>{{ Owner::findOrFail($picture->owner_id)->firstname }} {{ Owner::findOrFail($picture->owner_id)->lastname }}</p>
                            </div>
                            <img src="{{ $picture->src }}" alt="picture" />
                        </div>
                    </div>
                @empty
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Oops!</h4>
                    <p>Looks like there is not no pictures to be displayed yet. Be the first to see our pictures collection by joining our beautiful community! <br />Join now form <a class="text-danger" href="">here</a></p>
                    <hr>
                    <p class="mb-0">Try to refresh this page from <span class="text-danger" style="cursor: pointer" onclick="window.location.reload()">here</span> If you still find the same problem, consider to contact us.</p>
                </div>
                @endforelse
            </div>
        </section>
        {{-- <div class="pagination">
            {{ $pictures->links() }}
        </div> --}}
    </div>

    {{-- Footer Component --}}
    @extends('layouts.footer')
    <script src="js/pictures/index.js" type="text/babel"></script>
</body>
</html>