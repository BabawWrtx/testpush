<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Biodata {{$mahasiswa->nama}}</title>
</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12">

                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto">Biodata {{$mahasiswa->nama}}</h1>
                    <a href="{{ route('mahasiswas.edit', ['mahasiswa' => $mahasiswa->id]) }}" class="btn btn-primary">Edit</a>
                </div>
                <hr>
                @if(session()->has('pesan'))
                <div class="alert alert-sucess" role="alert">
                    {{ session()->get('pesan')}}
                </div>
                @endif

                <form action="{{ route('mahasiswas.destroy', ['mahasiswa' => $mahasiswa->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger ml-3">Hapus</button>

                </form>

                <ul>
                    <li>NIM: {{$mahasiswa->nim}} </li>
                    <li>Nama: {{$mahasiswa->nama}} </li>
                    <li>Jenis Kelamin:
                        {{$mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'}}
                    </li>
                    <li>Jurusan: {{$mahasiswa->jurusan}} </li>
                    <li>Alamat:
                        {{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}
                    </li>
                </ul>

            </div>
        </div>
    </div>

</body>

</html>