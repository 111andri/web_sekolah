<x-layout>
    <h2 class="mb-4">Tabel Data Jurusan</h2>
    <hr>
    <div class="container-xxl rounded-3 mt-5 p-3"
        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <!-- Tabel dengan field No, Nama Jurusan, dan Aksi -->
        <div class="table-responsive">
            <table class="table-hover active table">
                <button class="btn btn-primary mb-2" type="submit"><a
                        class="text-light"
                        href="{{ route('admin/tambah/tambah-siswa') }}">Tambah</a></button>
                <thead class="table-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Jurusan</th>
                        <th>NISN</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Agama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Foto Siswa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($dataSiswa as $index => $siswa)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td> {{ $siswa->nama_siswa }} </td>
                            <td>
                                @foreach ($siswa->jurusan()->get() as $jurusan)
                                    {{ $jurusan->nama_jurusan }}
                                @endforeach
                            </td>
                            <td> {{ $siswa->nisn }} </td>
                            <td> {{ $siswa->alamat }} </td>
                            <td> {{ $siswa->no_hp }}</td>
                            <td>
                                @foreach ($siswa->agama()->get() as $agama)
                                    {{ $agama->agama }}
                                @endforeach
                            </td>
                            <td>
                                @foreach ($siswa->jenisKelamin()->get() as $jenisKelamin)
                                    {{ $jenisKelamin->jenis_kelamin }}
                                @endforeach
                            </td>
                            <td> {{ $siswa->tgl_lahir }} </td>
                            <td>
                                <img src="{{ asset('storage/image/' . $siswa->foto_siswa) }}"
                                    alt="" width="40px"
                                    height="40px">
                            </td>
                            <td>
                                <a
                                    href="{{ url('admin/showdetail/detail-siswa' . $siswa->id) }}">Show</a>
                                <a
                                    href="{{ url('admin/edit/edit-siswa' . $siswa->id) }}"><button
                                        class="btn btn-sm btn-primary"><i
                                            class="bi bi-pencil"></i></button></a>
                                {{-- <a href="{{ url('admin/siswa' . $siswa->id) }}" ><button class="btn btn-sm btn-danger" id="deleteForm"><i
                                            class="bi bi-trash"></i>
                                        Delete</button></a> --}}

                                <form class="d-inline"
                                    action="{{ url('admin/siswa' . $siswa->id) }}"
                                    method="post"
                                    onsubmit="return confirm('yakin ingin menghapus data')">
                                    @method('delete')
                                    @csrf
                                    {{-- <button class="btn btn-danger">Delete</button> --}}
                                    <button class="btn btn-danger"><i
                                            class="bi bi-trash"></i></button>
                                </form>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('succes'))
        <script>
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('succes') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

</x-layout>
