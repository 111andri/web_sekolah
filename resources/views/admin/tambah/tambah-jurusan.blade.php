<x-layout>
    <h2 class="text-center">Tambah Jurusan</h2>
    <div class="container mt-5" style="width: 70%">
        
    <form action="{{ route('admin/tambah/store') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Jurusan</label>
          <input type="text" name="nama_jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</x-layout>