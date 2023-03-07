<!DOCTYPE html>
<html lang="en">
<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Booking Online</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="shaaa84-rbsaaVBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
</head>
<body>
    <center class="container">
        <h1 class="mt-5">
            Booking Page
        </h1>

        <form class="form-horizontal" action="{{ route('booking.store') }}" method="POST">
            @csrf
        <div class="form-group row">
            <label for="inputid_film" class="d-flex justify-content-center col-form-label">FILM</label><div></div>
            <div class="d-flex justify-content-center">
                <select class="form-control" name="id_film" id="inputid_film" required>
                    <option value="">pilih</option>
                    @foreach ( $film as $item )
                    <option value='{{ $item->id_film }}'>{{ $item->judul_film }}</option>
                </select>
                @endforeach
            </div>
        </div>
        <div class="card-body">
            <div class="form-group row">
                    <label for="InputNama" class="d-flex justify-content-center col-form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="InputNama" placeholder="masukan nama" required>
                </div>
                <div class="form-group row">
                    <label for="Inputalamat" class="d-flex justify-content-center col-form-label">alamat</label>
                    <input type="text" name="alamat" class="form-control" id="Inputalamat" placeholder="masukan alamat"
                        required>
                    </div>

                <div class="form-group row">
                    <label for="inputjam_tayang" class="d-flex justify-content-center col-form-label">jam
                        tayang</label><div></div>
                    <div class="d-flex justify-content-center">
                        <select class="form-control" name="jam_tayang" id="inputjam_tayang" required>
                            <option value="">pilih</option>
                            <option value='13.00'>13.00</option>
                            <option value='16.00'>16.00</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="Inputmassage" class="col-sm-2 col-form-label">massage</label>
                    <div class="col-sm-10"></div>
                    <input type="text" name="massage" class="form-control" id="Inputmassage" placeholder="pesan tambahan?">
                </div>
                <tr>
                    <label for="no_kursi">
                    @if ($a)
                    <input type="radio" value="A1" name="no_kursi" id="no_kursi" disabled>
                    <div>
                        X
                        </div>
                    @else
                    <input type="radio" value="A1" name="no_kursi" id="no_kursi">
                    <div></div><span>A1</span>
                    @endif
                </label>
                <label for="no_kursi">
                    @if ($aa)

                    <input type="radio" value="A2" name="no_kursi" id="no_kursi" disabled><div>
                        X
                        </div>
                    @else
                    <input type="radio" value="A2" name="no_kursi" id="no_kursi">
                    <div></div><span>A2</span>
                    @endif
                </label>
                    <label for="no_kursi">
                    @if ($aaa)
                    <input type="radio" value="A3" name="no_kursi" id="no_kursi" disabled><div>
                        X
                        </div>
                    @else
                    <input type="radio" value="A3" name="no_kursi" id="no_kursi">
                    <div></div><span>A3</span>
                    @endif
                </label>
                    <label for="no_kursi">
                    @if ($aaaa)
                    <input type="radio" value="A4" name="no_kursi" id="no_kursi" disabled><div>
                        X
                        </div>
                    @else
                    <input type="radio" value="A4" name="no_kursi" id="no_kursi">
                    <div></div><span>A4</span>
                    @endif
                </label>
                <label for="no_kursi">
                    @if ($aaaaa)
                    <input type="radio" value="A5" name="no_kursi" id="no_kursi" disabled><div>
                        X
                        </div>
                    @else
                    <input type="radio" value="A5" name="no_kursi" id="no_kursi">
                    <div></div><span>A5</span>
                    @endif
                </label>
                <div></div>
                    <label for="no_kursi">
                     @if ($b)
                    <input type="radio" value="B1" name="no_kursi" id="no_kursi" disabled><div>
                        X
                        </div>
                    @else
                    <input type="radio" value="B1" name="no_kursi" id="no_kursi">
                    <div></div><span>B1</span>
                    @endif
                </label>
                <label for="no_kursi">
                        @if ($bb)
                        <input type="radio" value="B2" name="no_kursi" id="no_kursi" disabled><div>
                            X
                            </div>
                    @else
                    <input type="radio" value="B2" name="no_kursi" id="no_kursi">
                    <div></div><span>B2</span>
                    @endif
                </label>
                    <label for="no_kursi">
                    @if ($bbb)
                    <input type="radio" value="B3" name="no_kursi" id="no_kursi" disabled><div>
                        X
                    </div>
                    @else
                    <input type="radio" value="B3" name="no_kursi" id="no_kursi">
                    <div></div><span>B3</span>
                    @endif
                </label>
                    <label for="no_kursi">
                    @if ($bbbb)
                    <input type="radio" value="B4" name="no_kursi" id="no_kursi" disabled><div>
                        X
                        </div>
                    @else
                    <input type="radio" value="B4" name="no_kursi" id="no_kursi">
                    <div></div><span>B4</span>
                    @endif
                </label>
                    <label for="no_kursi">
                        @if ($bbbbb)
                        <input type="radio" value="B5" name="no_kursi" id="no_kursi" disabled><div>
                            X
                            </div>
                        @else
                        <input type="radio" value="B5" name="no_kursi" id="no_kursi">
                        <div></div><span>B5</span>
                        @endif
                    </label>
                    <div></div>
                    <label for="no_kursi">
                        @if ($c)
                        <input type="radio" value="C1" name="no_kursi" id="no_kursi" disabled><div>
                            X
                            </div>
                        @else
                        <input type="radio" value="C1" name="no_kursi" id="no_kursi">
                        <div></div><span>C1</span>
                        @endif
                    </label>
                    <label for="no_kursi">
                        @if ($cc)
                        <input type="radio" value="C2" name="no_kursi" id="no_kursi" disabled><div>
                            X
                            </div>
                        @else
                        <input type="radio" value="C2" name="no_kursi" id="no_kursi">
                        <div></div><span>C2</span>
                        @endif
                    </label>
                    <label for="no_kursi">
                        @if ($ccc)
                        <input type="radio" value="C3" name="no_kursi" id="no_kursi" disabled><div>
                            X
                            </div>
                        @else
                        <input type="radio" value="C3" name="no_kursi" id="no_kursi">
                        <div></div><span>C3</span>
                        @endif
                    </label>
                    <label for="no_kursi">
                    @if ($cccc)
                    <input type="radio" value="C4" name="no_kursi" id="no_kursi" disabled><div>
                        X
                        </div>
                    @else
                    <input type="radio" value="C4" name="no_kursi" id="no_kursi">
                    <div></div><span>C4</span>
                    @endif
                </label>
                    <label for="no_kursi">
                    @if ($ccccc)
                    <input type="radio" value="C5" name="no_kursi" id="no_kursi" disabled><div>
                        X
                        </div>
                    @else
                    <input type="radio" value="C5" name="no_kursi" id="no_kursi">
                    <div></div><span>C5</span>
                    @endif
                </label>
            <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('film.index') }}" class="btn btn-danger">Cancel</a>
            </div>
                                </form>
                            </center>
<footer>
</footer>
</body>
</html>
