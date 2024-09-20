<x-layout>
    <h2 class="mb-4">Tabel Data Jurusan</h2><hr>
    <div class="container mt-5">
        <!-- Tabel dengan field No, Nama Jurusan, dan Aksi -->
        <div class="table-responsive">
          <table class="table table-striped table-hover ">
            <button type="submit" class="btn btn-primary mb-2"><a href="" class="text-light">Tambah</a></button>
            <thead class="table-dark text-center">
              <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Jurusan</th>
                <th>NIS</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Agama</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <td> ss </td>
                <td> ss </td>
                <td>  ss</td>
                <td> ss </td>
                <td> ss </td>
                <td> ss</td>
                <td> ss</td>
                <td> ss</td>
                <td>
                  <a href=""><button class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i>Edit</button></a>
                  <a href=""><button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button></a>
                </td>
              </tr>
              <tr>
                <td> ss </td>
                <td> ss </td>
                <td>  ss</td>
                <td> ss </td>
                <td> ss </td>
                <td> ss</td>
                <td> ss</td>
                <td> ss</td>
                <td>
                  <a href=""><button class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i>Edit</button></a>
                  <a href=""><button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button></a>
                </td>
              </tr>
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