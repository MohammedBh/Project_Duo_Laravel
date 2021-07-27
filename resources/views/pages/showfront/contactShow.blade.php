@extends("layout.backoffice")
@section('content')
    <h1 class="text-center py-5">FORMULAIRE</h1>
    <form action="/contactShow/{{ $editt->id }}/update" method="POST" class="container w-50">
        @csrf
        @method('PUT')
        <div class="border border-5 p-5">
            <div class="mb-3">
                <input type="text" class="form-control" name="titleContact" value="{{ $editt->titleContact }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="titleTouch" value="{{ $editt->titleTouch }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="para1" value="{{ $editt->para1 }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="namePara" value="{{ $editt->namePara }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="phoneNumber" value="{{ $editt->phoneNumber }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="faxNumber" value="{{ $editt->faxNumber }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="email" value="{{ $editt->email }}"
                    id="exampleFormControlInput1">
            </div>
            <button class="btn btn-outline-success" type="submit">Edit</button>
        </div>
    </form>
@endsection
