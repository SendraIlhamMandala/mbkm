<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Models\Akademik;
use App\Models\Datadaftar;
use App\Models\Datapendukung;
use App\Models\Datapribadi;
use App\Models\Kesehatan;
use App\Models\Kontak;
use App\Models\Kontakdarurat;
use App\Models\Orangtua;
use App\Models\Sekolah;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  
  if (Setting::first()->status=='open') {
    # code...
    return view('halamanawal');
  }else{
    return redirect('/tutup');
  }
});

Route::get('/tutup', function () {
    return view('tutup');
  
});

Route::get('/dashboard', function () {
  return redirect('/');
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('createusers', [Controller::class, 'createusers'])->name('createusers');

Route::get(
  'test',
  function () {

    $user = User::first();

    $user->orangtua()->create([
      'nama' => 'orangtua test',
      'alamat' => 'alamat orangtua test',
      'telepon' => '08123456789',
    ]);

    dd($user);
  }
);

Route::get('mhs', function () {
  $mahasiswas = User::all();
  return json_encode($mahasiswas);
});

Route::post('testpost', function (Request $request) {
  
  dd($request->all());

  $user = Auth()->user();

  try {
    //code...
 
  $data_pribadi = new Datapribadi($request->data_pribadi);
  $user->datapribadi()->save($data_pribadi);


  $data_akademik = new Akademik($request->data_akademik);

  $transkrip = $data_akademik['transkrip_nilai_upload'];
  $transkrip_name = date('Y-m-d') . $transkrip->getClientOriginalName();
  $transkrip_path = 'transkrip/' . $transkrip_name;
  Storage::disk('public')->put($transkrip_path, file_get_contents($transkrip));
  $data_akademik['transkrip_nilai_upload'] =  $transkrip_name;

  $user->akademik()->save($data_akademik);

  $data_kontak = new Kontak($request->data_kontak);

  $user->kontak()->save($data_kontak);

  $data_orangtua = new Orangtua($request->data_orangtua);
  $user->orangtua()->save($data_orangtua);

  $data_sekolah = new Sekolah($request->data_sekolah);
  $user->sekolah()->save($data_sekolah);

  if (isset($request->data_kesehatan['surat_keterangan_sehat'])||isset($request->data_kesehatan['sertifikat_vaksin'])){
  $data_kesehatan = new Kesehatan($request->data_kesehatan);}

  if (isset($request->data_kesehatan['surat_keterangan_sehat'])){
  $surat_keterangan_sehat = $data_kesehatan['surat_keterangan_sehat'];
  
  $surat_keterangan_sehat_name = date('Y-m-d') . $surat_keterangan_sehat->getClientOriginalName();
  $surat_keterangan_sehat_path = 'surat_keterangan_sehat/' . $surat_keterangan_sehat_name;
  Storage::disk('public')->put($surat_keterangan_sehat_path, file_get_contents($surat_keterangan_sehat));
  $data_kesehatan['surat_keterangan_sehat'] =  $surat_keterangan_sehat_name;
  $user->kesehatan()->save($data_kesehatan);
  
}
  if (isset($request->data_kesehatan['sertifikat_vaksin'])){

  $sertifikat_vaksin = $data_kesehatan['sertifikat_vaksin'];
  
  $sertifikat_vaksin_name = date('Y-m-d') . $sertifikat_vaksin->getClientOriginalName();
  $sertifikat_vaksin_path = 'sertifikat_vaksin/' . $sertifikat_vaksin_name;
  Storage::disk('public')->put($sertifikat_vaksin_path, file_get_contents($sertifikat_vaksin));
  $data_kesehatan['sertifikat_vaksin'] =  $sertifikat_vaksin_name;

  $user->kesehatan()->save($data_kesehatan);
  }


  // dd($data_kesehatan,$surat_keterangan_sehat_name,$data_kesehatan2,$sertifikat_vaksin_name);
  $data_kontak_darurat = new Kontakdarurat($request->data_kontak_darurat);
  $user->kontakdarurat()->save($data_kontak_darurat);

  if(isset($request->data_pendukung['sertifikat_prestasi'])||
  isset($request->data_pendukung['ktp'])||
  isset($request->data_pendukung['pengalaman_organisasi'])||
  isset($request->data_pendukung['cv'])){
  $data_pendukung = new Datapendukung($request->data_pendukung);
  }
  
  if(isset($request->data_pendukung['sertifikat_prestasi'])){

  $sertifikat_prestasi = $data_pendukung['sertifikat_prestasi'];
  $sertifikat_prestasi_name = date('Y-m-d') . $sertifikat_prestasi->getClientOriginalName();
  $sertifikat_prestasi_path = 'sertifikat_prestasi/' . $sertifikat_prestasi_name;
  Storage::disk('public')->put($sertifikat_prestasi_path, file_get_contents($sertifikat_prestasi));
  $data_pendukung['sertifikat_prestasi'] =  $sertifikat_prestasi_name;
  $user->datapendukung()->save($data_pendukung);

}
  if(isset($request->data_pendukung['ktp'])){
  
  $ktp = $data_pendukung['ktp'];
  $ktp_name = date('Y-m-d') . $ktp->getClientOriginalName();
  $ktp_path = 'ktp/' . $ktp_name;
  Storage::disk('public')->put($ktp_path, file_get_contents($ktp));
  $data_pendukung['ktp'] =  $ktp_name;
  $user->datapendukung()->save($data_pendukung);

}
  if(isset($request->data_pendukung['pengalaman_organisasi'])){
  
  $pengalaman_organisasi = $data_pendukung['pengalaman_organisasi'];
  $pengalaman_organisasi_name = date('Y-m-d') . $pengalaman_organisasi->getClientOriginalName();
  $pengalaman_organisasi_path = 'pengalaman_organisasi/' . $pengalaman_organisasi_name;
  Storage::disk('public')->put($pengalaman_organisasi_path, file_get_contents($pengalaman_organisasi));
  $data_pendukung['pengalaman_organisasi'] =  $pengalaman_organisasi_name;
  $user->datapendukung()->save($data_pendukung);
  
}
  if(isset($request->data_pendukung['cv'])){
  
  $cv = $data_pendukung['cv'];
  $cv_name = date('Y-m-d') . $cv->getClientOriginalName();
  $cv_path = 'cv/' . $cv_name;
  Storage::disk('public')->put($cv_path, file_get_contents($cv));
  $data_pendukung['cv'] =  $cv_name;
  $user->datapendukung()->save($data_pendukung);
  }
  

  $program = new Datadaftar(['program' => $request->program]);  
  $program->user()->associate($user);
  $program->save();
} catch (\Throwable $th) {
  //throw $th;
  return json_encode([
    'error' => $th->getMessage()
  ]);
}
  //return success json 
  return json_encode([
    'success' => true
  ]);
})->middleware(['auth'])->name('testpost');


Route::get('checkmhs/{id}', function (User $id) {
  dd(
    $id,
    $id->datapribadi,
    $id->akademik,
    $id->kontak,
    $id->orangtua,
    $id->sekolah


  );
});

Route::get('link', function () {
    Artisan::call('storage:link');
    return 'linked';}
);

Route::get('halamanawal', function () {
  return view('halamanawal');
}
);

Route::get('daftar/{program}', function ($program) {
  // dd(Auth()->user()->datadaftar->all()->pluck('program'));
  

  // if (Auth()->user()->datadaftars?->program==null) {
  //   # code...
  //   return view('daftarprogram', compact('program'));

  // }

  $user = Auth()->user();
  $akademik = $user->akademik;
  $datadaftar = $user->datadaftar;
  $datapendukung = $user->datapendukung;
  $datapribadi = $user->datapribadi;
  $kesehatan = $user->kesehatan;
  $kontak = $user->kontak;
  $kontakdarurat = $user->kontakdarurat;
  $orangtua = $user->orangtua;
  $sekolah = $user->sekolah;

  
    foreach (Auth()->user()->datadaftars->pluck('program') as $element) {
        if ($element != $program) {
          return redirect('/data-profil');

          return view('daftarprogram_after',compact('program', 'akademik', 'datadaftar', 'datapendukung', 'datapribadi', 'kesehatan', 'kontak', 'kontakdarurat', 'orangtua', 'sekolah'));
        }elseif($element == $program){
          return redirect('/data-profil');
          
          return redirect()->back();
        }
    }


  
 
    return view('daftarprogram', compact('program'));
  
}
)->middleware(['auth']);

Route::get('data-profil', function () {


  
  $user = Auth()->user();
  
  if( $user->datadaftars->isEmpty()){

  return  redirect('/') ; 
  }  

  

  $akademik = $user->akademik;
  $datadaftar = $user->datadaftar;
  $datapendukung = $user->datapendukung;
  $datapribadi = $user->datapribadi;
  $kesehatan = $user->kesehatan;
  $kontak = $user->kontak;
  $kontakdarurat = $user->kontakdarurat;
  $orangtua = $user->orangtua;
  $sekolah = $user->sekolah;    
  
  return view('dataprofil',compact('user', 'akademik', 'datadaftar', 'datapendukung', 'datapribadi', 'kesehatan', 'kontak', 'kontakdarurat', 'orangtua', 'sekolah'));
})->middleware('auth')->name('dataprofil');



require __DIR__ . '/auth.php';
