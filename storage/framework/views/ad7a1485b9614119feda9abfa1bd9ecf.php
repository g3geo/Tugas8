<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Tambah Produk Baru</h2>

    <?php if($errors->any()): ?>
        <div style="color: red;">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('products.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>Nama:</label><br>
        <input type="text" name="name" value="<?php echo e(old('name')); ?>"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="description"><?php echo e(old('description')); ?></textarea><br><br>

        <label>Harga:</label><br>
        <input type="number" name="price" value="<?php echo e(old('price')); ?>"><br><br>

        <button type="submit">Simpan</button>
        <a href="<?php echo e(route('products.index')); ?>">Batal</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ravel\crudLaravel\resources\views/products/create.blade.php ENDPATH**/ ?>