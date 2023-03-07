<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form class="form-horizontal" action="{{ route('film.update', $film->id_film) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="card-body">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <div class="form-group row">
                <label for="judul_film" class="col-sm-6 col-form-label">judul film</label>
                <div class="col-sm-10"></div>
                <input type="text" name="judul_film" value={{ $film->judul_film }} class="form-control"
                    id="Inputjudul" placeholder="">{{ $film->judul_film }}
            </div>

            <div class="form-group row">
                <label for="Inputdeskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                <div class="col-sm-10"></div>
                <input type="text" name="deskripsi" value={{ $film->deskripsi }} class="form-control"
                    id="Inputdeskripsi" placeholder="" required>
            </div>



            <div class="card-footer">
            </div>
            <td>
            </td>
    </form>
</body>

</html>
