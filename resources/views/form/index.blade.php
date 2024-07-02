@extends('layouts-users.header')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection
@section('content')
    <div class="p-xl-5 p-lg-5 p-md-5 p-2 ">
        <div class="border shadow-md rounded p-3 mb-1">
            <h2 class="judul text-center ">Pendaftaran Anggota Iprahumas Indonesia</h2>
            <h2 class="judul text-center ">Periode 2022-2024</h2>
        </div>
        <div class="tab ">
            <div class="p-5  border shadow-md rounded">
                {{-- <h1 class="judul text-center pb-5">Pendaftaran Anggota Iprahumas Indonesia</h1> --}}
                <form id="formReg" action="" method="" class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control text-uppercase"
                                        placeholder="Masukkan Nama Lengkap : THORIQ RAMADANI, S.I.Kom ">
                                </div>
                            </div>
                            <div class="col-12 col-md">
                                <div class="mb-3">
                                    <label for="nip" class="form-label">NIP</label>
                                    <input type="text" name="nip" id="nip" class="form-control uppercase"
                                        placeholder="Masukkan NIP 19900417 201402 1 002 (jangan digabung) ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki">
                            <label class="form-check-label" for="laki-laki">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan">
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control uppercase"
                                    placeholder="Masukkan Tempat Lahir ">
                            </div>
                        </div>
                        <div class="col">

                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control uppercase"
                                    placeholder="Masukkan Nama Lengkap : THORIQ RAMADANI, S.I.Kom ">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama </label>
                        <select class="form-select" name="agama" id="agama" class="form-control uppercase">
                            <option selected disabled disabled>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Kristen Katolik">Kristen Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="instansi" class="form-label">Instansi</label>
                        <input type="text" name="instansi" id="instansi" class="form-control uppercase"
                            placeholder="Instansi Anda bekerja (Kementerian/Lembaga/Pemerintah Daerah)">
                    </div>
                    <div class="mb-3">
                        <label for="unit_kerja" class="form-label">Unit Kerja</label>
                        <input type="text" name="unit_kerja" id="unit_kerja" class="form-control uppercase"
                            placeholder="Tuliskan unit kerja/satuan kerja Anda bekerja">
                    </div>
                    <div class="mb-3">
                        <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir </label>
                        <select class="form-select" name="pendidikan_terakhir" id="pendidikan_terakhir"
                            class="form-control uppercase">
                            <option selected disabled disabled>Pilih Pendidikan</option>
                            <option value="Islam">SMA</option>
                            <option value="Kristen Protestan">D3</option>
                            <option value="Kristen Katolik">D4 / S1</option>
                            <option value="Budha">S2</option>
                            <option value="Hindu">S3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="program_studi" class="form-label">Program Studi</label>
                        <input type="text" name="program_studi" id="program_studi" class="form-control"
                            placeholder="Masukkan Program Studi ">
                    </div>
                    <div class="mb-3">
                        <label for="universitas" class="form-label">Asal Perguruan Tinggi / Universitas</label>
                        <input type="text" name="universitas" id="universitas" class="form-control "
                            placeholder="Masukkan Perguruan Tinggi">
                    </div>
                    <div class="mb-3">
                        <label for="pangkat" class="form-label">Pangkat/Golongan </label>
                        <select class="form-select" name="pangkat" id="pangkat" class="form-control">
                            <option selected disabled>Pilih Pangkat</option>
                            <option value="Pembina Utama/IV.e">Pembina Utama/IV.e</option>
                            <option value="Pembina Utama/IV.d">Pembina Utama/IV.d</option>
                            <option value="Pembina Utama/IV.c">Pembina Utama/IV.c</option>
                            <option value="Pembina Utama/IV.b">Pembina Utama/IV.b</option>
                            <option value="Pembina/IV.a">Pembina/IV.a</option>
                            <option value="Penata Tingkat I/III.d">Penata Tingkat I/III.d</option>
                            <option value="Penata/III.c">Penata/III.c</option>
                            <option value="Penata Muda Tingkat I/III.b">Penata Muda Tingkat I/III.b</option>
                            <option value="Penata Muda/III.a">Penata Muda/III.a</option>
                            <option value="Pengatur Tingkat I/IId">Pengatur Tingkat I/IId</option>
                            <option value="Pengatur/II.c">Pengatur/II.c</option>
                            <option value="Pengatur Muda Tingkat I/II.b">Muda Tingkat I/II.b</option>
                            <option value="Pengatur Muda/II.a">Pengatur Muda/II.a</option>
                            <option value="Juru Tingkat I/I.a">Juru Tingkat I/I.a</option>
                            <option value="Juru/I.c">Juru/I.c</option>
                            <option value="Juru Muda Tingkat I/I.b">Juru Muda Tingkat I/I.b</option>
                            <option value="Juru Muda/I.a">Juru Muda/I.a</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan </label>
                        <select class="form-select" name="jabatan" id="jabatan" class="form-control uppercase">
                            <option selected disabled>Pilih Jabatan</option>
                            <option value="Pranata Humas Ahli Madya">Pranata Humas Ahli Madya</option>
                            <option value="Pranata Humas Ahli Muda">Pranata Humas Ahli Muda</option>
                            <option value="Pranata Humas Ahli Pertama">Pranata Humas Ahli Pertama</option>
                            <option value="Pranata Humas Ahli Penyelia">Pranata Humas Ahli Penyelia</option>
                            <option value="Pranata Humas Pelaksana Lanjutan">Pranata Humas Pelaksana Lanjutan</option>
                            <option value="Pranata Humas Pelaksana">Pranata Humas Pelaksana</option>
                            <option value="Pranata Humas Pelaksana Pemula">Pranata Humas Pelaksana Pemula</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kepakaran" class="form-label">Kepakaran</label>
                        <select class="form-select" name="kepakaran" id="kepakaran" class="form-control uppercase">
                            <option selected disabled>Pilih Kepakaran</option>
                            <option value="Riset Public Relation">Riset Public Relation</option>
                            <option value="Monitoring Media">Monitoring Media</option>
                            <option value="Ajang khusus kehumasan">Ajang khusus kehumasan</option>
                            <option value="Protokoler">Protokoler</option>
                            <option value="Moderator">Moderator</option>
                            <option value="Konferensi pers dan siaran pers">Konferensi pers dan siaran pers</option>
                            <option value="Penanganan krisis">Penanganan krisis</option>
                            <option value="Master of Ceremony (MC)">Master of Ceremony (MC)</option>
                            <option value="Materi ringkasan(Briefing material)">Materi ringkasan(Briefing material)
                            </option>
                            <option value="Manajemen isu dan opini publik">Manajemen isu dan opini publik</option>
                            <option value="Public Speaking">Public Speaking</option>
                            <option value="Publikasi institusi">Publikasi institusi</option>
                            <option value="Juru Bicara">Juru Bicara</option>
                            <option value="Lobby dan negoisasi">Lobby dan negoisasi</option>
                            <option value="Community Relations">Community Relations</option>
                            <option value="Opini atau artikel">Opini atau artikel</option>
                            <option value="Digital Public Relations">Digital Public Relations</option>
                            <option value="Marketing Public Relations">Marketing Public Relations</option>
                            <option value="Government Relations">Government Relations</option>
                            <option value="Desain grafis">Desain grafis</option>
                            <option value="Video grafis">Video grafis</option>
                            <option value="Strategi komunikasi">Strategi komunikasi</option>
                            <option value="Konten kreator">Konten kreator</option>
                            <option value="Social Media Analyst">Social Media Analyst</option>
                            <option value="Lain-lain(harus mengirimkan bukti pendukung kepakaran)">Lain-lain(harus
                                mengirimkan bukti pendukung kepakaran)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_pendukung" class="form-label">Unggah bukti pendukung kepakaran</label>
                        <p class="text-secondary text-justify ">Dapat berupa sertifikat/karya</p>
                        <input type="file" name="bukti_pendukung" id="bukti_pendukung" class="form-control ">
                    </div>
                    <div class="mb-3">
                        <label for="sk_pengangkatan" class="form-label">Unggah SK Pengangkatan Pranata Humas
                        </label>
                        <p class="text-secondary text-justify ">Format file dalam bentuk PDF</p>
                        <input type="file" name="sk_pengangkatan" id="sk_pengangkatan" class="form-control">
                    </div>
            </div>
        </div>
        {{-- ennd section 1 --}}
        {{-- start identity --}}
        <div class="tab">
            <div class="bg-white p-5 shadow-sm border  rounded">
                <h5 class="pb-3">Identitas Pribadi</h5>
                <div class="mb-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <select class="form-select" name="provinsi" id="provinsi" class="form-control ">
                        <option selected disabled>Pilih Provinsi</option>
                        <option value="Islam">provinsi->nama</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kabupaten" class="form-label">Kabupaten</label>
                    <select class="form-select" name="kabupaten" id="kabupaten" class="form-control ">
                        <option selected disabled>Pilih Kabupaten</option>
                        <option value="">kabupaten</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan
                    </label>
                    {{-- <input type="text" name="kecamatan" id="kecamatan" class="form-control "> --}}
                    <select name="kecamatan" id="kecamatan" class="form-select">
                        <option selected disabled>Pilih Kecamatan</option>
                        <option value="">kecamatan->nama</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kelurahan" class="form-label">Kelurahan / Desa
                    </label>
                    <select name="kelurahan" id="kelurahan" class="form-select">
                        <option selected>Pilih Kelurahan/desa</option>
                        <option value="">kelurahan->nama</option>
                    </select>
                    {{-- <input type="text" name="kelurahan" id="kelurahan" class="form-control "> --}}
                </div>
                <div class="mb-3">
                    <label for="alamat_lengkap" class="form-label">Alamat Lengkap
                    </label>
                    <p class="text-secondary text-justify ">Masukkan nama jalan/nomor rumah/RT/RW</p>
                    <input type="text" name="alamat_lengkap" id="alamat_lengkap" class="form-control "
                        placeholder="Masukkan nama jalan/nomor rumah/RT/RW">
                </div>
                <div class="mb-3">
                    <label for="no_telephone" class="form-label">Nomor Telepon
                    </label>
                    <p class="text-secondary text-justify ">Tuliskan nomor telepon anda yang terhubung dengan Telegram</p>
                    <input type="text" name="no_telephone" id="no_telephone" class="form-control "
                        placeholder="+6289522223333444">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email
                    </label>
                    <input type="email" name="email" id="email" class="form-control "
                        placeholder="email@gmail.com">
                </div>
            </div>
        </div>
        {{-- end identitiy --}}
        <div class="tab">
            <div class="bg-white p-5 shadow-sm border  rounded">
                <h5 class="pb-3">Jenis pendaftaran</h5>
                <div class="">
                    <label for="jenis_pendaftaran" class="form-label">Jenis Pendaftaran</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_pendaftaran" id="pendaftaran_baru"
                            value="pendaftaran_baru">
                        <label class="form-check-label" for="pendaftaran_baru">
                            Pendaftaran Baru
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_pendaftaran" id="pendaftaran_ulang"
                            value="pendaftaran_ulang">
                        <label class="form-check-label" for="pendaftaran_ulang">
                            Pendaftaran Ulang
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab " id="pendaftaran_baru_content" style="display: none">
            <div class="bg-white p-5 shadow-sm border mt-1 ">
                <h4>Pendaftaran Baru</h4>
                <p>
                    Sebentar lagi, Anda akan bergabung dengan Iprahumas Indonesia. Silahkan lakukan pembayaran sebesar
                    Rp
                    225.000 (Dua ratus dua puluh lima ribu rupiah) untuk 2 tahun keanggotaan (2023-2024) melalui:
                </p>
                <ul>
                    <li>
                        Bank BSI
                        IPRAHUMAS INDONESIA
                        7806060881
                    </li>
                    <li>
                        GOPAY
                        Nomor : 081703614361
                    </li>
                </ul>
                <p>
                    Konfirmasi Ulang dilakukan dengan menghubungi Saudari:
                    Basma Sartika ( 081289022792)
                    <a href="https://wa.me/6281289022792/?text=Saya Sudah mendaftar"></a>
                </p>
                <p class="text-uppercase">pastikan data kamu benar saat mengisi dan kami tidak akan menerima revisi
                    saat SK
                    terbit.</p>
            </div>
            <div class="bg-white p-5 shadow-sm border mt-1">

                <div class="">
                    <label for="pembayaran" class="form-label">Pembayaran</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pembayaran" id="bsi">
                        <label class="form-check-label" for="bsi">
                            Bank BSI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pembayaran" id="perempuan">
                        <label class="form-check-label" for="perempuan">
                            GoPay
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="transfer_melalui" class="form-label">Transfer Melalui</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="transfer_melalui" id="laki-laki">
                        <label class="form-check-label" for="">
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="transfer_melalui" id="GoPay">
                        <label class="form-check-label" for="">
                            GoPay
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nama_pengirim" class="form-label">Nama Pengirim
                    </label>
                    <p class="text-secondary text-justify ">Silahkan isi nama pengirim, jika bukan nama Anda silahkan
                        tuliskan yang
                        tercantum pada transaksi, untuk
                        menghindari kesalahan pada proses pengecekan data transaksi pembayaran. </p>
                    <input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control ">
                </div>
                <div class="mb-3">
                    <label for="bank_pengirim" class="form-label">Bank Pengirim
                    </label>
                    <p class="text-secondary text-justify ">Silahkan isi bank yang Anda gunakan untuk pembayaran/jika
                        meggunakan flip
                        silahkan isi FLIP</p>
                    <input type="text" name="bank_pengirim" id="bank_pengirim" class="form-control ">
                </div>
                <div class="mb-3">
                    <label for="tanggal_pengiriman" class="form-label">Tanggal Pengiriman
                    </label>
                    <input type="date" name="tanggal_pengiriman" id="tanggal_pengiriman" class="form-control ">
                </div>
                <div class="mb-3">
                    <label for="empat_angka_atm" class="form-label" for="empat_angka_atm">Empat digit angka belakang
                        (sisi muka kartu ATM)
                    </label>
                    <p class="text-secondary text-justify ">Silahkan isi 4 digit angka belakang (sisi muka kartu ATM) Anda,
                        hal ini
                        memudahkan kami dalam proses pengecekan data melalui rekening koran. SEMUA DATA AKAN KAMI SIMPAN DAN
                        BERSIFAT RAHASIA. KAMI TIDAK AKAN MEMBERITAHU PIHAK MANAPUN.
                    </p>
                    <img src="{{ asset('img/form/atm.jpeg') }}" alt="Gambar ATM" class="mb-1 w-20 h-20 mb-2 img-fluid">
                    <input type="number" name="empat_angka_atm" id="empat_angka_atm" class="form-control ">
                </div>
                <div class="mb-3">
                    <label for="bukti_pembayaran" class="form-label">Unggah Bukti Pembayaran
                    </label>
                    <p class="text-secondary text-justify ">Unggah dalam format PDF atau image (JPG atau PNG)</p>
                    <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control ">
                </div>
            </div>
            <div class="bg-white  shadow-sm border ">
                <p class="bg-secondary text-white px-5 py-3 mt-1">Perhatian!</p>
                <div class="px-5 py-3">
                    <p class="text-justify">
                        Semua data yang akan kami rekam bersifat rahasia dan kami menjamin data tidak akan tersebar kepada
                        pihak
                        yang tidak bertanggung jawab. Mohon cek kembali semua data, baik penulisan, alamat, instansi, dan
                        sebagainya. Apabila terjadi kesalahan dalam penerbitan SK keanggotaan, maka tidak akan kami layani
                        karena semua data yang telah diinput oleh Anda adalah benar. SETELAH MENGISI GFORM PENDAFTARAN INI,
                        SILAHKAN ANDA MENGUNDUH APLIKASI TELEGRAM KARENA KAMI SEGERA BERMIGRASI DARI WHATSAPP KE TELEGRAM.
                        Terima kasih.
                    </p>
                </div>
            </div>
        </div>
        <div class="tab mt-1" id="pendaftaran_ulang_content" style="display: none">
            <div class="bg-white p-5 shadow-sm border  rounded">
                <h4>Pendaftaran Ulang</h4>
                <p>
                    Sebentar lagi, Anda akan bergabung dengan Iprahumas Indonesia. Silahkan lakukan pembayaran sebesar
                    Rp
                    300.000 (tiga ratus ribu rupiah) untuk 3 tahun keanggotaan (2022-2024) melalui:

                    Bank BSI
                    IPRAHUMAS INDONESIA
                    7806060881

                    GOPAY
                    Nomor : 081703614361

                    Konfirmasi Ulang dilakukan dengan menghubungi Saudari:
                    Asa Zumara (081333909567)

                </p>
            </div>
            <div class="bg-white p-5 shadow-sm border mt-1 ">

                <div class="mb-3">
                    <label for="no_anggota_iprahumas_lama" class="form-label">Nomor Anggota Iprahumas
                    </label>
                    <p class="text-secondary text-justify ">Tuliskan nomor anggota Iprahumas lama Anda</p>
                    <input type="text" name="no_anggota_iprahumas_lama" id="no_anggota_iprahumas_lama"
                        class="form-control ">
                </div>
                <div class="mb-3">
                    <label for="bukti_keanggotaan_iprahumas" class="form-label">Unggah bukti keanggotaan Iprahumas
                        (SK/Kartu Anggota)
                    </label>
                    <input type="file" name="bukti_keanggotaan_iprahumas" id="bukti_keanggotaan_iprahumas"
                        class="form-control ">
                </div>
                <div class="mb-3">
                    <label for="pembayaran" class="form-label">Pembayaran</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pembayaran" id="">
                        <label class="form-check-label" for="">
                            Bank BSI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pembayaran" id="">
                        <label class="form-check-label" for="">
                            GoPay
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="transfer_melalui" class="form-label">Transfer Melalui</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="transfer_melalui" id="">
                        <label class="form-check-label" for="">
                            Bank BSI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="transfer_melalui" id="">
                        <label class="form-check-label" for="">
                            GoPay
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nama_pengirim" class="form-label">Nama Pengirim
                    </label>
                    <input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control ">
                </div>
                <div class="mb-3">
                    <label for="bank_pengirim" class="form-label">Bank Pengirim
                    </label>
                    <input type="text" name="bank_pengirim" id="bank_pengirim" class="form-control ">
                </div>
                <div class="mb-3">
                    <label for="tanggal_pengiriman" class="form-label">Tanggal Pengiriman
                    </label>
                    <input type="date" name="tanggal_pengiriman" id="tanggal_pengiriman" class="form-control ">
                </div>
                <div class="mb-3">
                    <label for="empat_angka_atm" class="form-label">Empat digit angka
                    </label>
                    <p class="text-secondary text-justify ">Silahkan isi 4 digit angka belakang (sisi muka kartu ATM) Anda,
                        hal ini
                        memudahkan kami dalam proses pengecekan data melalui rekening koran. SEMUA DATA AKAN KAMI SIMPAN DAN
                        BERSIFAT RAHASIA. KAMI TIDAK AKAN MEMBERITAHU PIHAK MANAPUN.
                    </p>
                    <img src="{{ asset('img/form/atm.jpeg') }}" alt="Gambar ATM" class="w-20 h-20 mb-2 img-fluid">
                    <input type="number" name="empat_angka_atm" id="empat_angka_atm" class="form-control ">
                </div>
                <div class="mb-3">
                    <label for="bukti_pembayaran" class="form-label">Unggah Bukti Pembayaran
                    </label>
                    <p class="text-secondary text-justify ">Unggah dalam format PDF atau image (JPG atau PNG)</p>
                    <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control ">
                </div>
            </div>
            <div class="bg-white  shadow-sm border ">

                <p class="bg-secondary text-white px-5 py-3 mt-1">Perhatian!</p>
                <div class="px-5 py-3">
                    <p class="text-justify ">

                        Semua data yang akan kami rekam bersifat rahasia dan kami menjamin data tidak akan tersebar kepada
                        pihak
                        yang tidak bertanggung jawab. Mohon cek kembali semua data, baik penulisan, alamat, instansi, dan
                        sebagainya. Apabila terjadi kesalahan dalam penerbitan SK keanggotaan, maka tidak akan kami layani
                        karena semua data yang telah diinput oleh Anda adalah benar. SETELAH MENGISI GFORM PENDAFTARAN INI,
                        SILAHKAN ANDA MENGUNDUH APLIKASI TELEGRAM KARENA KAMI SEGERA BERMIGRASI DARI WHATSAPP KE TELEGRAM.
                        Terima kasih.
                    </p>
                    <div class="mb-3">
                        <label for="" class="form-label">Apakah anda yakin sudah melakukan pengecekan
                            kembali?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pengecekan" id="">
                            <label class="form-check-label" for="">
                                YA
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pengecekan" id="">
                            <label class="form-check-label" for="">
                                CEK KEMBALI
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;" class="mt-3">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <div class="text-center my-2">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
        </form>
    </div>
    <script>
        var currentTab = 0;
        showTab(currentTab);

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("formReg").submit();
                return false;
            }
            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            // y = x[currentTab].getElementsByTagName("input");
            y = x[currentTab].getElementsByTagName['input', 'select'];
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    y[i].className += " invalid";
                    valid = false;
                }
            }
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }
        document.addEventListener('DOMContentLoaded', function() {
            const pendaftaranBaru = document.getElementById('pendaftaran_baru');
            const pendaftaranUlang = document.getElementById('pendaftaran_ulang');
            const pendaftaranBaruContent = document.getElementById('pendaftaran_baru_content');
            const pendaftaranUlangContent = document.getElementById('pendaftaran_ulang_content');

            pendaftaranBaru.addEventListener('change', function() {
                if (this.checked) {
                    pendaftaranBaruContent.style.display = 'block';
                    pendaftaranUlangContent.style.display = 'none';
                }
            });

            pendaftaranUlang.addEventListener('change', function() {
                if (this.checked) {
                    pendaftaranUlangContent.style.display = 'block';
                    pendaftaranBaruContent.style.display = 'none';
                }
            });
        });
    </script>
@endsection
