<?php session_start();?>
<?php if (isset($_SESSION['username'])): ?>
    <a class="nav-link">Merhaba, <?php echo htmlspecialchars($_SESSION['username']);?> </a>
<?php else: ?>
<?php endif; ?>