<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg mt-5">
                <div class="card-body p-5">
                    <?php if (session()->getFlashdata('msg')): ?>
                        <div class="alert alert-danger text-center">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif; ?>
                    <img src="<?= base_url('assets/images/unpri.png') ?>" alt="UNPRI Logo" width="150">
                    <h4 class="text-left mb-4">Please sign in</h4>
                    
                    <form action="<?= site_url('do-login') ?>" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>