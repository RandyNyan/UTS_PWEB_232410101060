<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Profil Pengguna</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-bold">Nama:</span>
                            <span><?php echo e($profil['nama']); ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-bold">NIM:</span>
                            <span><?php echo e($profil['nim']); ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-bold">Fakultas:</span>
                            <span><?php echo e($profil['fakultas']); ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-bold">Universitas:</span>
                            <span><?php echo e($profil['universitas']); ?></span>
                        </li>
                    </ul>

                    <?php if(isset($username)): ?>
                    <div class="mt-3 text-end text-muted small">
                        Login sebagai: <?php echo e($username); ?>

                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\UTS-Pweb\resources\views/profil.blade.php ENDPATH**/ ?>