@extends("layout.backoffice")
@section('content')
    <h1 class="text-center py-5">FORMULAIRE</h1>
    <form action="/homeShow/{{ $editt->id }}/update" method="POST" class="container w-50">
        @csrf
        @method('PUT')
        <div class="border border-5 p-5">
            <div class="mb-3">
                <input type="text" class="form-control" name="titleHome" value="{{ $editt->titleHome }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="img" value="{{ $editt->img }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="titleCreative" value="{{ $editt->titleCreative }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="para1" value="{{ $editt->para1 }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="ahref1" value="{{ $editt->ahref1 }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="titleBest" value="{{ $editt->titleBest }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="para2" value="{{ $editt->para2 }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="para3" value="{{ $editt->para3 }}"
                    id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="ahref2" value="{{ $editt->ahref2 }}"
                    id="exampleFormControlInput1">
            </div>
            <button class="btn btn-outline-success" type="submit">Edit</button>
        </div>
    </form>
@endsection
