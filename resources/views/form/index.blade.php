@extends('layouts-users.header')
@section('content')
    <div class="p-5 ">
        <div class="p-5 border shadow-sm">
            <h1 class="text-center pb-5">Pendaftaran Anggota Iprahumas Indonesia</h1>
            <form action="" method="">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control uppercase"
                                placeholder="Masukkan Nama Lengkap : THORIQ RAMADANI, S.I.Kom ">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="VARCHAR" name="nip" id="nip" class="form-control uppercase"
                                placeholder="Masukkan NIP ">
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
                            <input type="VARCHAR" name="tempat_lahir" id="tempat_lahir" class="form-control uppercase"
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
                        <option selected>Pilih Agama...</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Kristen Katolik">Kristen Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghuchu">Konghuchu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">Instansi</label>
                    <input type="VARCHAR" name="nip" id="nip" class="form-control uppercase"
                        placeholder="Instansi Anda bekerja (Kementerian/Lembaga/Pemerintah Daerah)">
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">Unit Kerja</label>
                    <input type="VARCHAR" name="nip" id="nip" class="form-control uppercase"
                        placeholder="Tuliskan unit kerja/satuan kerja Anda bekerja">
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Pendidikan Terakhir </label>
                    <select class="form-select" name="agama" id="agama" class="form-control uppercase">
                        <option selected>Pilih Agama...</option>
                        <option value="Islam">SMA</option>
                        <option value="Kristen Protestan">D3</option>
                        <option value="Kristen Katolik">D4 / S1</option>
                        <option value="Budha">S2</option>
                        <option value="Hindu">S3</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">Program Studi</label>
                    <input type="VARCHAR" name="nip" id="nip" class="form-control uppercase"
                        placeholder="Masukkan Nama Lengkap : THORIQ RAMADANI, S.I.Kom ">
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">Asal Perguruan Tinggi / Universitas</label>
                    <input type="VARCHAR" name="nip" id="nip" class="form-control uppercase"
                        placeholder="Masukkan Nama Lengkap : THORIQ RAMADANI, S.I.Kom ">
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Pangkat/Golongan </label>
                    <select class="form-select" name="agama" id="agama" class="form-control uppercase">
                        <option selected>Pilih Agama...</option>
                        <option value="Islam">SMA</option>
                        <option value="Kristen Protestan">D3</option>
                        <option value="Kristen Katolik">D4 / S1</option>
                        <option value="Budha">S2</option>
                        <option value="Hindu">S3</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Jabatan </label>
                    <select class="form-select" name="agama" id="agama" class="form-control uppercase">
                        <option selected>Pilih Agama...</option>
                        <option value="Islam">SMA</option>
                        <option value="Kristen Protestan">D3</option>
                        <option value="Kristen Katolik">D4 / S1</option>
                        <option value="Budha">S2</option>
                        <option value="Hindu">S3</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Kepakaran</label>
                    <select class="form-select" name="agama" id="agama" class="form-control uppercase">
                        <option selected>Pilih Agama...</option>
                        <option value="Islam">SMA</option>
                        <option value="Kristen Protestan">D3</option>
                        <option value="Kristen Katolik">D4 / S1</option>
                        <option value="Budha">S2</option>
                        <option value="Hindu">S3</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">Unggah bukti pendukung kepakaran</label>
                    <p class="text-secondary ">Dapat berupa sertifikat/karya</p>
                    <input type="file" name="nip" id="nip" class="form-control ">
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">Unggah SK Pengangkatan Pranata Humas
                    </label>
                    <p class="text-secondary ">Format file dalam bentuk PDF</p>
                    <input type="file" name="nip" id="nip" class="form-control">
                </div>
                <div class="text-right">
                    <a href="">NEXT</a>
                    <a href="">PREVIOUS</a>
                </div>
        </div>
        {{-- ennd section 1 --}}
        <div class="bg-white p-5 shadow-sm border my-4">
            <h5 class="pb-3">Identitas Pribadi</h5>
            <div class="mb-3">
                <label for="provinsi" class="form-label">Provinsi</label>
                <select class="form-select" name="provinsi" id="provinsi" class="form-control ">
                    <option selected>Pilih Provinsi</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Kristen Katolik">Kristen Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Kecamatan
                </label>
                <input type="text" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Kelurahan / Desa
                </label>
                <input type="text" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Alamat Lengkap
                </label>
                <input type="text" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Nomor Telepon
                </label>
                <input type="text" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Email
                </label>
                <input type="email" name="nip" id="nip" class="form-control ">
            </div>
        </div>
        <div class="bg-white p-5 shadow-sm border my-4">
            <h5 class="pb-3">Jenis pendaftaran</h5>
            <div class="mb-3">
                <label for="jenis_pendaftaran" class="form-label">Jenis Pendaftaran</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_pendaftaran" id="pendaftaran_baru">
                    <label class="form-check-label" for="pendaftaran_baru">
                        Pendaftaran Baru
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_pendaftaran" id="pendaftaran_ulang">
                    <label class="form-check-label" for="pendaftaran_ulang">
                        Pendaftaran Ulang
                    </label>
                </div>
            </div>
        </div>
        <div class="bg-white p-5 shadow-sm border mt-4">
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
                Basma Sartika ( 081289022792) https
            </p>

            <p class="text-uppercase">pastikan data kamu benar saat mengisi dan kami tidak akan menerima revisi
                saat SK
                terbit.</p>
        </div>
        <div class="bg-white p-5 shadow-sm border ">
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Pembayaran</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki">
                    <label class="form-check-label" for="laki-laki">
                        Bank BSI
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan">
                    <label class="form-check-label" for="perempuan">
                        GoPay
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Transfer Melalui</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki">
                    <label class="form-check-label" for="laki-laki">
                        Bank BSI
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan">
                    <label class="form-check-label" for="perempuan">
                        GoPay
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Nama Pengirim
                </label>
                <input type="text" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Bank Pengirim
                </label>
                <input type="text" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Tanggal Pengiriman
                </label>
                <input type="date" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Empat digit angka
                </label>
                <input type="number" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Unggah Bukti Pembayaran
                </label>
                <input type="file" name="nip" id="nip" class="form-control ">
            </div>
            Perhatian!
            <p>
                Semua data yang akan kami rekam bersifat rahasia dan kami menjamin data tidak akan tersebar kepada
                pihak
                yang tidak bertanggung jawab. Mohon cek kembali semua data, baik penulisan, alamat, instansi, dan
                sebagainya. Apabila terjadi kesalahan dalam penerbitan SK keanggotaan, maka tidak akan kami layani
                karena semua data yang telah diinput oleh Anda adalah benar. SETELAH MENGISI GFORM PENDAFTARAN INI,
                SILAHKAN ANDA MENGUNDUH APLIKASI TELEGRAM KARENA KAMI SEGERA BERMIGRASI DARI WHATSAPP KE TELEGRAM.
                Terima kasih.
            </p>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Apakah anda yakin sudah melakukan pengecekan
                    kembali?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki">
                    <label class="form-check-label" for="laki-laki">
                        YA
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan">
                    <label class="form-check-label" for="perempuan">
                        CEK KEMBALI
                    </label>
                </div>
                KIRIM
            </div>
        </div>
        <div class="bg-white p-5 shadow-sm border my-4">
            <h4>Jika pendaftaran Ulang</h4>
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
            <div class="mb-3">
                <label for="nip" class="form-label">Nomor Anggota Iprahumas
                </label>
                <input type="text" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Unggah bukti keanggotaan Iprahumas (SK/Kartu Anggota)
                </label>
                <input type="file" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Pembayaran</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki">
                    <label class="form-check-label" for="laki-laki">
                        Bank BSI
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan">
                    <label class="form-check-label" for="perempuan">
                        GoPay
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Transfer Melalui</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki">
                    <label class="form-check-label" for="laki-laki">
                        Bank BSI
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan">
                    <label class="form-check-label" for="perempuan">
                        GoPay
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Nama Pengirim
                </label>
                <input type="text" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Bank Pengirim
                </label>
                <input type="text" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Tanggal Pengiriman
                </label>
                <input type="date" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Empat digit angka
                </label>
                <input type="number" name="nip" id="nip" class="form-control ">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Unggah Bukti Pembayaran
                </label>
                <input type="file" name="nip" id="nip" class="form-control ">
            </div>
            Perhatian!
            <p>
                Semua data yang akan kami rekam bersifat rahasia dan kami menjamin data tidak akan tersebar kepada
                pihak
                yang tidak bertanggung jawab. Mohon cek kembali semua data, baik penulisan, alamat, instansi, dan
                sebagainya. Apabila terjadi kesalahan dalam penerbitan SK keanggotaan, maka tidak akan kami layani
                karena semua data yang telah diinput oleh Anda adalah benar. SETELAH MENGISI GFORM PENDAFTARAN INI,
                SILAHKAN ANDA MENGUNDUH APLIKASI TELEGRAM KARENA KAMI SEGERA BERMIGRASI DARI WHATSAPP KE TELEGRAM.
                Terima kasih.
            </p>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Apakah anda yakin sudah melakukan pengecekan
                    kembali?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki">
                    <label class="form-check-label" for="laki-laki">
                        YA
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan">
                    <label class="form-check-label" for="perempuan">
                        CEK KEMBALI
                    </label>
                </div>
                <button>Kirim</button>
                </form>
            </div>
        </div>
    @endsection
