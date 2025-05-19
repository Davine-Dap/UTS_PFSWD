<?= $this->extend('layouts/layout') ?>
<?= $this->section('title') ?>Dashboard<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="mt-5">
<h3><strong>Selamat datang, <?= esc(session('user_name')); ?>!</strong></h3>
<p class="mt-2">Anda berhasil login sebagai admin.</p>
<a href="<?= base_url('logout'); ?>" class="btn btn-danger mt-3">Logout</a>
</div>
<?= $this->endSection() ?>