<div class="sidebar">
    <h3 class="text-center text-white mb-4">Admin Panel</h3>
    <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}"><i class="bi bi-house-door"></i> Dashboard</a>
    <a href="{{ route('admin.guru') }}" class="{{ request()->is('admin/guru') ? 'active' : '' }}"><i class="bi bi-person-badge"></i> Data Guru</a>
    <a href="{{ route('admin.siswa') }}" class="{{ request()->is('admin/siswa') ? 'active' : '' }}"><i class="bi bi-person"></i> Data Siswa</a>
    <a href="{{ route('admin.jurusan') }}" class="{{ request()->is('admin/jurusan') ? 'active' : '' }}"><i class="bi bi-person"></i> Data Jurusan</a>
    <a href="{{ route('admin.informasi') }}" class="{{ request()->is('admin/informasi') ? 'active' : '' }}"><i class="bi bi-info-circle"></i> Informasi</a>
  </div>
