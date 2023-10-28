<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Form Pendaftaran {{ $program }} Mahasiswa Merdeka FISIP UNIGA
        </h2>
    </x-slot>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <form id="myForm" action="/testpost" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="program" name="program" value="{{ $program }}">
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h5 class="text-xl font-medium flex justify-center text-gray-900 dark:text-white">Data Pribadi
                        </h5>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="data_pribadi[nama_lengkap]" id="nama_lengkap"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{ Auth()->user()->name }}" required />
                            <label for="nama_lengkap"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                                Lengkap</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="data_pribadi[tempat_lahir]" id="tempat_lahir"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="tempat_lahir"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tempat
                                Lahir</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="date" name="data_pribadi[tanggal_lahir]" id="tanggal_lahir"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="tanggal_lahir"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal
                                lahir</label>
                        </div>


                        <label for="jenis_kelamin" class="block text-sm font-medium text-gray-900 dark:text-white">Jenis
                            kelamin</label>
                        <select id="jenis_kelamin" name ="data_pribadi[jenis_kelamin]" required
                            class="bg-gray-50 mb-6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Laki - laki </option>
                            <option>Perempuan</option>
                        </select>
                        <div class="grid md:grid-cols-2 md:gap-6">

                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="data_pribadi[provinsi]" id="provinsi"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="provinsi"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">provinsi</label>
                            </div>

                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="data_pribadi[kabupaten]" id="kabupaten"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="kabupaten"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">kabupaten</label>
                            </div>


                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="data_pribadi[kecamatan]" id="kecamatan"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="kecamatan"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">kecamatan</label>
                            </div>


                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="data_pribadi[desa]" id="desa"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="desa"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">desa</label>
                            </div>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="data_pribadi[alamat]" id="alamat"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="alamat"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">alamat</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="data_pribadi[agama]" id="agama"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="agama"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">agama</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="data_pribadi[status_perkawinan]" id="status_perkawinan"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="status_perkawinan"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">status_perkawinan</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="data_pribadi[golongan_darah]" id="golongan_darah"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="golongan_darah"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">golongan_darah</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="data_pribadi[pekerjaan]" id="pekerjaan"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="pekerjaan"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">pekerjaan</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="data_pribadi[kewarganegaraan]" id="kewarganegaraan"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="kewarganegaraan"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">kewarganegaraan</label>
                        </div>



                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" name="data_pribadi[nik]" id="nik"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
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
                            <input type="number" name="data_akademik[nim]" id="nim"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{ Auth()->user()->nimhs }}" required />
                            <label for="nim"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NIM
                                (Nomor Induk Mahasiswa)</label>
                        </div>

                        <label for="program_studi"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Program studi</label>
                        <select id="program_studi" name="data_akademik[program_studi]"
                            class="bg-gray-50 mb-6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Ilmu Administrasi Negara</option>

                        </select>
                        <label for="jenjang_program_studi"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Jenjang program
                            studi</label>
                        <select id="jenjang_program_studi" name="data_akademik[jenjang_program_studi]"
                            class="bg-gray-50 mb-6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>S1</option>
                            <option>S2</option>
                        </select>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" name="data_akademik[semester]" id="semester"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="semester"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">semester</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" step="0.01" name="data_akademik[ipk]" id="ipk"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="ipk"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">IPK</label>
                        </div>


                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="ipk_upload">Scan IPK </label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="ipk_upload" name="data_akademik[ipk_upload_upload]" id="ipk_upload"
                            type="file" accept="image/jpeg,image/png,application/pdf">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="ipk_upload">
                            Scan IPK </div>



                        <label class="block mb-2 mt-6 text-sm font-medium text-gray-900 dark:text-white"
                            for="transkrip_nilai">Transkrip nilai (wajib)</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="transkrip_nilai" name="data_akademik[transkrip_nilai_upload]"
                            id="transkrip_nilai" type="file" accept="image/jpeg,image/png,application/pdf"
                            required>
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="transkrip_nilai">
                            transkrip nilai </div>





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
                            <input type="number" name="data_kontak[telepon]" id="telepon"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="telepon"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">telepon</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="email" name="data_kontak[email]" id="email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{ Auth()->user()->email }}" required />
                            <label for="email"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">email</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="data_kontak[email_cadangan]" id="email_cadangan"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="email_cadangan"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">email_cadangan</label>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-6">


                            <div class="relative z-0 w-full mb-6 group">
                                <input type="number" name="data_kontak[whatsapp]" id="whatsapp"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="whatsapp"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">whatsapp</label>
                            </div>

                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="data_kontak[instagram]" id="instagram"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
                                <label for="instagram"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">instagram</label>
                            </div>



                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="data_kontak[facebook]" id="facebook"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
                                <label for="facebook"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">facebook</label>
                            </div>


                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="data_kontak[telegram]" id="telegram"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
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
                        <h5 class="text-xl font-medium flex justify-center text-gray-900 dark:text-white">Preferensi
                            tempat pilihan selain provinsi domisili
                        </h5>


                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="data_preferensi[provinsi] " id="provinsi"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="provinsi"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Provinsi
                            </label>
                        </div>


                        <label for="bersedia" class="block text-sm font-medium text-gray-900 dark:text-white">apakah
                            anda bersedia ditempatkan di luar provinsi tersebut ?</label>
                        <select id="bersedia" name ="data_preferensi[bersedia]" required
                            class="bg-gray-50 mb-6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled>pilih</option>
                            <option>Ya</option>
                            <option>Tidak</option>
                        </select>
                    
                    </div>
                </div>
            </div>
        </div>




        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h5 class="text-xl font-medium flex justify-center text-gray-900 dark:text-white">Data Asuransi
                            kesehatan
                        </h5>


                        <label for="asuransi" class="block text-sm font-medium text-gray-900 dark:text-white">Memiliki
                            asuransi kesehatan ?</label>
                        <select id="asuransi" name ="data_asuransi[punya_asuransi]" required
                            class="bg-gray-50 mb-6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled>pilih</option>
                            <option>Ya</option>
                            <option>Tidak</option>

                        </select>
                        <div id="asuransi-input" style="display: none;">

                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="data_asuransi[jenis]" id="asuransi_input_input"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" "  />
                                <label for="asuransi_input_input"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    jenis asuransi
                                </label>
                            </div>

                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="data_asuransi[nama]" id="asuransi_input_input2"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" "  />
                                <label for="asuransi_input_input2"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    nama asuransi
                                </label>
                            </div>

                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="data_asuransi[pembayaran]" id="asuransi_input_input3"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" "  />
                                <label for="asuransi_input_input3"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    jenis pembayaran asuransi
                                </label>
                            </div>

                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="data_asuransi[asuransi_upload]"
                                    id="asuransi_input_input4"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" "  />
                                <label for="asuransi_input_input4"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    upload scan kartu kepemilikan asuransi
                                </label>
                            </div>

                            <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                                for="sertifikat_vaksin">upload scan kartu kepemilikan asuransi</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="sertifikat_vaksin" name="data_asuransi[asuransi_upload]"
                                id="asuransi_input_input4" type="file"
                                accept="image/jpeg,image/png,application/pdf">
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="sertifikat_vaksin">
                                upload scan kartu kepemilikan asuransi</div>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h5 class="text-xl font-medium flex justify-center text-gray-900 dark:text-white">Data kontak
                            darurat
                        </h5>


                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="data_kontak_darurat[nama] " id="nama"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="nama"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                nama</label>
                        </div>


                        <label for="hubungan"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Hubungan</label>
                        <select id="hubungan" name ="data_kontak_darurat[hubungan]" required
                            class="bg-gray-50 mb-6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled>pilih</option>
                            <option>Ayah</option>
                            <option>Ibu</option>
                            <option>Kakak</option>
                            <option>Adik</option>
                            <option>Paman</option>
                            <option>Bibi</option>
                            <option>Kakek</option>
                            <option>Nenek</option>
                            <option>Lainnya</option>
                        </select>
                        <div id="lainnya-input" style="display: none;">
                            <input id="lainnya_input_input" type="text" name="data_kontak_darurat[hubungan]"
                                placeholder="masukkan hubungan"
                                class="bg-gray-50 mb-6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>


                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" name="data_kontak_darurat[telepon] " id="telepon"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
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
                            <input type="text" name="data_orangtua[nama] " id="nama"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="nama"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">nama</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="data_orangtua[alamat]" id="alamat"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="alamat"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">alamat</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" name="data_orangtua[telepon]" id="telepon"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
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
                            <input type="text" name="data_sekolah[nama_sekolah] " id="nama_sekolah"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
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
                            for="surat_keterangan_sehat">Surat Keterangan sehat (wajib)</label>
                        <input required
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="surat_keterangan_sehat" name="data_kesehatan[surat_keterangan_sehat]"
                            id="surat_keterangan_sehat" type="file" accept="image/jpeg,image/png,application/pdf">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="surat_keterangan_sehat">
                            surat keterangan sehat dari puskesman atau dokter </div>

                        <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                            for="sertifikat_vaksin">Sertifikat vaksin (opsional)</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="sertifikat_vaksin" name="data_kesehatan[sertifikat_vaksin]"
                            id="sertifikat_vaksin" type="file" accept="image/jpeg,image/png,application/pdf">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="sertifikat_vaksin">
                            sertifikat_vaksin</div>

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
                            for="pengalaman_organisasi">bukti pengalaman berorganisasi (opsional) </label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="pengalaman_organisasi" name="data_pendukung[pengalaman_organisasi]"
                            id="pengalaman_organisasi" type="file" accept="image/jpeg,image/png,application/pdf">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="pengalaman_organisasi">
                            pengalaman_organisasi</div>

                        <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                            for="sertifikat_prestasi">sertifikat_prestasi (opsional) </label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="sertifikat_prestasi" name="data_pendukung[sertifikat_prestasi]"
                            id="sertifikat_prestasi" type="file" accept="image/jpeg,image/png,application/pdf">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="sertifikat_prestasi">
                            sertifikat_prestasi </div>

                        <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                            for="ktp">ktp </label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="ktp" name="data_pendukung[ktp]" id="ktp" type="file"
                            accept="image/jpeg,image/png,application/pdf" required>
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="ktp">
                            Kartu Tanda Penduduk</div>

                        <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                            for="cv">cv (opsional) </label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="cv" name="data_pendukung[cv]" id="cv" type="file"
                            accept="image/jpeg,image/png,application/pdf">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="cv">
                            Curiculum Vitae</div>

                    </div>
                </div>
            </div>
        </div>


        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="relative pt-1">
        <div class="overflow-hidden h-8 mb-4 text-xs flex rounded bg-blue-200">
            <div id="progress" style="width:0%"
                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500">
                <span id="percentage"></span>
            </div>
        </div>
    </div>

{{-- 
    <script>
        $(document).ready(function() {
            $('#myForm').on('submit', function(e) {
                e.preventDefault();
                if (confirm("Data tidak bisa di ubah setelah ini , lanjutkan ? ")) {
                    $.ajax({
                        xhr: function() {
                            var xhr = new window.XMLHttpRequest();
                            xhr.upload.addEventListener("progress", function(evt) {
                                if (evt.lengthComputable) {
                                    var percentComplete = ((evt.loaded / evt.total) *
                                        100);
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
                            window.location.href = '/data-profil';
                        },
                        error: function(data) {
                            window.alert("error");
                            console.log("error");
                            console.log(data);
                        }
                    });
                }
            });
        });
    </script> --}}


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selectElement = document.getElementById('asuransi');
            var asuransiInput = document.getElementById('asuransi-input');
            var asuransiInputInput1 = document.getElementById('asuransi_input_input');
            var asuransiInputInput2 = document.getElementById('asuransi_input_input2');
            var asuransiInputInput3 = document.getElementById('asuransi_input_input3');
            var asuransiInputInput4 = document.getElementById('asuransi_input_input4');

            function updateInputs(value, display) {
                asuransiInputInput1.value = value;
                asuransiInputInput2.value = value;
                asuransiInputInput3.value = value;
                asuransiInputInput4.value = value;
                asuransiInput.style.display = display;
            }

            selectElement.addEventListener('change', function() {
                if (selectElement.value === 'Ya') {
                    updateInputs('', 'block');
                } else {
                    var selectedText = '';
                    updateInputs(selectedText, 'none');
                }
            });
        });
    </script>

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
                    lainnyaInput.style.display = 'none';
                }
            });
        });
    </script>

    <script>
        document.getElementById('transkrip_nilai').addEventListener('change', function(e) {
            var maxSize = 2 * 1024 * 1024; // 2MB
            if (this.files[0].size > maxSize) {
                alert('Ukuran file terlalu besar! Maximum size 2MB.');
                this.value = '';
            }
        });

        document.getElementById('surat_keterangan_sehat').addEventListener('change', function(e) {
            var maxSize = 2 * 1024 * 1024; // 2MB
            if (this.files[0].size > maxSize) {
                alert('Ukuran file terlalu besar! Maximum size 2MB.');
                this.value = '';
            }
        });


        document.getElementById('sertifikat_vaksin').addEventListener('change', function(e) {
            var maxSize = 2 * 1024 * 1024; // 2MB
            if (this.files[0].size > maxSize) {
                alert('Ukuran file terlalu besar! Maximum size 2MB.');
                this.value = '';
            }
        });

        document.getElementById('pengalaman_organisasi').addEventListener('change', function(e) {
            var maxSize = 2 * 1024 * 1024; // 2MB
            if (this.files[0].size > maxSize) {
                alert('Ukuran file terlalu besar! Maximum size 2MB.');
                this.value = '';
            }
        });

        document.getElementById('sertifikat_prestasi').addEventListener('change', function(e) {
            var maxSize = 2 * 1024 * 1024; // 2MB
            if (this.files[0].size > maxSize) {
                alert('Ukuran file terlalu besar! Maximum size 2MB.');
                this.value = '';
            }
        });

        document.getElementById('ktp').addEventListener('change', function(e) {
            var maxSize = 2 * 1024 * 1024; // 2MB
            if (this.files[0].size > maxSize) {
                alert('Ukuran file terlalu besar! Maximum size 2MB.');
                this.value = '';
            }
        });

        document.getElementById('cv').addEventListener('change', function(e) {
            var maxSize = 2 * 1024 * 1024; // 2MB
            if (this.files[0].size > maxSize) {
                alert('Ukuran file terlalu besar! Maximum size 2MB.');
                this.value = '';
            }
        });
    </script>

</x-app-layout>
