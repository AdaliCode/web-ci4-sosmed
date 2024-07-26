<div class="py-2 px-4 sticky-top bg-light">
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    </form>
</div>
<div class="container pb-3">
    <div class="px-4 mt-3">
        <div class="card mt-3 border border-dark rounded">
            <div class="card-body">
                <h5>Berlangganan Premium</h5>
                <p>Berlangganan untuk mengakses fitur-fitur baru dan, jika memenuhi syarat, menerima bagi hasil dari pendapatan iklan.</p>
                <a href="" class="btn btn-primary rounded">Berlangganan</a>
            </div>
        </div>
        <div class="card mt-3 border border-dark rounded" id="tren-untuk-anda">
            <div class="card-body">
                <h5>Tren untuk Anda</h5>
                <ul class="list-group list-group-flush mb-3">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <li class="list-group-item border-bottom border-dark">
                            <small>Hanya di X . Populer</small><br>
                            <?php if ($i == 0) : ?>
                                qqq<br>
                                16,4rb posts
                            <?php else : ?>
                                #viralvideos<br>
                                16,4rb posts
                            <?php endif; ?>
                        </li>
                    <?php endfor; ?>
                </ul>
                <a href="" class="text-decoration-none">Tampilkan lebih banyak</a>
            </div>
        </div>
        <div class="card mt-3 border border-dark rounded" id="untuk-diikuti">
            <div class="card-body">
                <h5>Untuk diikuti</h5>
                <ul class="list-group list-group-flush mb-3">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <li class="list-group-item border-bottom border-dark">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="row align-items-center g-0">
                                        <div class="col-auto"><img src="img/akun.jpeg" alt="" width="50"></div>
                                        <div class="col mx-2"> SMTOWN<br>@SMTOWNGLOBAL</div>
                                    </div>
                                </div>
                                <div class="col text-end">
                                    <a href="" class="btn btn-secondary">Follow</a>
                                </div>
                            </div>
                        </li>
                    <?php endfor; ?>
                </ul>
                <a href="" class="text-decoration-none">Tampilkan lebih banyak</a>
            </div>
        </div>
        <div class="mt-3">
            <a href="" class="text-decoration-none text-secondary">Persyaratan Layanan</a>
            <a href="" class="text-decoration-none text-secondary">Kebijakan Privasi</a>
            <a href="" class="text-decoration-none text-secondary"> Kebijakan Penggunaan Kuki</a>
            <a href="" class="text-decoration-none text-secondary"> Aksesibilitas</a>
            <a href="" class="text-decoration-none text-secondary"> Informasi iklan</a>
            <a href="" class="text-decoration-none text-secondary">Lainnya</a>
            <p> © 2024 X Corp</p>
        </div>
    </div>
</div>