@extends("layout.index")
@section("content")
    @include("partials.Navbar.navbarWelcome")
    @include("partials.Welcome.welcomeDiv")
@endsection
@section('content2')
    @include("partials.Welcome.welcomeCreative")
    @include("partials.Welcome.welcomeService")
    @include("partials.Welcome.welcomeWork")
@endsection
