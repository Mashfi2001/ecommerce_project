

<?php $__env->startSection('title', 'Home - TechStore'); ?>

<?php $__env->startSection('content'); ?>
    
    <div class="container py-4">
        <div class="row mb-4 align-items-center">
            <div class="col-md-8">
                <h2 class="fw-bold">All Products</h2>
            </div>
            <div class="col-md-4 text-end">
                <form method="GET" action="<?php echo e(url('/products')); ?>" class="d-flex">
                    <input type="text" name="search" class="form-control me-2" placeholder="Search products..." value="<?php echo e(request('search')); ?>">
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                </form>
                
            </div>
        </div>
        <div class="row mb-4 align-items-center">
            <div class="col-md-12 text-end">
                <select class="form-select w-auto d-inline-block">
                    <option>Default Sort</option>
                    <option>Sort By Price</option>
                    <option>Sort By Popularity</option>
                    <option>Sort By Rating</option>
                    <option>Sort By Sale</option>
                </select>
            </div>
        </div>
        <div class="row g-4">
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo e(asset(explode('|', $product->image)[0])); ?>" class="card-img-top" alt="<?php echo e($product->name); ?>" style="height:200px;object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-2"><?php echo e($product->name); ?></h5>
                            <div class="mb-2">
                                <span class="text-warning">
                                    <?php for($i = 1; $i <= 4; $i++): ?>
                                        <i class="fa fa-star"></i>
                                    <?php endfor; ?>
                                    <i class="fa fa-star-o"></i>
                                </span>
                            </div>
                            <p class="card-text fw-bold mb-2">৳ <?php echo e($product->price); ?></p>
                            <span class="badge bg-secondary mb-2">Stock: <?php echo e($product->amount); ?></span>
                            <a href="#" class="btn btn-primary mt-auto">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12">
                    <div class="alert alert-info">No products found.</div>
                </div>
            <?php endif; ?>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <?php echo e($products->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce_project\resources\views/products.blade.php ENDPATH**/ ?>