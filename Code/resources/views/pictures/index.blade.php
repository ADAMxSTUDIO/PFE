@extends('layouts.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAPTURE.IT | World's best & high end pictures for all categories</title>
    <link rel="stylesheet" href="css/pictures/index.css" />
    @vite(['resources/js/app.js'])    
</head>
<body>
    <div class="container-fluid p-0">
        {{-- Index section that will be displayed just when opening this website --}}
        <section class="welcome">
            {{-- Background-video --}}
            <video muted autoplay loop plays-inline>Update your browser to the latest version so, you can preview this media 
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
                <i class="fa-solid fa-chevron-down"></i>
                <select name="filter" id="filter">
                    <option value="1" selected>Trending</option>
                    <option value="1">Most liked</option>
                    <option value="1">Free</option>
                    <option value="1">Lisence</option>
                </select>
            </div>
            {{-- Pictures --}}
            @php
                use App\Models\Owner;
            @endphp
            <div class="main-pictures">
                @forelse ($pictures as $picture)
                    <div class="picture">
                        <i class="fa-regular fa-heart" title="Like"></i>
                        {{-- <i class="fa-solid fa-heart"></i> --}}
                        <i class="fa-regular fa-bookmark" title="Collect"></i>
                        {{-- <i class="fa-solid fa-bookmark"></i> --}}
                        <i class="fa-solid fa-circle-arrow-down" title="Download"></i>
                        {{-- <i class="fa-solid fa-check-to-slot"></i> --}}
                        <div class="picture-profile">
                            <img src="{{ Owner::findOrFail($picture->owner_id)->profile_pic }}" alt="" />
                            <p>{{ Owner::findOrFail($picture->owner_id)->firstname }} {{ Owner::findOrFail($picture->owner_id)->lastname }}</p>
                        </div>
                        <img src="{{ $picture->src }}" alt="" />
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
            
    </div>

    <script src="js/pictures/index.js" type="text/babel"></script>
</body>
</html>