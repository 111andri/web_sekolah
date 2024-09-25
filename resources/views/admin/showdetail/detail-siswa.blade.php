<x-layout>
    <div class="rounded-2 container p-4">
        <div class="card p-5"
            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border: none">
            <header>
                <h2 class="text-center">Detail Siswa</h2>
                <hr>
            </header>

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="mt-5"
                            style="width: 50%; height: 200px; background-color:rgb(80, 179, 224); margin:auto">
                            <p class="text-center"><img
                                    src="{{ asset('storage/image/' . $siswa->foto_siswa) }}">
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-2">
                            <label class="mb-2" for="nama_siswa">
                                <h6 class="fw-bold">Nama Siswa :</h6>
                            </label>
                            <input class="form-control" id="nama_siswa"
                                type="text" value="{{ $siswa->nama_siswa }}"
                                disabled>
                        </div>
                        <div class="mb-2">
                            <label class="mb-2" for="nama_siswa">
                                <h6 class="fw-bold">NISN :</h6>
                            </label>
                            <input class="form-control" id="nama_siswa"
                                type="text" value="{{ $siswa->nisn }}"
                                disabled>
                        </div>
                        <div class="mb-2">
                            <label class="mb-2" for="nama_siswa">
                                <h6 class="fw-bold">Alamat :</h6>
                            </label>
                            <input class="form-control" id="nama_siswa"
                                type="text" value="{{ $siswa->alamat }}"
                                disabled>
                        </div>
                        <div class="mb-2">
                            <label class="mb-2" for="nama_siswa">
                                <h6 class="fw-bold">No Handphone :</h6>
                            </label>
                            <input class="form-control" id="nama_siswa"
                                type="text" value="{{ $siswa->no_hp }}"
                                disabled>
                        </div>
                        <div class="mb-2">
                            <label class="mb-2" for="nama_siswa">
                                <h6 class="fw-bold">Jurusan :</h6>
                            </label>
                            @foreach ($jurusan as $dtjurusan)
                                @if ($siswa->jurusan_id == $dtjurusan->id)
                                    <input class="form-control" id="nama_siswa"
                                        type="text"
                                        value="{{ $dtjurusan->nama_jurusan }}"
                                        disabled>
                                @endif
                            @endforeach
                        </div>
                        <div class="mb-2">
                            <label class="mb-2" for="nama_siswa">
                                <h6 class="fw-bold">Tahun Lulus :</h6>
                            </label>
                            @foreach ($tahunLulus as $index => $thnlulus)
                                @if ($index++ >= 1)
                                    @if ($thnlulus->id == $siswa->tahun_lulus_id)
                                        <input class="form-control"
                                            id="nama_siswa" type="text"
                                            value="{{ $thnlulus->tahun_lulus }} "
                                            disabled>
                                    @endif
                                @elseif ($thnlulus->id == $siswa->tahun_lulus_id)
                                    <input class="form-control" id="nama_siswa"
                                        type="text"
                                        value=" {{ $thnlulus->des_tahun_lulus }}  "
                                        disabled>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
