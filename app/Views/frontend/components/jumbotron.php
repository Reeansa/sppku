<header class="flex flex-col justify-center items-center w-full h-[500px] bg-cover bg-center bg-no-repeat gap-16 rounded-2xl" style="background-image: url('<?= base_url('assets/images/background.jpg') ?>');">
    <div class="flex flex-col text-center text-white gap-2">
        <p class="bg-[#C4EDE1] text-[#2A5047] px-3 py-1 mx-auto rounded-full">Manajemen berbasis Digital</p>
        <h1 class="text-5xl font-medium">SPP-Ku</h1>
        <p class="text-2xl">Sistem Pengelolaan dan Manajemen Sumbangan Pembinaan Pendidikan (SPP)<br>TK / TKIT Muslimat NU Babalanlor</p>
    </div>
    <form action="" class="flex justify-between items-center p-2 bg-[#DEE4E0] rounded-full w-1/2">
        <div class="flex flex-col w-full gap-2 px-4">
            <label for="nik" class="text-[#3D4946] text-xs">Cari NIK Anak</label>
            <input class="bg-transparent w-full text-[#171D1B]" type="number" name="nik" id="nik" placeholder="321xxx">
        </div>
        <button type="submit" class="flex bg-[#005B4D] items-center justify-center text-white px-6 py-3 rounded-full gap-2 w-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M14.7 15.75L9.975 11.025C9.6 11.325 9.16875 11.5625 8.68125 11.7375C8.19375 11.9125 7.675 12 7.125 12C5.7625 12 4.6095 11.528 3.666 10.584C2.7225 9.64 2.2505 8.487 2.25 7.125C2.2495 5.763 2.7215 4.61 3.666 3.666C4.6105 2.722 5.7635 2.25 7.125 2.25C8.4865 2.25 9.63975 2.722 10.5848 3.666C11.5298 4.61 12.0015 5.763 12 7.125C12 7.675 11.9125 8.19375 11.7375 8.68125C11.5625 9.16875 11.325 9.6 11.025 9.975L15.75 14.7L14.7 15.75ZM7.125 10.5C8.0625 10.5 8.8595 10.172 9.516 9.516C10.1725 8.86 10.5005 8.063 10.5 7.125C10.4995 6.187 10.1715 5.39025 9.516 4.73475C8.8605 4.07925 8.0635 3.751 7.125 3.75C6.1865 3.749 5.38975 4.07725 4.73475 4.73475C4.07975 5.39225 3.7515 6.189 3.75 7.125C3.7485 8.061 4.07675 8.858 4.73475 9.516C5.39275 10.174 6.1895 10.502 7.125 10.5Z" fill="white" />
            </svg>
            Cek SPP Anak
        </button>
    </form>
</header>
<hr class="mt-24">