<form action="{{ url('admin/edit/update-jurusan/'.$jurusan->id)}}" method="post">
    @csrf
    @method('put')
    <label for="">Nama Jurusan</label><br>
    <input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}"><br><br>
    <button type="submit">Update</button>
</form>
