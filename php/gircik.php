<?php session_start(); ?>
<?php if (isset($_SESSION['username'])): ?>
        <a href="php/logout.php" class="nav-link">Çıkış yap</a>
<?php else: ?>
        <a href="giris.html" class="nav-link">Giriş yap</a>
<?php endif; ?>