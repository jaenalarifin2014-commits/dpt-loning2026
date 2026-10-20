<?php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

echo "<h2>Memulai Proses Migrasi...</h2><pre>";
$kernel->call('migrate', ['--force' => true]);
echo $kernel->output();
echo "</pre><h2>Selesai!</h2>";<?php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

echo "<h2>Memulai Proses Migrasi...</h2><pre>";
$kernel->call('migrate', ['--force' => true]);
echo $kernel->output();
echo "</pre><h2>Selesai!</h2>";