
<x-layout>
    <h2 class="mb-4">Tabel Data Jurusan</h2><hr>
    <div class="container mt-5">

        @if (session('success'))
            
        @endif

        <!-- Tabel dengan field No, Nama Jurusan, dan Aksi -->
        <div class="table-responsive">
          <table class="table table-striped table-hover ">
            <button type="submit" class="btn btn-primary mb-2"><a href="{{ route('admin/tambah/tambah-jurusan') }}" class="text-light">Tambah</a></button>
            <thead class="table-dark text-center">
              <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($jurusan as $index => $data)
              <tr>
                <td> {{ $index + 1 }} </td>
                <td> {{ $data->nama_jurusan }} </td>
                <td>
                  <a href=""><button class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i>Edit</button></a>
                  <a href="{{ url('admin/jurusan'.$data->id) }}"><button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button></a>
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

  
 