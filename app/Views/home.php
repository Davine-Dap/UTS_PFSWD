<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5 text-left">
    <h1>Welcome to MyApp</h1>
    <p class="lead">This is the homepage. Enjoy learning CodeIgniter 4!</p>
    <div class="mt-4">
        <a href="<?= site_url('login') ?>" class="btn btn-primary btn-lg">Go to Login</a>
    </div>
</div>
<?= $this->endSection() ?>