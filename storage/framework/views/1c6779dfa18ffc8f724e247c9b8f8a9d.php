<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title', 'TechStore'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php echo $__env->make('layout.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main class="min-vh-100">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script>
    const loginForm = document.getElementById("LoginForm");
    const regForm = document.getElementById("RegForm");
    const indicator = document.getElementById("Indicator");

    function login() {
        regForm.style.display = "none";
        loginForm.style.display = "block";
        indicator.style.transform = "translateX(100px)";
    }

    function register() {
        regForm.style.display = "block";
        loginForm.style.display = "none";
        indicator.style.transform = "translateX(0px)";
    }
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\ecommerce_project\resources\views/layout/master.blade.php ENDPATH**/ ?>