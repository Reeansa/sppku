<?= $this->extend('administrator/layout/app') ?>
<?= $this->section('content') ?>
<header class="px-10">
    <h1 class="text-[#005B4D] font-bold text-2xl">Selamat Datang!</h1>
    <p class="mt-2">Dashboard administrator Tata Usaha.</p>
</header>
<section class="grid grid-flow-row-dense grid-cols-4 grid-rows-1 gap-10 px-10 mt-10">
    <article class="col-span-3">
        <section class="flex flex-wrap gap-5">
            <article class="flex items-center justify-between border-2 border-solid w-96 rounded-2xl">
                <div class="pl-4">
                    <img class="w-10 h-10" src="<?= base_url('assets/logo/logo.png') ?>" alt="TK Muslimat NU Babalanlor">
                </div>
                <div>
                    <h2 class="font-bold">Siswa</h2>
                    <p>20 SIswa Aktif</p>
                </div>
                <div>
                    <img class="w-20 h-20 rounded-r-2xl" src="<?= base_url('assets/icons/media.png') ?>" alt="Siswa Aktif">
                </div>
            </article>
            <article class="flex items-center justify-between border-2 border-solid w-96 rounded-2xl">
                <div class="pl-4">
                    <img class="w-10 h-10" src="<?= base_url('assets/logo/logo.png') ?>" alt="TK Muslimat NU Babalanlor">
                </div>
                <div>
                    <h2 class="font-bold">Siswa</h2>
                    <p>20 SIswa Aktif</p>
                </div>
                <div>
                    <img class="w-20 h-20 rounded-r-2xl" src="<?= base_url('assets/icons/media.png') ?>" alt="Siswa Aktif">
                </div>
            </article>
            <article class="flex items-center justify-between border-2 border-solid w-96 rounded-2xl">
                <div class="pl-4">
                    <img class="w-10 h-10" src="<?= base_url('assets/logo/logo.png') ?>" alt="TK Muslimat NU Babalanlor">
                </div>
                <div>
                    <h2 class="font-bold">Siswa</h2>
                    <p>20 SIswa Aktif</p>
                </div>
                <div>
                    <img class="w-20 h-20 rounded-r-2xl" src="<?= base_url('assets/icons/media.png') ?>" alt="Siswa Aktif">
                </div>
            </article>
        </section>
    </article>
    <article class="flex flex-col gap-5 p-4 border-2 border-solid rounded-2xl">
        <header>
            <figure class="flex items-center justify-center gap-4">
                <img class="w-10 h-10" src="<?= base_url('assets/logo/logo.png') ?>" alt="TK Muslimat NU Babalanlor">
                <figcaption>
                    <h1 class="font-bold">TK / TKIT Muslimat NU Babalanlor</h1>
                    <p>Tahun Ajaran 2024/2025</p>
                </figcaption>
            </figure>
        </header>
        <div>
            <h2 class="font-semibold">Kepala Sekolah</h2>
            <p>Ibu Nining Muliasih</p>
        </div>
        <div class="flex flex-col items-center justify-center gap-4">
            <a href="" class="btn w-full justify-normal rounded-full bg-[#C4EDE1] text-[#2A5047] font-normal">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M9 15.75V14.25H14.25V3.75H9V2.25H14.25C14.6625 2.25 15.0158 2.397 15.3098 2.691C15.6038 2.985 15.7505 3.338 15.75 3.75V14.25C15.75 14.6625 15.6033 15.0158 15.3098 15.3098C15.0163 15.6038 14.663 15.7505 14.25 15.75H9ZM7.5 12.75L6.46875 11.6625L8.38125 9.75H2.25V8.25H8.38125L6.46875 6.3375L7.5 5.25L11.25 9L7.5 12.75Z" fill="#2A5047" />
                    </svg>
                </div>
                Website Sistem Informasi
            </a>
                <a href="" class="btn w-full justify-normal rounded-full bg-transparent  border-[#2A5047] text-[#2A5047] font-normal">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M0.386307 8.89228C0.385886 10.4046 0.784034 11.8813 1.54111 13.1829L0.313904 17.63L4.89936 16.4367C6.16765 17.122 7.58866 17.481 9.03269 17.4811H9.03649C13.8035 17.4811 17.684 13.6312 17.686 8.89905C17.6869 6.606 16.788 4.44977 15.1548 2.82754C13.5218 1.20545 11.3501 0.311654 9.03614 0.310608C4.26854 0.310608 0.388346 4.16038 0.386378 8.89228" fill="#005B4D" />
                        <path d="M0.0774736 8.88949C0.0769815 10.4563 0.4894 11.9858 1.27347 13.334L0.0022583 17.9405L4.75214 16.7044C6.06088 17.4126 7.5344 17.786 9.03379 17.7866H9.03765C13.9757 17.7866 17.9956 13.7981 17.9977 8.8966C17.9985 6.52116 17.0673 4.28742 15.3757 2.60707C13.6839 0.92693 11.4345 0.000976744 9.03765 0C4.09875 0 0.0794418 3.98791 0.0774736 8.88949ZM2.9062 13.1018L2.72885 12.8223C1.9833 11.6458 1.58979 10.2862 1.59035 8.89005C1.5919 4.81598 4.93258 1.5014 9.04046 1.5014C11.0298 1.50223 12.8994 2.27191 14.3055 3.66837C15.7116 5.06498 16.4854 6.92149 16.4849 8.89605C16.483 12.9701 13.1423 16.2851 9.03765 16.2851H9.0347C7.69819 16.2844 6.3874 15.9282 5.24427 15.255L4.97223 15.0949L2.15356 15.8283L2.9062 13.1018Z" fill="white" />
                        <path d="M6.79826 5.17313C6.63054 4.80315 6.45403 4.79569 6.29453 4.7892C6.16392 4.78362 6.01462 4.78403 5.86545 4.78403C5.71614 4.78403 5.47356 4.83978 5.26851 5.06199C5.06325 5.28441 4.48486 5.82189 4.48486 6.91508C4.48486 8.00827 5.28714 9.06483 5.39898 9.21322C5.51095 9.36134 6.94778 11.6765 9.22335 12.5672C11.1146 13.3073 11.4994 13.1601 11.9099 13.123C12.3204 13.086 13.2345 12.5856 13.421 12.0668C13.6076 11.548 13.6076 11.1033 13.5517 11.0104C13.4957 10.9178 13.3464 10.8622 13.1225 10.7511C12.8986 10.64 11.7979 10.1024 11.5927 10.0282C11.3874 9.95415 11.2382 9.91717 11.0889 10.1397C10.9396 10.3618 10.5109 10.8622 10.3802 11.0104C10.2497 11.1589 10.119 11.1774 9.89516 11.0662C9.67113 10.9548 8.95012 10.7204 8.0947 9.9635C7.42915 9.37452 6.97983 8.6472 6.84922 8.42471C6.71862 8.20257 6.83524 8.08215 6.9475 7.97143C7.04809 7.87187 7.17145 7.71196 7.2835 7.58227C7.39513 7.4525 7.43239 7.35992 7.50704 7.21173C7.58176 7.06341 7.54437 6.93364 7.48848 6.8225C7.43239 6.71136 6.99733 5.61245 6.79826 5.17313Z" fill="white" />
                    </svg>
                </div>
                081309239812 (Mu’amalatun Kholilah)
            </a>
        </div>
    </article>
</section>
<?= $this->endSection(); ?>