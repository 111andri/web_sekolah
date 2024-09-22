<x-layout>
    <h2 class="text-center ">Edit Siswa</h2>
    <hr>
    <div class="container mt-5 border p-4 " style="width: 7  0%; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <form action="{{ url('admin/edit/update-siswa' . $siswa->id) }}" method="post">
            @method('put')
            @csrf

            <div class="mb-3">
                <label for="">Nama Siswa</label>
                <input class="form-control" type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}">
            </div>
            <div class="mb-3">
                <label for="">Jurusan</label>
                <select class="form-select" name="jurusan_id" id="">
                    @foreach ($jurusan as $dtjurusan)
                        <option value="{{ $dtjurusan->id }}"
                            {{ $siswa->jurusan_id == $dtjurusan->id ? 'selected' : '' }}>
                            {{ $dtjurusan->nama_jurusan }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">nisn</label>
                <input class="form-control" type="text" name="nisn" value="{{ $siswa->nisn }}">
            </div>
            <div class="mb-3">
                <label for="">alamat</label>
                <input class="form-control" type="text" name="alamat" value="{{ $siswa->alamat }}">
            </div>
            <div class="mb-3">
                <label for="">no hp</label>
                <input class="form-control" type="text" name="no_hp" value="{{ $siswa->no_hp }}">
            </div>
            <div class="mb-3">
                <label for="">agama</label>
                <select class="form-select" name="agama_id" id="">
                    @foreach ($agama as $dtagama)
                        <option value="{{ $dtagama->id }}" {{ $siswa->agama_id == $dtagama->id ? 'selected' : '' }}>
                            {{ $dtagama->agama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">jenis kelamin</label>
                <select class="form-select" name="jenis_kelamin_id" id="">
                    @foreach ($jenisKelamin as $dtjenisKelamin)
                        <option value="{{ $dtjenisKelamin->id }}"
                            {{ $siswa->jenis_kelamin_id == $dtjenisKelamin->id ? 'selected' : '' }}>
                            {{ $dtjenisKelamin->jenis_kelamin }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">tanggal lahir</label>
                <input class="form-control" type="text" name="tgl_lahir" value="{{ $siswa->tgl_lahir }}">
            </div>
            <div class="mb-3">
                <label for="">Tahun lulus</label>
                <select class="form-select" name="tahun_lulus_id" id="" name="tahun_lulus">
                    <option value="{{ $tahunLuluss->id }}"
                        {{ $siswa->tahun_lulus == $tahunLuluss->id ? 'selected' : '' }}>
                        {{ $tahunLuluss->des_tahun_lulus }}</option>
                    @foreach ($tahunLulus as $index => $dthnlulus)
                        @if ($index++ >= 1)
                            <option value="{{ $dthnlulus->id }}"
                                {{ $siswa->tahun_lulus == $dthnlulus->id ? 'selected' : '' }}>
                                {{ $dthnlulus->tahun_lulus }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">

                <label for="">Angkatan</label>
                <select class="form-select" name="angkatan_id" id="">
                    @foreach ($angkatan as $dtangkatan)
                        <option value="{{ $dtangkatan->id }}"
                            {{ $siswa->angkatan_id == $dtangkatan->id ? 'selected' : '' }}>
                            {{ $dtangkatan->tahun_angkatan }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">

                <label for="">foto siswa</label>
                <input class="form-control" type="file" name="foto_siswa">
                <img src="{{ asset('/storage/storage/image/' . $siswa->foto_siswa) }}" alt="foto siswa" width="100px"
                    height="100px">
            </div>

            <button type="submit">Edit</button>

        </form>
    </div>
</x-layout>
