<x-layout>
    <h2 class="text-center">Tambah Siswa</h2>
    <hr>
    <div class="container mt-5 border p-4"
        style="width: 7  0%; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

        <form action="{{ route('admin/tambah/store-siswa') }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">Nama
                    Siswa</label>
                <input class="form-control" id="exampleInputEmail1"
                    name="nama_siswa" type="text"
                    aria-describedby="emailHelp">
                @error('nama_siswa')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label"
                    for="exampleInputEmail1">Jurusan</label>
                <select class="form-select" name="jurusan"
                    aria-label="Default select example">
                    <option>--Pilih--</option>
                    @foreach ($jurusan as $dataJurusan)
                        <option value="{{ $dataJurusan->id }}">
                            {{ $dataJurusan->nama_jurusan }} </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">Jenis
                    Kelamin</label>
                <div class="d-flex justify-content-between mb-3"
                    style="width: 30%">
                    @foreach ($jenisKelamin as $kelamin)
                        <div class="form-check">
                            <input class="form-check-input" id="jenisKelamin"
                                name="jenis_kelamin" type="radio"
                                value="{{ $kelamin->id }}">
                            <label class="form-check-label" for="jenisKelamin">
                                {{ $kelamin->jenis_kelamin }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label"
                    for="exampleInputEmail1">Alamat</label>
                <input class="form-control" id="exampleInputEmail1"
                    name="alamat" type="text" aria-describedby="emailHelp">
                @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">Nisn</label>
                <input class="form-control" id="exampleInputEmail1"
                    name="nisn" type="text" aria-describedby="emailHelp">
                @error('nisn')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">Tanggal
                    Lahir</label>
                <input class="form-control" id="exampleInputEmail1"
                    name="tgl_lahir" type="date"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">No Hp</label>
                <input class="form-control" id="exampleInputEmail1"
                    name="no_hp" type="text" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">Tahun
                    Angkatan</label>
                <select class="form-select" name="angkatan"
                    aria-label="Default select example">
                    <option selected>--Pilih--</option>
                    @foreach ($angkatan as $dataAngkatan)
                        <option value="{{ $dataAngkatan->id }}">
                            {{ $dataAngkatan->tahun_angkatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">Agama</label>
                <div class="d-flex justify-content-between mb-3"
                    style="width: 20%">
                    @foreach ($agama as $dataAgama)
                        <div class="form-check">
                            <input class="form-check-input"
                                id="flexRadioDefault1" name="agama"
                                type="radio" value="{{ $dataAgama->id }}">
                            <label class="form-check-label"
                                for="flexRadioDefault1">
                                {{ $dataAgama->agama }}
                            </label>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">Tahun
                    Lulus</label>
                <select class="form-select" name="tahun_lulus"
                    aria-label="Default select example">
                    <option selected>--Pilih--</option>
                    <option value="{{ $tahunLuluss->id }}">
                        {{ $tahunLuluss->des_tahun_lulus }}</option>
                    @foreach ($tahunLulus as $index => $thnLulus)
                        @if ($index++ >= 1)
                            <option value="{{ $thnLulus->id }}">
                                {{ $thnLulus->tahun_lulus }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="foto_siswa">Foto Siswa:</label>
                <input class="form-control" id="foto_siswa" name="foto_siswa"
                    type="file">
                @error('foto_siswa')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>

</x-layout>
