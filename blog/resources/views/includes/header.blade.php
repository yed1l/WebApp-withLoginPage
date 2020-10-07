<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
    <a class="  my-0 mr-md-auto text-white font-weight-normal" href="/">MyCompany</a>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="/">Home</a>
        <a class="p-2 text-white" href="/about">About</a>
        <a class="p-2 text-white" href="/contact">Reviews</a>

    </nav>

    @guest()
    <a class="btn btn-outline-primary" href="/login">Sign up</a>
    @endguest
    @auth
    <a class="ml-2 btn btn-outline-primary" href="/logout">Logout</a>
        @endauth
</div>
