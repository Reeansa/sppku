<?= $this->extend('administrator/layout/app') ?>
<?= $this->section('content') ?>
<header class="px-10">
    <div class="flex items-center justify-between">
        <form action="<?= site_url('/dashboard/pengumuman') ?>" method="get">
            <?= csrf_field() ?>
            <div class="flex gap-4">
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14">
                    <span class="absolute px-4 text-sm bg-white bottom-12">Cari Item Tagihan</span>
                    <input type="text" name="judul" class="grow" placeholder="Search" value="<?= $judul ?? '' ?>" />
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14">
                    <span class="absolute px-4 text-sm bg-white bottom-12">Jenis</span>
                    <select name="tahun" class="w-48 grow">
                        <?php for ($i = 1900; $i <= date('Y'); $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14">
                    <span class="absolute px-4 text-sm bg-white bottom-12">Tipe</span>
                    <select name="tahun" class="w-48 grow">
                        <?php for ($i = 1900; $i <= date('Y'); $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
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
            <button class="flex items-center gap-2 px-5 py-3 shadow-default bg-[#005B4D] text-white rounded-full" onclick="my_modal_3.showModal()">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path d="M8.25 9.75H3.75V8.25H8.25V3.75H9.75V8.25H14.25V9.75H9.75V14.25H8.25V9.75Z" fill="white" />
                </svg>
                Tambah Kategori Tagihan
            </button>
        </div>
    </div>
</header>
<!-- You can open the modal using ID.showModal() method -->
<dialog id="my_modal_3" class="modal">
    <div class="modal-box bg-[#F0F5F1]">
        <form method="dialog">
            <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
        </form>
        <h3 class="text-lg font-bold">Tambah Kategori Tagihan</h3>
        <form action="" method="post" class="flex flex-col gap-5 mt-10">
            <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14 bg-transparent">
                <span class="absolute px-4 text-sm bg-[#F0F5F1] bottom-12">Jenis Tagihan</span>
                <select name="tahun" class="w-48 bg-transparent grow">
                    <option value="">SPP</option>
                </select>
            </label>
            <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14 bg-transparent">
                <span class="absolute px-4 text-sm bg-[#F0F5F1] bottom-12">Tahun Ajaran</span>
                <select name="tahun" class="w-48 bg-transparent grow">
                    <?php for ($i = 1900; $i <= date('Y'); $i++) : ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </label>
            <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14 bg-transparent">
                <span class="absolute px-4 text-sm bg-[#F0F5F1] bottom-12">Tipe Tagihan</span>
                <select name="tahun" class="w-48 bg-transparent grow">
                    <option value="">Bulanan</option>
                </select>
            </label>
            <div class="self-end">
                <button type="reset" class="text-[#2A5047] px-8">Batal</button>
                <button type="submit" class="btn bg-[#C4EDE1] text-[#2A5047] rounded-full px-8">Simpan</button>
            </div>
        </form>
    </div>
</dialog>
<section class="px-10 mt-10">
    <article class="overflow-x-auto">
        <table class="min-w-full overflow-hidden bg-[#F0F5F1] rounded-lg shadow">
            <thead class="border-b-2">
                <tr>
                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-[#005B4D]">Jenis</th>
                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-[#005B4D]">Tahun Ajaran</th>
                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-[#005B4D]">Tipe</th>
                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-[#005B4D]">Nominal</th>
                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-[#005B4D]">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-[#005B4D]">SPP</td>
                    <td class="px-6 py-4 whitespace-nowrap text-[#005B4D]">SPP Ar-Rasyid (TK-A) - T.A. 2024/2025</td>
                    <td class="px-6 py-4 whitespace-nowrap text-[#005B4D]">2024/2025</td>
                    <td class="px-6 py-4 whitespace-nowrap text-[#005B4D]">
                        <a href="" class="btn bg-[#C4EDE1] text-[#2A5047] px-5 rounded-full">Atur Item Tagihan</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M5 19H6.425L16.2 9.225L14.775 7.8L5 17.575V19ZM3 21V16.75L16.2 3.575C16.4 3.39167 16.621 3.25 16.863 3.15C17.105 3.05 17.359 3 17.625 3C17.891 3 18.1493 3.05 18.4 3.15C18.6507 3.25 18.8673 3.4 19.05 3.6L20.425 5C20.625 5.18333 20.771 5.4 20.863 5.65C20.955 5.9 21.0007 6.15 21 6.4C21 6.66667 20.9543 6.921 20.863 7.163C20.7717 7.405 20.6257 7.62567 20.425 7.825L7.25 21H3ZM15.475 8.525L14.775 7.8L16.2 9.225L15.475 8.525Z" fill="#005B4D" />
                            </svg>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </article>
</section>
<?= $this->endSection(); ?>