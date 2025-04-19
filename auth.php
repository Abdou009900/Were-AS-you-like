<?php
// ملف بسيط لتسجيل الدخول (محاكاة)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
echo 'مرحبا، ' . htmlspecialchars($_POST['username']);
}
?>