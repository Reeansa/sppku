<?= $this->extend('administrator/layout/app') ?>
<?= $this->section('content') ?>
<section class="px-10">
    <div role="tablist" class="tabs tabs-bordered">
        <input type="radio" name="my_tabs_1" role="tab" class="tab font-bold text-[#005B4D]" aria-label="Profil Sekolah" checked="checked" />
        <div role="tabpanel" class="p-10 tab-content">
            <div class="grid grid-cols-2 gap-4">
                <form action="" method="post" class="grid grid-cols-2 gap-10">
                    <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">NSM</span>
                        <input type="text" class="grow" />
                    </label>
                    <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">NPSN</span>
                        <input type="text" class="grow" />
                    </label>
                    <label class="col-span-2 relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Nama Sekolah</span>
                        <input type="text" class="grow" />
                    </label>
                    <label class="col-span-2 relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Nama Kepala Sekolah</span>
                        <input type="text" class="grow" />
                    </label>
                    <button type="submit" class="btn bg-[#005B4D] text-white rounded-full px-16">Simpan</button>
                </form>
                <form action="" method="post" class="justify-self-center">
                    <div class="flex items-center justify-center">
                        <img src="<?= base_url('assets/logo/logo.png') ?>" class="w-52 h-52" alt="">
                    </div>
                    <div class="flex items-center gap-4">
                        <input type="file" class="w-full max-w-xs file-input file-input-bordered" />
                        <button type="submit" class="btn bg-[#005B4D] text-white rounded-full px-16">Simpan</button>
                    </div>
                </form>
                <form action="" method="post" class="mt-5">
                    <header class="mt-5">
                        <h1 class="font-bold text-[#005B4D] text-2xl">Alur Pembayaran SPP</h1>
                    </header>
                    <div class="flex items-center justify-center mt-5">
                        <img src="<?= base_url('assets/images/alur-pembayaran-spp.png') ?>" class="w-96" alt="">
                    </div>
                    <div class="flex items-center justify-center gap-4 mt-5">
                        <input type="file" class="w-full max-w-xs file-input file-input-bordered" />
                        <button type="submit" class="btn bg-[#005B4D] text-white rounded-full px-16">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <input type="radio" name="my_tabs_1" role="tab" class="tab font-bold text-[#005B4D]" aria-label="Alamat & Kontak" />
        <div role="tabpanel" class="p-10 tab-content">
            <div class="grid grid-cols-2 gap-4">
                <form action="" method="post" class="grid grid-cols-2 gap-4">
                    <label class="col-span-2 relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Alamat Sekolah</span>
                        <input type="text" class="grow" />
                    </label>
                    <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Kecamatan</span>
                        <input type="text" class="grow" />
                    </label>
                    <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Kota/Kabupaten</span>
                        <input type="text" class="grow" />
                    </label>
                    <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Kode Pos</span>
                        <input type="text" class="grow" />
                    </label>
                    <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">No Whatsapp</span>
                        <input type="text" class="grow" />
                    </label>
                    <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Nama Kontak Whatsapp</span>
                        <input type="text" class="grow" />
                    </label>
                    <div>
                        <button type="submit" class="btn bg-[#005B4D] text-white rounded-full px-16">Simpan</button>
                    </div>
                </form>
                <form action="" method="post">
                    <div class="flex items-center justify-center">
                    <img src="<?= base_url('assets/logo/logo.png') ?>" class="w-52 h-52" alt="">
                    </div>
                    <div class="flex items-center justify-center gap-4 mt-5">
                        <input type="file" class="w-full max-w-xs file-input file-input-bordered" />
                        <button type="submit" class="btn bg-[#005B4D] text-white rounded-full px-16">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <input type="radio" name="my_tabs_1" role="tab" class="tab font-bold text-[#005B4D]" aria-label="Galeri" />
        <div role="tabpanel" class="p-10 tab-content">Tab content 3</div>
    </div>
</section>
<?= $this->endSection(); ?>