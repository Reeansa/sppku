<?= $this->extend('administrator/layout/app') ?>
<?= $this->section('content') ?>
<section class="grid grid-flow-row-dense grid-cols-3 grid-rows-1 gap-10 px-10 mt-10">
    <article class="col-span-2">
        <div role="tablist" class="tabs tabs-bordered">
            <input type="radio" name="my_tabs_1" role="tab" class="tab font-bold text-[#005B4D]" aria-label="Data Anak" checked="checked" />
            <div role="tabpanel" class="p-10 tab-content">
                <form action="" method="post" class="">
                    <div class="grid grid-cols-2 gap-8">
                        <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Nama Lengkap Anak</span>
                            <input type="text" class="grow" />
                        </label>
                        <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14 bg-transparent"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Jenis Kelamin</span>
                            <select name="" id="" class="bg-transparent grow">
                                <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                            </select>
                        </label>
                        <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">NIK Anak</span>
                            <input type="text" class="grow" />
                        </label>
                        <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">NISN</span>
                            <input type="text" class="grow" />
                        </label>
                        <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14 bg-transparent"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Tanggal Lahir</span>
                            <input type="date" class="grow" placeholder="-- Semua --" />
                        </label>
                        <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Kota Tempat Lahir</span>
                            <input type="text" class="grow" />
                        </label>
                        <label class="col-span-2 relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14 bg-transparent"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Atur Kelas</span>
                            <select name="" id="" class="bg-transparent grow">
                                <option value="" disabled selected>-- Pilih Jenis Kelas --</option>
                            </select>
                        </label>
                        <label class="col-span-2 relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14 bg-transparent"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Status Peserta Didik</span>
                            <select name="" id="" class="bg-transparent grow">
                                <option value="" disabled selected>-- Status --</option>
                            </select>
                        </label>
                    </div>
                    <div class="flex items-center justify-end gap-4 mt-5">
                        <a href="" class="text-[#005B4D]">Batalkan</a>
                        <button type="submit" class="btn bg-[#005B4D] text-white rounded-full px-16">Simpan</button>
                    </div>
                </form>
            </div>
            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Alamat" />
            <div role="tabpanel" class="p-10 tab-content">
                <form action="" method="post" class="">
                    <div class="grid grid-cols-3 gap-8">
                        <label class="col-span-3 relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Alamat</span>
                            <input type="text" class="grow" />
                        </label>
                        <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">RT</span>
                            <input type="text" class="grow" />
                        </label>
                        <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">RW</span>
                            <input type="text" class="grow" />
                        </label>
                        <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Nama Jalan/Kampung/Desa</span>
                            <input type="text" class="grow" />
                        </label>
                        <label class="col-span-3 relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Kecamatan</span>
                            <input type="text" class="grow" />
                        </label>
                        <label class="col-span-3 relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Kabupaten/Kota</span>
                            <input type="text" class="grow" />
                        </label>
                    </div>
                    <div class="flex items-center justify-end gap-4 mt-5">
                        <a href="" class="text-[#005B4D]">Batalkan</a>
                        <button type="submit" class="btn bg-[#005B4D] text-white rounded-full px-16">Simpan</button>
                    </div>
                </form>
            </div>
            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Data Orang Tua/Wali" />
            <div role="tabpanel" class="p-10 tab-content">
                <form action="" method="post" class="">
                    <div class="grid grid-cols-2 gap-8">
                        <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Nama Ibu</span>
                            <input type="text" class="grow" />
                        </label>
                        <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Nama Ayah</span>
                            <input type="text" class="grow" />
                        </label>
                        <label class="col-span-2 relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">No HP Orang Tua (WhatsApp)</span>
                            <input type="text" class="grow" />
                        </label>
                        <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">Nama Wali</span>
                            <input type="text" class="grow" />
                        </label>
                        <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F5FBF7] bottom-12">No HP Wali (WhatsApp)</span>
                            <input type="text" class="grow" />
                        </label>
                    </div>
                    <div class="flex items-center justify-end gap-4 mt-5">
                        <a href="" class="text-[#005B4D]">Batalkan</a>
                        <button type="submit" class="btn bg-[#005B4D] text-white rounded-full px-16">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </article>
    <article class="flex flex-col gap-10 bg-[#F0F5F1] p-5 rounded-2xl">
        <form action="" method="post">
            <img src="<?= base_url('assets/logo/logo.png') ?>" alt="foto profil">
            <input type="file" class="w-full rounded-full file-input" placeholder="Pilih foto dari perangkat" />
            <button type="submit" class="btn bg-[#005B4D] text-white rounded-full px-16 mt-4">Ganti Foto</button>
        </form>
    </article>
</section>
<?= $this->endSection(); ?>