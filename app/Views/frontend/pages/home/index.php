<?= $this->extend('frontend/layout/app') ?>
<?= $this->section('content') ?>
<article class="grid grid-flow-row-dense grid-cols-4 grid-rows-1 gap-10 mt-24">
    <section class="col-span-3">
        <article>
            <header class="text-center">
                <h1 class="font-semibold text-[#005B4D] text-2xl">Informasi Keuangan</h1>
                <p class="text-[#3D4946] mt-4"><b>TK / TKIT Muslimat NU Babalanlor</b><br>Tahun Ajaran 2024/2025</p>
            </header>
            <div class="collapse collapse-arrow text-[#005B4D] mt-5">
                <input class="border-b-2 border-[#005B4D]" type="radio" name="my-accordion-2" checked="checked" />
                <div class="text-xl font-medium collapse-title">Uang Pangkal</div>
                <div class="collapse-content bg-[#F0F5F1]">
                    <p>Siswa/i akan dibebankan uang pangkal sekolah sebesar <br><b>Rp. 2.000.000</b> yang dapat dibayar mencicil selama siswa/i aktif belajar di sekolah.</p>
                </div>
            </div>
            <div class="collapse collapse-arrow text-[#005B4D]">
                <input class="border-b-2 border-[#005B4D]" type="radio" name="my-accordion-2" />
                <div class="text-xl font-medium collapse-title">SPP</div>
                <div class="collapse-content bg-[#F0F5F1]">
                    <p>Siswa/i kelas 1 hingga kelas 6 dibebankan SPP sebesar <b>Rp. 100.000</b> per Bulan.</p>
                </div>
            </div>
        </article>
        <article class="mt-10">
            <header class="text-center">
                <h1 class="font-semibold text-[#005B4D] text-2xl">Alur Pembayaran SPP</h1>
                <p class="text-[#3D4946] mt-4"><b>TK / TKIT Muslimat NU Babalanlor</b><br>Tahun Ajaran 2024/2025</p>
            </header>
            <figure class="mt-5 rounded-xl">
                <img src="<?= base_url('assets/images/alur-pembayaran-spp.png') ?>" alt="Alur Pembayaran SPP">
            </figure>
        </article>
    </section>
    <section class="flex flex-col gap-4">
        <header class="flex items-center gap-2 text-2xl">
            <div class="rounded-full bg-[#005B4D] p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M2 10C2 8.33333 2.371 6.80433 3.113 5.413C3.855 4.02166 4.85067 2.86733 6.1 1.95L7.275 3.55C6.275 4.28333 5.47933 5.20833 4.888 6.325C4.29667 7.44166 4.00067 8.66666 4 10H2ZM20 10C20 8.66666 19.704 7.44166 19.112 6.325C18.52 5.20833 17.7247 4.28333 16.726 3.55L17.901 1.95C19.151 2.86666 20.147 4.021 20.889 5.413C21.631 6.805 22.0013 8.334 22 10H20ZM4 19V17H6V10C6 8.61666 6.41667 7.38766 7.25 6.313C8.08333 5.23833 9.16667 4.534 10.5 4.2V3.5C10.5 3.08333 10.646 2.72933 10.938 2.438C11.23 2.14666 11.584 2.00066 12 2C12.416 1.99933 12.7703 2.14533 13.063 2.438C13.3557 2.73066 13.5013 3.08466 13.5 3.5V4.2C14.8333 4.53333 15.9167 5.23766 16.75 6.313C17.5833 7.38833 18 8.61733 18 10V17H20V19H4ZM12 22C11.45 22 10.9793 21.8043 10.588 21.413C10.1967 21.0217 10.0007 20.5507 10 20H14C14 20.55 13.8043 21.021 13.413 21.413C13.0217 21.805 12.5507 22.0007 12 22ZM8 17H16V10C16 8.9 15.6083 7.95833 14.825 7.175C14.0417 6.39166 13.1 6 12 6C10.9 6 9.95833 6.39166 9.175 7.175C8.39167 7.95833 8 8.9 8 10V17Z" fill="white" />
                </svg>
            </div>
            <h1 class="text-[#005B4D] font-bold">Pengumuman</h1>
        </header>
        <article class="flex flex-col gap-5 border-solid border-2 border-[#BCC9C4] rounded-xl p-4">
            <header class="flex justify-between">
                <div>
                    <p class="font-bold text-[#171D1B]">2024 - 07 - 17</p>
                    <p class="text-[#171D1B]">administrator</p>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12 20C11.45 20 10.9792 19.8042 10.5875 19.4125C10.1958 19.0208 10 18.55 10 18C10 17.45 10.1958 16.9792 10.5875 16.5875C10.9792 16.1958 11.45 16 12 16C12.55 16 13.0208 16.1958 13.4125 16.5875C13.8042 16.9792 14 17.45 14 18C14 18.55 13.8042 19.0208 13.4125 19.4125C13.0208 19.8042 12.55 20 12 20ZM12 14C11.45 14 10.9792 13.8042 10.5875 13.4125C10.1958 13.0208 10 12.55 10 12C10 11.45 10.1958 10.9792 10.5875 10.5875C10.9792 10.1958 11.45 10 12 10C12.55 10 13.0208 10.1958 13.4125 10.5875C13.8042 10.9792 14 11.45 14 12C14 12.55 13.8042 13.0208 13.4125 13.4125C13.0208 13.8042 12.55 14 12 14ZM12 8C11.45 8 10.9792 7.80417 10.5875 7.4125C10.1958 7.02083 10 6.55 10 6C10 5.45 10.1958 4.97917 10.5875 4.5875C10.9792 4.19583 11.45 4 12 4C12.55 4 13.0208 4.19583 13.4125 4.5875C13.8042 4.97917 14 5.45 14 6C14 6.55 13.8042 7.02083 13.4125 7.4125C13.0208 7.80417 12.55 8 12 8Z" fill="#3D4946" />
                    </svg>
                </div>
            </header>
            <article>
                <header>
                    <h1 class="font-bold text-[#171D1B]">Tagihan SPP Anak</h1>
                    <p class="text-[#171D1B]">SPP - T.A 2024/2025 Genap</p>
                </header>
                <p class="text-[#171D1B] mt-4">Segera lakukan pembayaran SPP peride akademik 2024/2025 dan lakukan konfirmasi apabila telah dilakukan.</p>
            </article>
        </article>
        <article>
            <header class="flex items-center gap-2 text-2xl">
                <div class="rounded-full bg-[#005B4D] p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M2 10C2 8.33335 2.371 6.80435 3.113 5.41301C3.855 4.02168 4.85067 2.86735 6.1 1.95001L7.275 3.55001C6.275 4.28335 5.47933 5.20835 4.888 6.32501C4.29667 7.44168 4.00067 8.66668 4 10H2ZM20 10C20 8.66668 19.704 7.44168 19.112 6.32501C18.52 5.20835 17.7247 4.28335 16.726 3.55001L17.901 1.95001C19.151 2.86668 20.147 4.02101 20.889 5.41301C21.631 6.80501 22.0013 8.33401 22 10H20ZM4 19V17H6V10C6 8.61668 6.41667 7.38768 7.25 6.31301C8.08333 5.23835 9.16667 4.53401 10.5 4.20001V3.50001C10.5 3.08335 10.646 2.72935 10.938 2.43801C11.23 2.14668 11.584 2.00068 12 2.00001C12.416 1.99935 12.7703 2.14535 13.063 2.43801C13.3557 2.73068 13.5013 3.08468 13.5 3.50001V4.20001C14.8333 4.53335 15.9167 5.23768 16.75 6.31301C17.5833 7.38835 18 8.61735 18 10V17H20V19H4ZM12 22C11.45 22 10.9793 21.8043 10.588 21.413C10.1967 21.0217 10.0007 20.5507 10 20H14C14 20.55 13.8043 21.021 13.413 21.413C13.0217 21.805 12.5507 22.0007 12 22ZM8 17H16V10C16 8.90001 15.6083 7.95835 14.825 7.17501C14.0417 6.39168 13.1 6.00001 12 6.00001C10.9 6.00001 9.95833 6.39168 9.175 7.17501C8.39167 7.95835 8 8.90001 8 10V17Z" fill="white" />
                    </svg>
                </div>
                <h1 class="text-[#005B4D] font-bold">Galeri</h1>
            </header>
            <article class="mt-5 carousel rounded-box">
                <div class="w-full carousel-item">
                    <img src="<?= base_url('assets/images/IMG-20240717-WA0021.jpg')?>" class="w-full" alt="Galeri Kegiatan" />
                </div>
                <div class="w-full carousel-item">
                    <img src="<?= base_url('assets/images/IMG-20240717-WA0043.jpg')?>" class="w-full" alt="Galeri Kegiatan" />
                </div>
                <div class="w-full carousel-item">
                    <img src="<?= base_url('assets/images/IMG-20240717-WA0044.jpg')?>" class="w-full" alt="Galeri Kegiatan" />
                </div>
            </article>
        </article>
    </section>
</article>
<?= $this->endSection() ?>