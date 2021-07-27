@extends('layout.backoffice')
@section('content')
    {{-- FORMULAIRE D'AJOUT --}}
    <section>
        @if (session('message'))
            <div class="container w-50 mt-5 alert alert-success">{{ session('message') }}</div>
        @endif
        <h2 class="text-center my-5">Blog Edit</h2>
        <form class="container mt-5 w-50" action="/backoffice/postbackblog" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group mb-5">
                <label class="form-label">Text</label>
                <textarea class="form-control" name="text" rows="3"></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <div class="mb-3 text-center">
                    <select class="form-select" name="img" aria-label="Default select example">
                        <option value="portfolio-1.jpg">Portfolio 1</option>
                        <option value="portfolio-2.jpg">Portfolio 2</option>
                        <option value="portfolio-3.jpg">Portfolio 3</option>
                        <option value="portfolio-4.jpg">Portfolio 4</option>
                        <option value="portfolio-5.jpg">Portfolio 5</option>
                        <option value="portfolio-6.jpg">Portfolio 6</option>
                        <option value="portfolio-7.jpg">Portfolio 7</option>
                        <option value="portfolio-8.jpg">Portfolio 8</option>
                        <option value="portfolio-9.jpg">Portfolio 9</option>
                        <option value="portfolio-10.jpg">Portfolio 10</option>
                    </select>
                    <label class="form-label mt-1">Select Image</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary px-3 text-white">Submit</button>
                </div>
            </div>
        </form>
    </section>
    <hr style="margin: 50px 30vh;">
    {{-- TABLEAU QUI REPRESENTE LES DONNÉES ENTRÉES --}}
    <section>
        <table class="table table-dark table-hover container w-75 table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Text</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($backblogs as $backblog)
                    <tr>
                        <th scope="row">{{ $backblog->id }}</th>
                        <td>{{ $backblog->title }}</td>
                        <td>{{ $backblog->text }}</td>
                        <td><img style="height: 50px" src="{{ asset('img/' . $backblog->img) }}" alt=""></td>
                        <td>
                            <div class="d-flex mt-1">
                                <div>
                                    <a href="/backblog/{{ $backblog->id }}/show" class="btn btn-outline-primary">Show</a>
                                </div>
                                <div class="ms-3">
                                    <form action="/backblog/{{ $backblog->id }}/delete" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    {{-- TABLEAU POUR MODIFIER LE CONTENU DU SITE --}}
    <div class="text-center pb-2">
        <h4>TABLEAU POUR MODIFIER LE CONTENUE STATIQUE DU SITE</h4>
    </div>
    <section>
        <table class="table table-dark table-hover container w-75 table-bordered">
            <thead>
                <tr>
                    <th scope="col">H1</th>
                    <th scope="col">P</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogarticles as $blogarticle)                
                    <tr>
                        <th scope="row">{{ $blogarticle->titleBlog }}</th>
                        <td>{{ $blogarticle->para1 }}</td>
                        <td>
                            <div class="d-flex mt-1">
                                <div>
                                    <a href="/blogShow/{{ $blogarticle->id }}/edit" class="btn btn-success">Edit</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
