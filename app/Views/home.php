<?= $this->extend('layout/template'); ?>
<?= $this->section('content-1'); ?>
<!-- navbar -->
<div class="sticky-top">
    <ul class="nav justify-content-center nav-underline bg-light p-2 border-bottom border-dark">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Untuk Anda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Mengikuti</a>
        </li>
    </ul>
</div>
<!-- isinya -->
<div class="container mt-3">
    <?php foreach ($posts as $post) : ?>
        <div class="row g-0">
            <div class="col-auto"><img src="/img/akun.jpeg" alt="" width="50"></div>
            <div class="col mx-1">
                <div class="row g-0">
                    <div class="col-12">
                        <?= $post['post_accountName'] ?><span class="text-secondary"><i class="bi bi-award-fill"> </i><small><?= $post['post_accountUserName']; ?></small></span>
                        <!-- if ada description post -->
                        <?php if ($post['description']) : ?>
                            <br><?= $post['description']; ?>
                        <?php endif; ?>
                        <br>
                        <img src="img/post.png" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <hr>
    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>
<?= $this->section('content-2'); ?>
<?= $this->include('homeSection2'); ?>
<?= $this->endSection(); ?>