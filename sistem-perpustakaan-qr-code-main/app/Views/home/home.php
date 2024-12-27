<?= $this->extend('layouts/home_layout') ?>

<?= $this->section('head') ?>
<title>Home</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="px-4 pt-5 my-5 text-center border-bottom">
  <h1 class="display-4 fw-bold text-body-emphasis">Faizal<span class="text-primary">Book</span></h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Temukan buku-buku menarik untuk memperluas pengetahuan dan imajinasi Anda. FaizalBook adalah teman setia pencinta buku dan pembelajar di mana saja, kapan saja.</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      <a href="<?= base_url('login'); ?>" class="btn btn-primary btn-lg px-4 me-sm-3">Login petugas</a>
      <a href="<?= base_url('book'); ?>" class="btn btn-outline-secondary btn-lg px-4">Daftar buku</a>
    </div>
  </div>
</div>
<?= $this->endSection() ?>