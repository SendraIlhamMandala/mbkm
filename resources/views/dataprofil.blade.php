<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Data Profil {{$user->name}}
        </h2>
    </x-slot>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                        <div>
                            Halo {{$user->name}}
                        </div>
                        Anda telah mendaftar 
                        
                        @foreach ($user->datadaftars->pluck('program') as $program )
                            {{$program}}
                        @endforeach

                    </div>
                    </div>
                    </div>
                </div>
    
    <form>
        
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h5 class="text-xl font-medium flex justify-center text-gray-900 dark:text-white">Data Pribadi
                        </h5>
                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="text" name="data_pribadi[nama_lengkap]" id="nama_lengkap"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$datapribadi->nama_lengkap}}" required />
                            <label for="nama_lengkap"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                                Lengkap</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="text" name="data_pribadi[tempat_lahir]" id="tempat_lahir"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$datapribadi->tempat_lahir}}" required />
                            <label for="tempat_lahir"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tempat
                                Lahir</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="date" name="data_pribadi[tanggal_lahir]" id="tanggal_lahir"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$datapribadi->tanggal_lahir}}" required />
                            <label for="tanggal_lahir"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal
                                lahir</label>
                        </div>


                        <label for="jenis_kelamin" class="block text-sm font-medium text-gray-900 dark:text-white">Jenis
                            kelamin</label>
                        <select disabled id="jenis_kelamin" name ="data_pribadi[jenis_kelamin]"
                            class="bg-gray-50 mb-6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option @if ($datapribadi->jenis_kelamin=='Laki - laki')
                                selected
                            @else
                                
                            @endif >Laki - laki </option>
                            <option  @if ($datapribadi->jenis_kelamin=='Perempuan')
                                selected
                            @else
                                
                            @endif  >Perempuan</option>
                        </select>
                        <div class="grid md:grid-cols-2 md:gap-6">

                            <div class="relative z-0 w-full mb-6 group">
                                <input disabled type="text" name="data_pribadi[provinsi]" id="provinsi"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " value="{{$datapribadi->provinsi}}" required />
                                <label for="provinsi"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">provinsi</label>
                            </div>

                            <div class="relative z-0 w-full mb-6 group">
                                <input disabled type="text" name="data_pribadi[kabupaten]" id="kabupaten"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " value="{{$datapribadi->kabupaten}}" required />
                                <label for="kabupaten"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">kabupaten</label>
                            </div>


                            <div class="relative z-0 w-full mb-6 group">
                                <input disabled type="text" name="data_pribadi[kecamatan]" id="kecamatan"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " value="{{$datapribadi->kecamatan}}" required />
                                <label for="kecamatan"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">kecamatan</label>
                            </div>


                            <div class="relative z-0 w-full mb-6 group">
                                <input disabled type="text" name="data_pribadi[desa]" id="desa"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " value="{{$datapribadi->desa}}" required />
                                <label for="desa"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">desa</label>
                            </div>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="text" name="data_pribadi[alamat]" id="alamat"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$datapribadi->alamat}}" required />
                            <label for="alamat"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">alamat</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="text" name="data_pribadi[agama]" id="agama"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$datapribadi->agama}}" required />
                            <label for="agama"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">agama</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="text" name="data_pribadi[status_perkawinan]" id="status_perkawinan"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$datapribadi->status_perkawinan}}" required />
                            <label for="status_perkawinan"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">status_perkawinan</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="number" name="data_pribadi[nik]" id="nik"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$datapribadi->nik}}" required />
                            <label for="nik"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">nik</label>
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h5 class="text-xl font-medium flex justify-center text-gray-900 dark:text-white">Data Akademik
                        </h5>

                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="number" name="data_akademik[nim]" id="nim"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$akademik->nim}}" required />
                            <label for="nim"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NIM
                                (Nomor Induk Mahasiswa)</label>
                        </div>

                        <label for="program_studi"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Program studi</label>
                        <select disabled id="program_studi" name="data_akademik[program_studi]"
                            class="bg-gray-50 mb-6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Ilmu Administrasi Negara</option>

                        </select>
                        <label for="jenjang_program_studi"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Jenjang program
                            studi</label>
                        <select disabled id="jenjang_program_studi" name="data_akademik[jenjang_program_studi]"
                            class="bg-gray-50 mb-6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>S1</option>
                            <option>S2</option>
                        </select>

                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="number" name="data_akademik[semester]" id="semester"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$akademik->semester}}" required />
                            <label for="semester"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">semester</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="number" step="0.01" name="data_akademik[ipk]" id="ipk"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$akademik->ipk}}" required />
                            <label for="ipk"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">IPK</label>
                        </div>


                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="transkrip_nilai">Transkrip nilai</label>
                       
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="transkrip_nilai">
                        
                            <a href="/storage/transkrip/{{$akademik->transkrip_nilai_upload}}">
                                {{$akademik->transkrip_nilai_upload}}
                            </a>
                        </div>





                    </div>
                </div>
            </div>
        </div>

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h5 class="text-xl font-medium flex justify-center text-gray-900 dark:text-white">Data Kontak
                        </h5>


                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="number" name="data_kontak[telepon]" id="telepon"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$kontak->telepon}}" required />
                            <label for="telepon"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">telepon</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="email" name="data_kontak[email]" id="email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$kontak->email}}" required />
                            <label for="email"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">email</label>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-6">


                            <div class="relative z-0 w-full mb-6 group">
                                <input disabled type="number" name="data_kontak[whatsapp]" id="whatsapp"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " value="{{$kontak->whatsapp}}" required />
                                <label for="whatsapp"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">whatsapp</label>
                            </div>

                            <div class="relative z-0 w-full mb-6 group">
                                <input disabled type="text" name="data_kontak[instagram]" id="instagram"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " value="{{$kontak->instagram}}" required />
                                <label for="instagram"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">instagram</label>
                            </div>



                            <div class="relative z-0 w-full mb-6 group">
                                <input disabled type="text" name="data_kontak[facebook]" id="facebook"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " value="{{$kontak->facebook}}" required />
                                <label for="facebook"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">facebook</label>
                            </div>


                            <div class="relative z-0 w-full mb-6 group">
                                <input disabled type="text" name="data_kontak[telegram]" id="telegram"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " value="{{$kontak->telegram}}" required />
                                <label for="telegram"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">telegram</label>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>

        
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h5 class="text-xl font-medium flex justify-center text-gray-900 dark:text-white">Data kontak darurat
                        </h5>


                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="text" name="data_kontak_darurat[nama] " id="nama"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$kontakdarurat->nama}}" required />
                            <label for="nama"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                nama</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="text" name="data_kontak_darurat[hubungan] " id="hubungan"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$kontakdarurat->hubungan}}" required />
                            <label for="hubungan"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                hubungan</label>
                        </div>



                          
                        
                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="number" name="data_kontak_darurat[telepon] " id="telepon"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$kontakdarurat->telepon}}" required />
                            <label for="telepon"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                telepon</label>
                        </div>







                    </div>
                </div>
            </div>
        </div>


        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h5 class="text-xl font-medium flex justify-center text-gray-900 dark:text-white">Data Orangtua
                        </h5>


                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="text" name="data_orangtua[nama] " id="nama"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$orangtua->nama}}" required />
                            <label for="nama"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">nama</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="text" name="data_orangtua[alamat]" id="alamat"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$orangtua->alamat}}" required />
                            <label for="alamat"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">alamat</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="number" name="data_orangtua[telepon]" id="telepon"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$orangtua->telepon}}" required />
                            <label for="telepon"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">telepon</label>
                        </div>






                    </div>
                </div>
            </div>
        </div>

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h5 class="text-xl font-medium flex justify-center text-gray-900 dark:text-white">Data Sekolah
                        </h5>


                        <div class="relative z-0 w-full mb-6 group">
                            <input disabled type="text" name="data_sekolah[nama_sekolah] " id="nama_sekolah"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{$sekolah->nama_sekolah}}" required />
                            <label for="nama_sekolah"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">nama
                                sekolah (SMK / SMA)</label>
                        </div>







                    </div>
                </div>
            </div>
        </div>

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h5 class="text-xl font-medium flex justify-center text-gray-900 dark:text-white">Data
                            Kesehatan
                        </h5>


                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="surat_keterangan_sehat">Surat Keterangan sehat </label>
                       
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="surat_keterangan_sehat">
        
                        
                            <a href="/storage/surat_keterangan_sehat/{{$kesehatan?->surat_keterangan_sehat}}">
                                {{$kesehatan?->surat_keterangan_sehat}}
                            </a>

                        </div>

                        <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                            for="sertifikat_vaksin">Sertifikat vaksin </label>
                        
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="sertifikat_vaksin">
                            
                        
                            <a href="/storage/sertifikat_vaksin/{{$kesehatan?->sertifikat_vaksin}}">
                                {{$kesehatan?->sertifikat_vaksin}}
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h5 class="text-xl font-medium flex justify-center text-gray-900 dark:text-white">Data
                            Pendukung
                        </h5>


                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="pengalaman_organisasi">bukti pengalaman berorganisasi </label>
                        {{-- <input disabled
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="pengalaman_organisasi"
                            name="data_pendukung[pengalaman_organisasi]" id="pengalaman_organisasi"
                            type="file" accept="image/jpeg,image/png,application/pdf" > --}}
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="pengalaman_organisasi">
                            
                        
                            <a href="/storage/pengalaman_organisasi/{{$datapendukung?->pengalaman_organisasi}}">
                                {{$datapendukung?->pengalaman_organisasi}}
                            </a>

                        </div>

                        <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                            for="sertifikat_prestasi">sertifikat_prestasi </label>
                        {{-- <input disabled
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="sertifikat_prestasi" name="data_pendukung[sertifikat_prestasi]"
                            id="sertifikat_prestasi" type="file" accept="image/jpeg,image/png,application/pdf"
                            > --}}
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="sertifikat_prestasi">
                            
                        
                            <a href="/storage/sertifikat_prestasi/{{$datapendukung?->sertifikat_prestasi}}">
                                {{$datapendukung?->sertifikat_prestasi}}
                            </a>

                        </div>

                            <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                            for="ktp">ktp </label>
                        {{-- <input disabled
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="ktp" name="data_pendukung[ktp]"
                            id="ktp" type="file" accept="image/jpeg,image/png,application/pdf"
                            > --}}
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="ktp">
                            
                        
                            <a href="/storage/ktp/{{$datapendukung?->ktp}}">
                                {{$datapendukung?->ktp}}
                            </a>
                        </div>

                            <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                            for="cv">cv </label>
                        {{-- <input disabled
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="cv" name="data_pendukung[cv]"
                            id="cv" type="file" accept="image/jpeg,image/png,application/pdf"
                            > --}}
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="cv">
                        
                            <a href="/storage/cv/{{$datapendukung?->cv}}">
                                {{$datapendukung?->cv}}
                            </a>    
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </form>

    {{-- <script>
        $(document).ready(function() {
            $('#myForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = ((evt.loaded / evt.total) * 100);
                                $('#progress').width(percentComplete + '%');
                                $('#percentage').text(Math.round(percentComplete) +
                                    '%');
                            }
                        }, false);
                        return xhr;
                    },
                    type: 'POST',
                    url: '/testpost',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);
                        window.location.href = '/checkmhs/{{ Auth()->user()->id }}';
                    },
                    error: function(data) {
                        window.alert("error");
                        console.log("error");
                        console.log(data);
                    }
                });
            });
        });
    </script> --}}

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var selectElement = document.getElementById('hubungan');
    var lainnyaInput = document.getElementById('lainnya-input');
    var lainnyaInputInput = document.getElementById('lainnya_input_input');

    selectElement.addEventListener('change', function() {
        if (selectElement.value === 'Lainnya') {
            lainnyaInputInput.value = '';
            lainnyaInput.style.display = 'block';

        } else {
            lainnyaInputInput.value = selectElement.options[selectElement.selectedIndex].text;
;
            lainnyaInput.style.display = 'none';
        }
    });
});

      </script>
</x-app-layout>
