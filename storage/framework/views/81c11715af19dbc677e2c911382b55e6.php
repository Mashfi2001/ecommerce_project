<form method="POST" action="/verify-otp">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="user_id" value="<?php echo e(session('user_id')); ?>">
    <input type="text" name="otp" class="form-control" placeholder="Enter OTP">
    <button type="submit" class="btn btn-primary">Verify OTP</button>
</form><?php /**PATH C:\xampp\htdocs\ecommerce_project\resources\views/verify_otp.blade.php ENDPATH**/ ?>