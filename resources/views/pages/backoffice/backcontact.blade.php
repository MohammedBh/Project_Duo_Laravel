@extends('layout.backoffice')
@section('content')
    {{-- TABLEAU POUR MODIFIER LE CONTENU DU SITE --}}
    <div class="text-center pb-2">
        <h4 class="py-5">TABLEAU POUR MODIFIER LE CONTENUE STATIQUE DU SITE</h4>
    </div>
    <section>
        <table class="table table-dark table-hover container w-75 table-bordered">
            <thead>
                <tr>
                    <th scope="col">H1</th>
                    <th scope="col">H3</th>
                    <th scope="col">P</th>
                    <th scope="col">NAME</th>
                    <th scope="col">PHONE</th>
                    <th scope="col">FAX</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                @foreach ($contactarticles as $contactarticle)
                    <tr>
                        <th scope="row">{{ $contactarticle->titleContact }}</th>
                        <th scope="row">{{ $contactarticle->titleTouch }}</th>
                        <td>{{ $contactarticle->para1 }}</td>
                        <td>{{ $contactarticle->namePara }}</td>
                        <td>{{ $contactarticle->phoneNumber }}</td>
                        <td>{{ $contactarticle->faxNumber }}</td>
                        <td>{{ $contactarticle->email }}</td>
                        <td>
                            <div class="d-flex mt-1">
                                <div>
                                    <a href="/contactShow/{{ $contactarticle->id }}/edit" class="btn btn-success">Edit</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
