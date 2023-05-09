<?

if (empty($_SESSION['user']) && empty($_SESSION['admin'])) {
?>
    <a href="/sign-in.php">
        <li>
            <button>Войти</button>
        </li>
    </a>
    <?
} else {
    if (isset($_SESSION['user'])) {
    ?>
        <a href="/profile.php">
            <li>
                <h3><?= $_SESSION['user']['name'] ?></h3>
                <img width="50" src="<?= $_SESSION['user']['avatar'] ?>" alt="No Ethernet">
            </li>
        </a>
    <?
    } else {
    ?>
        <a href="/admin.php">
            <li>
                <button><?= $_SESSION['admin']['name'] ?></button>
                <img width="50" src="<?= $_SESSION['admin']['avatar'] ?>" alt="">
            </li>
        </a>
<?
    }
}
?>