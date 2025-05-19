<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $this->renderSection('title') ?: 'MyApp'; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body>
<!-- Header -->
<?= $this->include('layouts/header'); ?>
<!-- Main Content -->
<main class="container">
<?= $this->renderSection('content'); ?>
</main>
<!-- Footer -->
<?= $this->include('layouts/footer'); ?>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></s
cript>
</body>
</html>