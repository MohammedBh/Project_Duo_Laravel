<nav class="navbar navbar-expand navbar-dark bg-dark d-flex justify-content-evenly">
    <a class="navbar-brand" href="{{route('backoffice')}}">Back Office Admin</a>
    <ul class="navbar-nav">
        <li class="nav-item mx-2 fs-5"><a class="nav-link" href="{{route('backhome')}}">Home</a></li>
        <li class="nav-item mx-2 fs-5"><a class="nav-link" href="{{route('backblog')}}">Blog</a></li>
        <li class="nav-item mx-2 fs-5"><a class="nav-link" href="{{route('backportfolio')}}">Portfolio</a></li>
        <li class="nav-item mx-2 fs-5"><a class="nav-link" href="{{route('backcontact')}}">Contact</a></li>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item mx-2 fs-5"><a class="nav-link" style="color: rgb(182, 69, 69)" href="{{route('welcome')}}">Exit</a></li>
    </ul>
</nav>
