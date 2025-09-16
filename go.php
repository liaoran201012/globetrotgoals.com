<?php
/*  go.php 放在 C.com 根目录  */
if (empty($_GET['travel'])) {
    header('HTTP/1.1 404 Not Found');
    exit;
}
/* 302 跳到最终页，浏览器会把 C.com 当成 Referer */
header('Location: https://discoverdestinations.it.com/?utm_source=https%3A%2F%2Fwww.globetrotgoals.com%2F', true, 302);
exit;