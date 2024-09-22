<x-layout>
    <h2 class="text-center ">Tambah Siswa</h2>
    <hr>
    <div class="container mt-5 border p-4 " style="width: 7  0%; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

        <form action="{{ route('admin/tambah/store-siswa') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                @error('nama_siswa')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                <select class="form-select" aria-label="Default select example" name="jurusan">
                    <option>--Pilih--</option>
                    @foreach ($jurusan as $dataJurusan)
                        <option value="{{ $dataJurusan->id }}"> {{ $dataJurusan->nama_jurusan }} </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <div class="mb-3 d-flex justify-content-between" style="width: 30%">
                    @foreach ($jenisKelamin as $kelamin)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenisKelamin"
                                value="{{ $kelamin->id }}">
                            <label class="form-check-label" for="jenisKelamin">
                                {{ $kelamin->jenis_kelamin }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nisn</label>
                <input type="text" name="nisn" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                @error('nisn')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="tgl_lahir">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No Hp</label>
                <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tahun Angkatan</label>
                <select class="form-select" aria-label="Default select example" name="angkatan">
                    <option selected>--Pilih--</option>
                    @foreach ($angkatan as $dataAngkatan)
                        <option value="{{ $dataAngkatan->id }}">{{ $dataAngkatan->tahun_angkatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Agama</label>
                <div class="mb-3 d-flex justify-content-between" style="width: 20%">
                    @foreach ($agama as $dataAgama)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agama" id="flexRadioDefault1"
                                value="{{ $dataAgama->id }}">
                            <label class="form-check-label" for="flexRadioDefault1">
                                {{ $dataAgama->agama }}
                            </label>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tahun Lulus</label>
                <select class="form-select" aria-label="Default select example" name="tahun_lulus">
                    <option selected>--Pilih--</option>
                    <option value="{{ $tahunLuluss->id }}">{{ $tahunLuluss->des_tahun_lulus }}</option>
                    @foreach ($tahunLulus as $index => $thnLulus)
                        @if ($index++ >= 1)
                            <option value="{{ $thnLulus->id }}">{{ $thnLulus->tahun_lulus }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="foto_siswa">Foto Siswa:</label>
                <input type="file" name="foto_siswa" id="foto_siswa" class="form-control">
                @error('foto_siswa')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</x-layout>
