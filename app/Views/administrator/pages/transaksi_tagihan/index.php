<?= $this->extend('administrator/layout/app') ?>
<?= $this->section('content') ?>
<header class="px-10">
    <div class="flex items-center justify-between">
        <form action="<?= site_url('/dashboard/pengumuman') ?>" method="get">
            <?= csrf_field() ?>
            <div class="flex gap-4">
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14">
                    <span class="absolute px-4 text-sm bg-white bottom-12">Cari Siswa</span>
                    <input type="text" name="judul" class="grow" placeholder="Search" value="<?= $judul ?? '' ?>" />
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14">
                    <span class="absolute px-4 text-sm bg-white bottom-12">Tahun Akademik</span>
                    <select name="tahun" class="w-48 grow">
                        <?php for ($i = 1900; $i <= date('Y'); $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </label>

                <button type="submit" class="btn bg-[#C4EDE1] text-[#2A5047] rounded-full px-8">Cari</button>
            </div>
        </form>
        <div class="flex items-center gap-4">
            <a href="" class="flex items-center gap-2 px-5 py-3 shadow-default bg-[#005B4D] text-white rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path d="M8.25 9.75H3.75V8.25H8.25V3.75H9.75V8.25H14.25V9.75H9.75V14.25H8.25V9.75Z" fill="white" />
                </svg>
                Cetak Semua Tagihan
            </a>
        </div>
    </div>
</header>
<section class="grid grid-flow-row-dense grid-cols-3 grid-rows-1 gap-10 px-10 mt-10 border-b-2 border-[#BCC9C4]">
    <article class="col-span-2">
        <form action="" method="post" class="">
            <div class="grid grid-cols-2 gap-8">
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Nama Lengkap Anak</span>
                    <input type="text" class="grow" disabled />
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Jenis Kelamin</span>
                    <select name="" id="" class="grow" disabled>
                        <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                    </select>
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">NIK Anak</span>
                    <input type="text" class="grow" disabled />
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">NISN</span>
                    <input type="text" class="grow" disabled />
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14 bg-transparent"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Tanggal Lahir</span>
                    <input type="date" class="grow" disabled placeholder="-- Semua --" />
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Kota Tempat Lahir</span>
                    <input type="text" class="grow" disabled />
                </label>
                <label class="relative flex items-center col-span-2 gap-2 px-5 rounded-full input h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Atur Kelas</span>
                    <select name="" id="" class="grow" disabled>
                        <option value="" disabled selected>-- Pilih Jenis Kelas --</option>
                    </select>
                </label>
            </div>
        </form>
    </article>
    <article class="border-l-2 border-[#BCC9C4]">
        <img class="rounded-2xl" src="<?= base_url('assets/logo/logo.png') ?>" alt="foto profil">
    </article>
</section>
<section class="px-10">
    <article class="mt-10">
        <header>
            <h1 class="font-bold text-2xl text-[#005B4D]">Informasi Tagihan</h1>
            <p class="mt-5">Klik salah satu warna merah muda pada kolom item tagihan untuk melakukan pelunasan cepat.</p>
        </header>
        <section>
            <article>
                <header class="flex mt-5 mb-5">
                    <h2 class="font-bold text-[#005B4D] border-b-2 border-[#005B4D]">Tipe Bulanan</h2>
                </header>
                <div class="overflow-x-auto">
                    <table class="min-w-full overflow-hidden bg-[#F0F5F1] rounded-lg shadow">
                        <thead class="border-b-2">
                            <tr>
                                <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-[#005B4D]">No</th>
                                <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-[#005B4D]">Item Tagihan</th>
                                <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-[#005B4D]">Sisa Tagihan</th>
                                <?php
                                $bulan = ['Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                foreach ($bulan as $b) {
                                    echo "<th scope='col' class='px-6 py-4 text-sm font-medium text-left text-[#005B4D]'>$b</th>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">1</td>
                                <td class="px-6 py-4 whitespace-nowrap">SPP</td>
                                <td class="px-6 py-4 whitespace-nowrap">Rp. 1.000.000</td>
                                <?php
                                for ($i = 0; $i < count($bulan); $i++) {
                                    echo "<td class='px-6 py-4 text-center whitespace-nowrap'>
                            <a href='' class='text-[#410002] bg-[#FFDAD6] rounded-full px-4 py-2'>Rp. 100.000</a>
                        </td>";
                                }
                                ?>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">2</td>
                                <td class="px-6 py-4 whitespace-nowrap">Uang Gedung</td>
                                <td class="px-6 py-4 whitespace-nowrap">Rp. 1.000.000</td>
                                <?php
                                for ($i = 0; $i < count($bulan); $i++) {
                                    echo "<td class='px-6 py-4 text-center whitespace-nowrap'>
                            <a href='' class='text-[#410002] bg-[#FFDAD6] rounded-full px-4 py-2'>Rp. 100.000</a>
                        </td>";
                                }
                                ?>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">3</td>
                                <td class="px-6 py-4 whitespace-nowrap">Uang Bangunan</td>
                                <td class="px-6 py-4 whitespace-nowrap">Rp. 1.000.000</td>
                                <?php
                                for ($i = 0; $i < count($bulan); $i++) {
                                    echo "<td class='px-6 py-4 text-center whitespace-nowrap'>
                            <a href='' class='text-[#410002] bg-[#FFDAD6] rounded-full px-4 py-2'>Rp. 100.000</a>
                        </td>";
                                }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </section>
    </article>
</section>
<article class="px-10 pb-48 mt-10">
    <section class="grid grid-cols-3 gap-4">
        <article>
            <header>
                <h1 class="font-bold text-2xl text-[#005B4D]">Riwayat Pembayaran</h1>
            </header>
            <div class="mt-10 overflow-x-auto">
                <table class="min-w-full overflow-hidden bg-[#F0F5F1] rounded-lg shadow">
                    <thead class="border-b-2">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-[#005B4D]">Item Pembayaran</th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-[#005B4D]">Nominal</th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-[#005B4D]">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-[#005B4D]">1</td>
                            <td class="px-6 py-4 whitespace-nowrap text-[#005B4D]">SPP</td>
                            <td class="px-6 py-4 whitespace-nowrap text-[#005B4D]">Rp. 1.000.000</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-[#005B4D]">2</td>
                            <td class="px-6 py-4 whitespace-nowrap text-[#005B4D]">Uang Gedung</td>
                            <td class="px-6 py-4 whitespace-nowrap text-[#005B4D]">Rp. 1.000.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </article>
        <article class="col-span-2">
            <header>
                <h1 class="font-bold text-2xl text-[#005B4D]">Input Transaksi Tagihan Manual</h1>
            </header>
            <form action="" class="grid grid-cols-2 gap-10 mt-10" method="post">
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Jumlah Bayaran</span>
                    <input type="text" class="grow" />
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Tujuan</span>
                    <input type="text" class="grow" />
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Tanggal Transaksi</span>
                    <input type="date" class="grow" />
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Sisa Tagihan</span>
                    <input type="text" class="grow" />
                </label>
                <div>
                    <button type="submit" class="px-5 py-3 shadow-default bg-[#005B4D] text-white rounded-full">Tambah Transaksi</button>
                </div>
            </form>
        </article>
    </section>
</article>
<?= $this->endSection(); ?>