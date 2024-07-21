<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('page_title', true) ?></title>
    <link rel="stylesheet" href="<?= base_url('dist/output.css') ?>">
</head>

<body class="bg-[#F5FBF7]">
    <?= $this->include('frontend/components/navbar') ?>
    <main class="container mx-auto px-24 mt-5">
        <?= $this->include('frontend/components/jumbotron') ?>
        <?= $this->renderSection('content') ?>
    </main>
    <?= $this->include('frontend/components/footer') ?>
</body>

</html>