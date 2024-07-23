<?= $this->extend('layout/template'); ?>
<?= $this->section('content-1'); ?>
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
<div class="container mt-3">
    <p class="text-center text-primary">Tampilkan 280 postingan</p>
</div>
<hr>
<?php for ($i = 0; $i < 5; $i++) : ?>
    <div class="container">
        <div class="row g-0">
            <div class="col-auto"><img src="/img/akun.jpeg" alt="" width="50"></div>
            <div class="col mx-1">
                <div class="row g-0">
                    <div class="col-12">
                        유주 YUJU <br>Capek nulisnya<br>
                        <img src="img/post.png" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
<?php endfor; ?>
<?php for ($i = 0; $i < 5; $i++) : ?>
    <div class="container">
        <div class="row g-0">
            <div class="col-auto"><img src="/img/akun.jpeg" alt="" width="50"></div>
            <div class="col mx-1">
                <div class="row g-0">
                    <div class="col-12">
                        유주 YUJU <br>
                        <img src="img/post.png" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
<?php endfor; ?>
<?= $this->endSection(); ?>
<?= $this->section('content-2'); ?>
<?= $this->include('homeSection2'); ?>
<?= $this->endSection(); ?>