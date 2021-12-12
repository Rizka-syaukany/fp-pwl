<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card mb-3" style="max-width: 540px;">
        <?php  foreach($detail as $d) ?>
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="/img/<?= $d['profile_user']; ?>" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $d['nama_user']; ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>