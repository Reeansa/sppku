<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('page_title', true) ?></title>
    <link rel="stylesheet" href="<?= base_url('dist/output.css') ?>">
</head>

<body class="bg-[#F5FBF7]">
    <?= $this->include('administrator/components/sidebar') ?>
    <?= $this->include('administrator/components/navbar') ?>
    
    <main class="pt-32 pl-64">
        <?= $this->renderSection('content') ?>
    </main>
</body>

</html>