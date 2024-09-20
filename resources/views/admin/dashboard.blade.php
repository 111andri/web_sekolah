<x-layout>
    <h1>Dashboard</h1>
    <div class="row">
      <div class="col-lg-4">
        <div class="card text-bg-primary mb-3">
          <div class="card-body">
            <h5 class="card-title">Total Guru</h5>
            <p class="card-text">120 Guru</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card text-bg-success mb-3">
          <div class="card-body">
            <h5 class="card-title">Total Siswa</h5>
            <p class="card-text">{{ $dataSiswa}}</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card text-bg-warning mb-3">
          <div class="card-body">
            <h5 class="card-title">Pengumuman Baru</h5>
            <p class="card-text">5 Pengumuman</p>
          </div>
        </div>
      </div>
    </div>
    
</x-layout>