<?= $this->extend('administrator/layout/app') ?>
<?= $this->section('content') ?>
<header class="px-10">
    <form action="" method="post" class="flex items-center justify-between">
        <?= csrf_field() ?>
        <div class="flex gap-4">
            <label class="relative flex items-center gap-2 px-1 pl-5 rounded-full input border-[#6D7A75] h-14"><span class="absolute px-4 text-sm bg-white bottom-12">Cari</span>
                <input type="text" class="grow" placeholder="Search" />
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" class="bg-[#C4EDE1] p-3 rounded-full">
                    <path d="M19.6 21L13.3 14.7C12.8 15.1 12.225 15.4167 11.575 15.65C10.925 15.8833 10.2333 16 9.5 16C7.68333 16 6.146 15.3707 4.888 14.112C3.63 12.8533 3.00067 11.316 3 9.5C2.99933 7.684 3.62867 6.14667 4.888 4.888C6.14733 3.62933 7.68467 3 9.5 3C11.3153 3 12.853 3.62933 14.113 4.888C15.373 6.14667 16.002 7.684 16 9.5C16 10.2333 15.8833 10.925 15.65 11.575C15.4167 12.225 15.1 12.8 14.7 13.3L21 19.6L19.6 21ZM9.5 14C10.75 14 11.8127 13.5627 12.688 12.688C13.5633 11.8133 14.0007 10.7507 14 9.5C13.9993 8.24933 13.562 7.187 12.688 6.313C11.814 5.439 10.7513 5.00133 9.5 5C8.24867 4.99867 7.18633 5.43633 6.313 6.313C5.43967 7.18967 5.002 8.252 5 9.5C4.998 10.748 5.43567 11.8107 6.313 12.688C7.19033 13.5653 8.25267 14.0027 9.5 14Z" fill="#2A5047" />
                </svg>
            </label>
        </div>
    </form>
</header>
<section class="grid grid-flow-row-dense grid-cols-3 grid-rows-1 gap-10 px-10 mt-10">
    <article class="col-span-2">
        <div class="overflow-x-auto bg-[#F0F5F1] rounded-2xl">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr class="text-[#005B4D] text-center text-wrap border-[#BCC9C4]">
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center text-[#005B4D] text-wrap">
                    <!-- row 1 -->
                    <tr>
                        <th>1</th>
                        <td>SPP</td>
                        <td class="flex items-center gap-4">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M5 19H6.425L16.2 9.225L14.775 7.8L5 17.575V19ZM3 21V16.75L16.2 3.575C16.4 3.39167 16.621 3.25 16.863 3.15C17.105 3.05 17.359 3 17.625 3C17.891 3 18.1493 3.05 18.4 3.15C18.6507 3.25 18.8673 3.4 19.05 3.6L20.425 5C20.625 5.18333 20.771 5.4 20.863 5.65C20.955 5.9 21.0007 6.15 21 6.4C21 6.66667 20.9543 6.921 20.863 7.163C20.7717 7.405 20.6257 7.62567 20.425 7.825L7.25 21H3ZM15.475 8.525L14.775 7.8L16.2 9.225L15.475 8.525Z" fill="#005B4D" />
                                </svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M7 21C6.45 21 5.97933 20.8043 5.588 20.413C5.19667 20.0217 5.00067 19.5507 5 19V6H4V4H9V3H15V4H20V6H19V19C19 19.55 18.8043 20.021 18.413 20.413C18.0217 20.805 17.5507 21.0007 17 21H7ZM17 6H7V19H17V6ZM9 17H11V8H9V17ZM13 17H15V8H13V17Z" fill="#BA1A1A" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="justify-center w-full join">
                <button class="join-item btn">1</button>
                <button class="join-item btn btn-active">2</button>
                <button class="join-item btn">3</button>
                <button class="join-item btn">4</button>
            </div>
        </div>
    </article>
    <article class="flex flex-col gap-10 bg-[#F0F5F1] p-5 rounded-2xl">
        <header>
            <h1 class="text-2xl font-bold text-[#005B4D]">Atur Kelas</h1>
        </header>
        <form action="" method="post" class="flex flex-col gap-10">
            <label class="relative flex items-center gap-2 px-5 rounded-full input border-[#6D7A75] bg-transparent h-14"><span class="absolute px-4 text-sm bg-[#F0F5F1] bottom-12">Nama Kelas</span>
                <input type="text" class="grow" />
            </label>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <a href="" class="text-[#005B4D]">Batal</a>
                    <button type="submit" class="btn bg-[#C4EDE1] text-[#2A5047] rounded-full px-8">Simpan</button>
                </div>
            </div>
        </form>
    </article>
</section>
<?= $this->endSection(); ?>