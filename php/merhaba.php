<?php session_start(); ?>
<?php if (isset($_SESSION['username'])): ?>
    <a>Merhaba, <?php echo htmlspecialchars($_SESSION['username']);?> </a>
<?php else: ?>
<?pphp endif; ?>