<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="imgs/branding/icon.png" type="image/icon type">
    <title>Capture.It | Category - {{ request('title') }}</title>
    <link rel="stylesheet" href="css/pictures/index.css" />
    @vite(['resources/js/app.js']) 
</head>
<body>
    {{-- Header Component --}}
    @extends('layouts.header')

    @php
        use App\Models\Owner;
    @endphp
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

     {{-- Footer Component --}}
     @extends('layouts.footer')
</body>
</html>