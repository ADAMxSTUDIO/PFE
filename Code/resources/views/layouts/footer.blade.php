@section('footer')

    <footer>
        <div class="footer-upper">
            <div class="socials text-light">
                <h4>Free & lisenced photos shared by talented creators.</h4>
                <p>Download one of our apps.</p>
                <div class="apps text-dark  ">
                    <div class="apps-android">
                        <i class="fa-brands fa-android"></i>
                        <span>Android</span> 
                    </div>
                    <div class="apps-ios">
                        <i class="fa-brands fa-apple"></i>
                        <span>IOS</span> 
                    </div>
                </div>
            </div>
            <div class="filters text-light">
                <h4>Capture.it</h4>
                <ul>    
                    <li onclick="window.location.href='/#explore'">Free Stock Photos</li>
                    <li onclick="window.location.href='/#explore'">Trending</li>
                    <li onclick="window.location.href='/#explore'">Most Liked</li>
                    <li onclick="window.location.href='/#explore'">Lisence</li>
                    <li>Challenges</li>
                    <li>Leaderboard</li>
                    <li>Other plugins & apps</li>
                </ul>
            </div>
            <div class="company text-light">
                <h4>Company</h4>
                <ul>
                    <li>About</li>
                    <li>Blog</li>
                    <li>FAQ</li>
                    <li>Become a hero</li>
                    <li>Partner with Pexels</li>
                    <li>Image & Video API</li>
                    <li>Sign Up</li>
                </ul>
            </div>
            <div class="categories text-light">
                <h4>Categories</h4>
                <div class="categories-content">
                    @forelse (App\Models\Category::all()->take(17) as $category)
                        <span>{{ $category->title }}</span>
                    @empty
                        <span text-danger>No categories to be dispalyed!</span>
                    @endforelse
                    <span class="bg-light text-dark" onclick="window.location.href = '{{ url('/category') }}'">more...</span>
                </div>
            </div>
        </div>
        <div class="footer-lower text-light">
            <span>© 2023 Capture.it</span>
            <ul class="lisence">
                <li>Terms of Use</li>
                <li>Privacy Policy</li>
                <li>License</li>
                <li>Imprint</li>
            </ul>
            <div class="language text-dark">
                <i class="fa-solid fa-globe"></i>
                <span>English</span>
            </div>
        </div>
        
    </footer>
    @show