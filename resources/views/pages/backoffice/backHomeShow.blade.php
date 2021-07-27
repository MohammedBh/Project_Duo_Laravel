@extends("layout.backoffice")
@section("content")
<div>
    <div class="service text-center">
        <div class="service-icon">
            <i class="{{ $show->icon }}" aria-hidden="true"></i>
        </div>
        <div class="service-content">
            <h4 class="service-title">{{ $show->title }}</h4>
            <p>{{ $show->text }}</p>
        </div>
    </div>
</div>
<form action="/backhome/{{$show->id}}/update" method="POST" class="container w-50">
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
        <label for="exampleFormControlInput1" class="form-label">Select Icon</label>
        <div class="mb-3 text-center">
            <select class="form-select" name="icon" aria-label="Default select example">
                <option value="fa fa-laptop">Computer</option>
                <option value="fa fa-wrench">Wrench</option>
                <option value="fa fa-arrows-alt">Arrows</option>
                <option value="fa fa-cogs">Cogs</option>
            </select>
        </div>
    </div>
    <button class="btn btn-outline-success" type="submit">Edit</button>
</form>
@endsection