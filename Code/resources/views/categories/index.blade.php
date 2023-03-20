<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="imgs/branding/icon.png" type="image/icon type">
    <title>Capture.It | Popular Categories</title>
    <link rel="stylesheet" href="css/categories/index.css" />
    @vite(['resources/js/app.js']) 
</head>
<body>
    {{-- Header Component --}}
    @extends('layouts.header')

    <section class="categories container-fluid">
        {{-- Categories Intro --}}
        <div class="intro">
            <h3 class="text-center">Popular Categories</h3>
            <p class="text-center">The most popular search terms on Capture.it</p>
        </div>
        {{-- Categories --}}
        <div class="categories-content">
            @forelse ($categories as $category)
                <div class="category">
                    <img src="{{ $category->preview }}" alt="category preview" />
                    <a href="{{ route('category.picture', $category->id) }}">{{ $category->title }}</a>
                    <p>{{ App\Models\Picture::where('category_id', $category->id)->count() }} photos</p>
                </div>
            @empty
            <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">Oops!</h4>
                <p>Looks like there is not no categories to be displayed yet. Be the first to see our categories by joining our beautiful community! <br />Join now form <a class="text-danger" href="">here</a></p>
                <hr>
                <p class="mb-0">Try to refresh this page from <span class="text-danger" style="cursor: pointer" onclick="window.location.reload()">here</span> If you still find the same problem, consider to contact us.</p>
            </div>
            @endforelse
        </div>
    </section>

    {{-- Footer Component --}}
    @extends('layouts.footer')
    <script type="text/javascript" src="js/categories/index.js"></script>
</body>
</html>