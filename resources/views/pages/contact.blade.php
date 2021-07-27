@extends("layout.index")
@section("content")
    @include("partials.Navbar.navbarWelcome")
    @include("partials.Contact.contactDiv")
@endsection
@section('content2')
    @include("partials.Contact.contactUS")
@endsection