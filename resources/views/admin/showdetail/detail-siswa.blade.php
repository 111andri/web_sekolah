<x-layout>
    <div class="container p-4 rounded-2">
        <div class="card p-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border: none">
            <header>
                <h2 class="text-center">Detail Siswa</h2>
                <hr>
            </header>

            <div class="card-body">
                <div class="row ">
                    <div class="col ">
                        <div class="mt-5 ">
                            <img src="{{ asset('storage/image/' . $siswa->foto_siswa) }}" alt="" height="400px"
                                class="mx-auto d-block rounded-3">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-2">
                            <label class="mb-2" for="nama_siswa">
                                <h6 class="fw-bold">Nama Siswa :</h6>
                            </label>
                            <input class="form-control" type="text" disabled value="{{ $siswa->nama_siswa }}"
                                id="nama_siswa">
                        </div>
                        <div class="mb-2">
                            <label class="mb-2" for="nama_siswa">
                                <h6 class="fw-bold">NISN :</h6>
                            </label>
                            <input class="form-control" type="text" disabled value="{{ $siswa->nisn }}"
                                id="nama_siswa">
                        </div>
                        <div class="mb-2">
                            <label class="mb-2" for="nama_siswa">
                                <h6 class="fw-bold">Alamat :</h6>
                            </label>
                            <input class="form-control" type="text" disabled value="{{ $siswa->alamat }}"
                                id="nama_siswa">
                        </div>
                        <div class="mb-2">
                            <label class="mb-2" for="nama_siswa">
                                <h6 class="fw-bold">No Handphone :</h6>
                            </label>
                            <input class="form-control" type="text" disabled value="{{ $siswa->no_hp }}"
                                id="nama_siswa">
                        </div>
                        <div class="mb-2">
                            <label class="mb-2" for="nama_siswa">
                                <h6 class="fw-bold">Jurusan :</h6>
                            </label>
                            @foreach ($jurusan as $dtjurusan)
                                @if ($siswa->jurusan_id == $dtjurusan->id)
                                    <input class="form-control" type="text" disabled
                                        value="{{ $dtjurusan->nama_jurusan }}" id="nama_siswa">
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
                                        <input class="form-control" type="text" disabled
                                            value="{{ $thnlulus->tahun_lulus }} " id="nama_siswa">
                                    @endif
                                @elseif ($thnlulus->id == $siswa->tahun_lulus_id)
                                    <input class="form-control" type="text" disabled
                                        value=" {{ $thnlulus->des_tahun_lulus }}  " id="nama_siswa">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ url('admin/siswa') }}" style="width: 8%" ><button class="btn btn-sm btn-primary p-1" style="width: 100%"><i class="bi bi-arrow-return-left"></i>Back</button></a>
        </div>
    </div>
</x-layout>
