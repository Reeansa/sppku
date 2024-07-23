<?= $this->extend('administrator/layout/app') ?>
<?= $this->section('content') ?>
<header class="flex items-center justify-between px-10">
    <form action="<?= site_url('/dashboard/pengumuman') ?>" method="get">
        <?= csrf_field() ?>
        <div class="flex gap-4">
            <label class="relative flex items-center gap-2 px-1 pl-5 rounded-full input border-[#6D7A75] h-14">
                <span class="absolute px-4 text-sm bg-white bottom-12">Cari</span>
                <input type="text" name="judul" class="grow" placeholder="Search" value="<?= $judul ?? '' ?>" />
            </label>
            <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14">
                <span class="absolute px-4 text-sm bg-white bottom-12">Tanggal Publikasi</span>
                <input type="date" name="tanggal" class="grow" placeholder="-- Semua --" value="<?= $tanggal ?? '' ?>" />
            </label>
            <button type="submit" class="btn bg-[#C4EDE1] text-[#2A5047] rounded-full px-8">Cari</button>
        </div>
    </form>
    <div>
        <button class="btn w-full justify-normal rounded-full bg-[#005B4D] font-normal text-white" onclick="my_modal_1.showModal()">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path d="M8.25 9.75H3.75V8.25H8.25V3.75H9.75V8.25H14.25V9.75H9.75V14.25H8.25V9.75Z" fill="white" />
                </svg>
            </div>
            Tambah Jenis Tagihan
        </button>
    </div>
</header>
<!-- Open the modal using ID.showModal() method -->
<dialog id="my_modal_1" class="modal">
    <div class="modal-box">
        <h3 class="text-lg font-bold">Tambah Pengumuman</h3>
        <form method="dialog">
            <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
        </form>
        <form action="<?= site_url('/dashboard/pengumuman') ?>" method="post" class="flex flex-col gap-5 py-10">
            <?= csrf_field() ?>
            <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] h-14 w-full"><span class="absolute px-4 text-sm bg-white bottom-12">Judul Pengumuman</span>
                <input type="text" name="judul" value="<?= set_value('judul') ?>" class="grow" />
            </label>
            <label class="relative flex items-center gap-2 px-5 rounded-2xl input border-[#6D7A75] h-32 w-full"><span class="absolute px-4 text-sm bg-white bottom-[7.5rem]">Deskripsi</span>
                <textarea class="bg-transparent grow" name="deskripsi" value="<?= set_value('deskripsi') ?>"></textarea>
            </label>
            <button type="submit" class="btn bg-[#C4EDE1] text-[#2A5047] rounded-full px-8">Simpan</button>
        </form>
    </div>
</dialog>
<section class="grid grid-flow-row-dense grid-cols-3 grid-rows-1 gap-10 px-10 mt-10">
    <article class="col-span-2 mb-10">
        <div class="overflow-x-auto bg-[#F0F5F1] rounded-2xl pb-5">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr class="text-[#005B4D] text-center text-wrap border-[#BCC9C4]">
                        <th>No</th>
                        <th>Judul Pengumuman</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Publikasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center text-[#005B4D] text-wrap">
                    <!-- row 1 -->
                    <?php
                    $currentPage = $pager->getCurrentPage();
                    $no = ($currentPage - 1) * $perPage + 1;
                    ?>
                    <?php foreach ($pengumuman as $pengum) : ?>
                        <tr>
                            <th><?= $no++; ?></th>
                            <td><?= $pengum['judul'] ?></td>
                            <td><?= $pengum['deskripsi'] ?></td>
                            <td><?= date('d / m / Y', strtotime($pengum['created_at'])) ?></td>
                            <td>
                                <div class="flex gap-4">
                                    <a href="#" class="edit-button" data-id="<?= $pengum['id']; ?>" data-judul="<?= $pengum['judul']; ?>" data-deskripsi="<?= $pengum['deskripsi']; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M5 19H6.425L16.2 9.225L14.775 7.8L5 17.575V19ZM3 21V16.75L16.2 3.575C16.4 3.39167 16.621 3.25 16.863 3.15C17.105 3.05 17.359 3 17.625 3C17.891 3 18.1493 3.05 18.4 3.15C18.6507 3.25 18.8673 3.4 19.05 3.6L20.425 5C20.625 5.18333 20.771 5.4 20.863 5.65C20.955 5.9 21.0007 6.15 21 6.4C21 6.66667 20.9543 6.921 20.863 7.163C20.7717 7.405 20.6257 7.62567 20.425 7.825L7.25 21H3ZM15.475 8.525L14.775 7.8L16.2 9.225L15.475 8.525Z" fill="#005B4D" />
                                        </svg>
                                    </a>
                                    <form action="<?= site_url('dashboard/pengumuman/' . $pengum['id']) ?>" method="post">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M7 21C6.45 21 5.97933 20.8043 5.588 20.413C5.19667 20.0217 5.00067 19.5507 5 19V6H4V4H9V3H15V4H20V6H19V19C19 19.55 18.8043 20.021 18.413 20.413C18.0217 20.805 17.5507 21.0007 17 21H7ZM17 6H7V19H17V6ZM9 17H11V8H9V17ZM13 17H15V8H13V17Z" fill="#BA1A1A" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('default', 'custom_pager') ?>
        </div>
    </article>
    <article class="mb-10">
        <div class="flex flex-col gap-10 bg-[#F0F5F1] p-5 rounded-2xl">
            <header>
                <h1 class="text-2xl font-bold text-[#005B4D]">Edit Pengumuman</h1>
            </header>
            <form action="<?= site_url('dashboard/pengumuman') ?>" method="post" class="flex flex-col gap-10 edit-form">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="id" value="">
                <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F0F5F1] bottom-12">Judul Tagihan</span>
                    <input type="text" class="grow" name="judul" value="<?= old('judul') ?>" />
                </label>
                <label class="relative flex items-center gap-2 px-5 rounded-2xl input border-[#6D7A75] bg-transparent h-32"><span class="absolute px-4 text-sm bg-[#F0F5F1] bottom-[7.5rem]">Keterangan</span>
                    <textarea class="bg-transparent grow" name="deskripsi" rows="5" value="<?= old('deskripsi') ?>"></textarea>
                </label>
                <div class="flex items-center justify-end">
                    <div class="flex items-center gap-4">
                        <button type="submit" class="btn bg-[#C4EDE1] text-[#2A5047] rounded-full px-8">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </article>
</section>
<?php if (session()->getFlashdata('success')) : ?>
    <div role="alert" class="fixed w-auto text-white alert alert-success bottom-10 right-10" id="alert">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-current shrink-0" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span><?= session()->getFlashdata('success'); ?></span>
    </div>
<?php elseif (session()->getFlashdata('error')) : ?>
    <div role="alert" class="fixed w-auto text-white alert alert-error bottom-10 right-10" id="alert">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-current shrink-0" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span> <?= session()->getFlashdata('error') ?></span>
    </div>
<?php endif; ?>
<?= $this->endSection(); ?>

<?= $this->section('script') ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editButtons = document.querySelectorAll('.edit-button');
        editButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent the default anchor click behavior
                const id = this.getAttribute('data-id');
                const judul = this.getAttribute('data-judul');
                const deskripsi = this.getAttribute('data-deskripsi');

                // Set values in the edit form
                const editForm = document.querySelector('.edit-form'); // Make sure the form has class="edit-form"
                editForm.querySelector('[name="id"]').value = id;
                editForm.querySelector('[name="judul"]').value = judul;
                editForm.querySelector('[name="deskripsi"]').value = deskripsi;
            });
        });
    });
    const alert = document.getElementById('alert');
    setTimeout(() => {
        alert.style.display = 'none';
    }, 3000);
</script>
<?= $this->endSection() ?>