<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="text-black">
                <a class="nav-link " href="{{route('welcome')}}">Home</a>

            </li>
            <li  class="text-black">
            <a class="nav-link " href="{{route('posts.create')}}">Create</a>

            </li>
        </ul>
    </div>
</nav>