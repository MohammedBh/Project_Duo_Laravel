@extends('layout.backoffice')
@section('content')
    <div>
        <div class="card mx-auto mt-5" style="width: 18rem;">
            <img src="{{ asset('img/' . $show->img) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $show->title }}</h5>
                <p class="card-text">{{ $show->text }}</p>
            </div>
        </div>
    </div>
    <form action="/backblog/{{$show->id}}/update" method="POST" class="container w-50">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre</label>
            <input type="text" class="form-control" name="title" value="{{$show->title}}" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Texte</label>
            <input type="text" class="form-control" name="text" value='{{$show->text}}' id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Select Image</label>
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
            </div>
        </div>
        <button class="btn btn-outline-success" type="submit">Edit</button>
    </form>
    
@endsection