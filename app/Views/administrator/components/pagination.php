<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation">
    <ul class="justify-center w-full mt-5 pagination join">
    <?php if ($pager->hasPrevious()) : ?>
        <li class="join-item btn">
            <a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                <span aria-hidden="true"><?= lang('Pager.first') ?></span>
            </a>
        </li>
        <li class="join-item btn">
            <a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
            </a>
        </li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link): ?>
        <li <?= $link['active'] ? 'class="join-item btn btn-active"' : 'class="join-item btn"' ?>>
            <a href="<?= $link['uri'] ?>">
                <?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>
</nav>