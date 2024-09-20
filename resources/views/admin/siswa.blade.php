<x-layout>
    <h2 class="mb-4">Tabel Data Jurusan</h2><hr>
    <div class="container mt-5">
        <!-- Tabel dengan field No, Nama Jurusan, dan Aksi -->
        <div class="table-responsive">
          <table class="table table-hover active">
            <button type="submit" class="btn btn-primary mb-2"><a href="{{ route('admin/tambah/tambah-siswa') }}" class="text-light">Tambah</a></button>
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
                  <a href=""><button class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i>Edit</button></a>
                  <a href=""><button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button></a>
                </td>
              </tr>
              
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      {{-- @if (session('success'))
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
          
      @endif --}}
</x-layout>