<?php
declare(strict_types=1);

$site = require __DIR__ . '/config.php';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/header.php';
?>
<main>
    <section class="hero" id="beranda">
        <img class="hero-logo" src="assets/img/logo.png" alt="Logo <?= e($site['nama']) ?>" width="150" height="150">
        <h1><?= e($site['nama']) ?></h1>
        <p class="tagline"><?= e($site['tagline']) ?></p>
        <div class="btn-group">
            <a class="btn btn-ig" href="<?= e($site['links']['instagram']) ?>" target="_blank" rel="noopener">Instagram</a>
            <a class="btn btn-fb" href="<?= e($site['links']['facebook']) ?>" target="_blank" rel="noopener">Facebook</a>
            <a class="btn btn-map" href="<?= e($site['links']['maps']) ?>" target="_blank" rel="noopener">Lihat di Google Maps</a>
            <?php if ($site['whatsapp'] !== ''): ?>
                <a class="btn btn-wa" href="<?= e(wa_link($site['whatsapp'], 'Halo, saya mau pesan nasi uduk.')) ?>" target="_blank" rel="noopener">WhatsApp</a>
            <?php endif; ?>
        </div>
    </section>

    <section class="section" id="tentang">
        <h2>Tentang Kami</h2>
        <p><?= e($site['tentang']) ?></p>
    </section>

    <section class="section alt" id="menu">
        <h2>Menu</h2>
        <div class="promo">
            <span class="promo-label">Paket Hemat</span>
            <h3><?= e($site['promo']['judul']) ?></h3>
            <p class="price"><?= e($site['promo']['harga']) ?></p>
        </div>
        <h3 class="sub">Pilihan Lauk</h3>
        <ul class="chips">
            <?php foreach ($site['lauk'] as $lauk): ?>
                <li><?= e($lauk) ?></li>
            <?php endforeach; ?>
        </ul>
        <p class="note">Setiap porsi dilengkapi <?= e(implode(' dan ', array_map('strtolower', $site['pelengkap']))) ?>.</p>
    </section>

    <section class="section" id="pesan">
        <h2>Cara Pesan</h2>
        <ol class="steps">
            <?php foreach ($site['cara_pesan'] as $i => $langkah): ?>
                <li><span class="num"><?= $i + 1 ?></span><?= e($langkah) ?></li>
            <?php endforeach; ?>
        </ol>
    </section>

    <section class="section alt" id="info">
        <h2>Informasi</h2>
        <dl class="info">
            <dt>Jam Buka</dt><dd><?= e($site['jam_buka']) ?></dd>
            <dt>Pembayaran</dt><dd><?= e($site['pembayaran']) ?></dd>
            <?php if ($site['alamat'] !== ''): ?>
                <dt>Alamat</dt><dd><?= e($site['alamat']) ?></dd>
            <?php endif; ?>
            <?php if ($site['whatsapp'] !== ''): ?>
                <dt>WhatsApp</dt><dd><?= e($site['whatsapp']) ?></dd>
            <?php endif; ?>
        </dl>
        <a class="btn btn-map" href="<?= e($site['links']['maps']) ?>" target="_blank" rel="noopener">Buka Lokasi di Google Maps</a>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
