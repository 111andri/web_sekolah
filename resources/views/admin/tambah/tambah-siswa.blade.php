<x-layout>
    <h2 class="text-center ">Tambah Siswa</h2>
    <hr>
    <div class="container mt-5 border p-4" style="width: 75%">

        <form action="{{ route('admin/tambah/store-siswa') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>--Pilih--</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <div class="mb-3 d-flex justify-content-between" style="width: 50%">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenisKelamin"
                            value="laki-laki">
                        <label class="form-check-label" for="jenisKelamin">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenisKelamin"
                            value="perempuan" checked>
                        <label class="form-check-label" for="jenisKelamin">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nisn</label>
                <input type="text" name="nisn" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No Hp</label>
                <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tahun Angkatan</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>--Pilih--</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Agama</label>
                <div class="mb-3 d-flex justify-content-between" style="width: 50%">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="agama" id="flexRadioDefault1"
                            value="islam">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Islam
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="agama" id="flexRadioDefault2"
                            value="kristen" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            kristen
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tahun Lulus</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>--Pilih--</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto Siswa</label>
                <input class="form-control" type="file" id="formFile" name="image">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</x-layout>
