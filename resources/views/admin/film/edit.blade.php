@extends('admin.adminpage')
@section('title')
UpdateFilm
@endsection
@section('header')

@endsection
@section('content')
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-5">
            </center>
            <h1>Update</h1>
                </form>
                <form action="{{ route('film.update',$film->id_film) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('admin.index') }}" class="btn btn-danger">Cancel</a>
                        <div class="form-group row">
                            <label for="judul_film" class="col-sm-6 col-form-label">Judul Film</label>
                            <div class="col-sm-10"></div>
                            <input type="text" name="judul_film" class="form-control" id="judul_film" value={{ $film->judul_film }} placeholder=""
                                required>
                        </div>
                            </div>
                        <div class="form-group row">
                            <label for="Inputdeskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                            <div class="col-sm-10"></div>
                            <input type="text" name="deskripsi" class="form-control" id="Inputdeskripsi" value={{ $film->deskripsi }} placeholder=""
                                required>
                        </div>
                        <div class="form-group row">
                            <label for="Inputdurasi" class="col-sm-2 col-form-label">durasi</label>
                            <div class="col-sm-10"></div>
                            <input type="text" name="durasi" class="form-control" id="Inputdurasi" value={{ $film->durasi }}placeholder=""
                                required>
                        </div>
                        <div class="form-group row">
                            <label for="Inputtrailer" class="col-sm-2 col-form-label">trailer</label>
                            <div class="col-sm-10"></div>
                            <input type="text" name="trailer" class="form-control" id="Inputtrailer" value={{ $film->trailer }} placeholder=""
                                required>
                        </div>
                        <div class="form-group">
                            <label for="gambar">gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <label class="custom-file-label form-control" for="gambar">Choose file</label>
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
        <form>
</body>
@endsection
