<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Angkatan;
use App\Models\JenisKelamin;
use App\Models\Jurusan;
use App\Models\Siswa;
use App\Models\TahunLulus;
// use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Builder\Class_;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataSiswa = Siswa::all();

        // dd($dataSiswa);

        return view('admin.siswa', compact('dataSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenisKelamin = JenisKelamin::all();
        $angkatan = Angkatan::all();
        $jurusan = Jurusan::all();
        $agama = Agama::all();
        $tahunLuluss = TahunLulus::first();
        $tahunLulus = TahunLulus::all();
        // dd($tahunLulus->id);

        return view('admin.tambah.tambah-siswa', compact('jenisKelamin', 'angkatan', 'jurusan', 'agama', 'tahunLuluss', 'tahunLulus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'foto_siswa' => 'required |image|mimes:png,jpg,jpeg',
                'nama_siswa' => 'required',
                'alamat' => 'required',
                'nisn' => 'required',
            ],
            [
                'foto_siswa.required' => 'silahkan upload foto terlebih dahulu',
                'nama_siswa.required' => 'nama tidak boleh kosong',
                'alamat.required' => 'alamat tidak boleh kosong',
                'nisn.required' => 'nisn wajib di isi',
            ],
        );

        $imageName = time() . '.' . $request->foto_siswa->extension();
        $request->foto_siswa->move(storage_path('/image'), $imageName);

        // return back();

        Siswa::create([
            'jurusan_id' => $request->input('jurusan'),
            'angkatan_id' => $request->input('angkatan'),
            'jenis_kelamin_id' => $request->input('jenis_kelamin'),
            'agama_id' => $request->input('agama'),
            'tahun_lulus_id' => $request->input('tahun_lulus'),
            'nama_siswa' => $request->input('nama_siswa'),
            'nisn' => $request->input('nisn'),
            'alamat' => $request->input('alamat'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'no_hp' => $request->input('no_hp'),
            'foto_siswa' => $imageName,
        ]);

        return redirect('admin/siswa')->with('success', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $jurusan = Jurusan::all();
        $angkatan = Angkatan::all();
        $agama = Agama::all();
        $tahunLulus = TahunLulus::all();
        $tahunLuluss = TahunLulus::first();
        $jenisKelamin = JenisKelamin::all();
        return view('admin/edit/edit-siswa', compact('siswa', 'jurusan', 'angkatan', 'agama', 'tahunLulus', 'jenisKelamin', 'tahunLuluss'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::findOrFail($id);

        if ($request->hasFile('foto_siswa')) {
            // upload image baru
            $imageName = time() . '.' . $request->foto_siswa->extension();
            $request->foto_siswa->move(storage_path('/image'), $imageName);

            // hapus foto lama
            Storage::delete('image/' . $siswa->foto_siswa);

            // update siswa dan foto baru
            $siswa->update([
                'jurusan_id' => $request->jurusan_id,
                'ankatan_id' => $request->angkatan_id,
                'jenis_kelamin_id' => $request->jenis_kelamin_id,
                'agama_id' => $request->agama_id,
                'tahun_lulus_id' => $request->tahun_lulus_id,
                'nama_siswa' => $request->nama_siswa,
                'nisn' => $request->nisn,
                'alamat' => $request->alamat,
                'tgl_lahir' => $request->tgl_lahir,
                'no_hp' => $request->no_hp,
                'foto_siswa' => $imageName,
            ]);
        } else {
            $siswa->update([
                'jurusan_id' => $request->jurusan_id,
                'ankatan_id' => $request->angkatan_id,
                'jenis_kelamin_id' => $request->jenis_kelamin_id,
                'agama_id' => $request->agama_id,
                'tahun_lulus_id' => $request->tahun_lulus_id,
                'nama_siswa' => $request->nama_siswa,
                'nisn' => $request->nisn,
                'alamat' => $request->alamat,
                'tgl_lahir' => $request->tgl_lahir,
                'no_hp' => $request->no_hp,
            ]);
        }

        return redirect('admin/siswa')->with('success', 'berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        // delete image

        $siswa->delete();

        return redirect('admin/siswa')->with('success', 'Data berhasil di hapus');
    }
}