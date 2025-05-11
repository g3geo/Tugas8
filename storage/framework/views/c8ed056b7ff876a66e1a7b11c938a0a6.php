<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Daftar Produk</h2>

    <?php if(session('success')): ?>
        <div style="color: green;"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <a href="<?php echo e(route('products.create')); ?>">Tambah Produk</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td>Rp<?php echo e(number_format($product->price, 0, ',', '.')); ?></td>
                <td>
                    <a href="<?php echo e(route('products.edit', $product)); ?>">Edit</a> |
                    <form action="<?php echo e(route('products.destroy', $product)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><td colspan="4">Belum ada produk.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ravel\crudLaravel\resources\views/products/index.blade.php ENDPATH**/ ?>