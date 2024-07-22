<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('page_title', true) ?></title>
    <link rel="stylesheet" href="<?= base_url('dist/output.css') ?>">
</head>

<body>
    <main class="flex items-center justify-center w-full h-screen">
        <?= $this->renderSection('content') ?>
    </main>
</body>

</html>