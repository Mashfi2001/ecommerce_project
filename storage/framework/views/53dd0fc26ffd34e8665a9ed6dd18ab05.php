

<?php $__env->startSection('title', 'Home - TechStore'); ?>

<?php $__env->startSection('content'); ?>
<section class="hero text-center text-md-start p-5 bg-light">
    <div class="container d-flex flex-column flex-md-row align-items-center">
        <div class="me-md-5 mb-4 mb-md-0">
            <h1 class="display-5 fw-bold">Upgrade Your Tech Life</h1>
            <p class="lead">Explore the latest in tech gear and gadgets at unbeatable prices.</p>
            <a href="/products" class="btn btn-primary btn-lg mt-3">Shop Now</a>
        </div>
        <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png" class="img-fluid w-50" alt="Hero Image">
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Featured Products</h2>
        <div class="row g-4">
            <?php for($i = 1; $i <= 6; $i++): ?>
            <div class="col-sm-6 col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://via.placeholder.com/300x200?text=Product+<?php echo e($i); ?>" class="card-img-top">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Tech Gadget <?php echo e($i); ?></h5>
                        <p class="card-text">High performance, budget-friendly.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="text-primary fw-bold">$499</span>
                            <a href="#" class="btn btn-sm btn-outline-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce_project\resources\views/home.blade.php ENDPATH**/ ?>