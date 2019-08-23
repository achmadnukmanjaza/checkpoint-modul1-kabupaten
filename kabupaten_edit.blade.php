@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Ubah Kabupaten</h1>
            <hr>
            @if($errors->any())
                <div class="alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
            @endif

            @foreach($data as $datas)
            <form action="{{ route('kabupaten.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">id:</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ $datas->id }}">
                </div>
                <div class="form-group">
                    <label for="nama">code:</label>
                    <input type="text" class="form-control" id="usr" name="code" value="{{ $datas->code }}">
                </div>
                <div class="form-group">
                    <label for="description">description:</label>
                    <input type="description" class="form-control" id="description" name="description" value="{{ $datas->description }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancle</button>
                </div>
            </form>
            @endforeach
        </div>
    </section>
@endsection