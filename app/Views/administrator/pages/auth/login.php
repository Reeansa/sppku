<?= $this->extend('administrator/layout/auth') ?>
<?= $this->section('content') ?>
<div class="shadow-xl card bg-base-100 w-96">
    <div class="card-body">
        <figure>
            <img src="<?= base_url('assets/logo/logo.png') ?>" alt="logo" class="w-20 h-20 mx-auto rounded-full" />
        </figure>
        <h2 class="justify-center mb-5 text-center card-title">Selamat datang <br> TK Muslimat NU Babalanlor</h2>
        <form action="" method="post">
            <?= csrf_field() ?>
            <div class="flex flex-col gap-4">
                <label class="flex items-center gap-2 input input-bordered">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                    </svg>
                    <input type="text" class="grow" placeholder="Username" />
                </label>
                <label class="flex items-center gap-2 input input-bordered">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" />
                    </svg>
                    <input type="password" class="grow" placeholder="password" />
                </label>
            </div>
            <div class="justify-end mt-5 card-actions">
                <button class="btn btn-primary">Masuk</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>