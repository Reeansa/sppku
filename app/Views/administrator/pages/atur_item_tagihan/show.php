<?= $this->extend('administrator/layout/app') ?>
<?= $this->section('content') ?>
<section class="px-10">
    <article class="pb-5">
        <header class="mb-10">
            <h1 class="font-bold text-2xl text-[#005B4D]">Atur Item Tambahan</h1>
        </header>
        <form action="" method="post" class="grid grid-cols-2 gap-4">
            <div class="flex flex-col gap-5">
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14" disabled>
                    <span class="absolute px-4 text-sm bg-white bottom-12">Nama Item</span>
                    <select name="tahun" class="w-48 bg-transparent grow" disabled>
                        <?php for ($i = 1900; $i <= date('Y'); $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14" disabled>
                    <span class="absolute px-4 text-sm bg-white bottom-12">Tipe Bayar</span>
                    <select name="tahun" class="w-48 bg-transparent grow">
                        <?php for ($i = 1900; $i <= date('Y'); $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14" disabled>
                    <span class="absolute px-4 text-sm bg-white bottom-12">Tahun Ajaran</span>
                    <select name="tahun" class="w-48 bg-transparent grow">
                        <?php for ($i = 1900; $i <= date('Y'); $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14">
                    <span class="absolute px-4 text-sm bg-white bottom-12">Kelas</span>
                    <select name="tahun" class="w-48 grow">
                        <?php for ($i = 1900; $i <= date('Y'); $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14">
                    <span class="absolute px-4 text-sm bg-white bottom-12">Siswa</span>
                    <select name="tahun" class="w-48 grow">
                        <?php for ($i = 1900; $i <= date('Y'); $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </label>
            </div>
            <div class="flex flex-wrap gap-5">
                <?php $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']; ?>
                <?php
                foreach ($bulan as $b) {
                    echo "<label class='relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14'><span class='absolute px-4 text-sm bg-[#F5FBF7] bottom-12'>$b</span>
                        <input type='number' class='grow' />
                    </label>";
                }
                ?>
            </div>
            <div class="flex items-center justify-between col-span-2 mt-5">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M7 21C6.45 21 5.97933 20.8043 5.588 20.413C5.19667 20.0217 5.00067 19.5507 5 19V6H4V4H9V3H15V4H20V6H19V19C19 19.55 18.8043 20.021 18.413 20.413C18.0217 20.805 17.5507 21.0007 17 21H7ZM17 6H7V19H17V6ZM9 17H11V8H9V17ZM13 17H15V8H13V17Z" fill="#BA1A1A" />
                    </svg>
                </a>
                <div class="flex items-center gap-4">
                    <a href="" class="text-[#005B4D]">Batal</a>
                    <button type="submit" class="btn bg-[#C4EDE1] text-[#2A5047] rounded-full px-8">Simpan</button>
                </div>
            </div>
        </form>
    </article>
</section>
<?= $this->endSection(); ?>