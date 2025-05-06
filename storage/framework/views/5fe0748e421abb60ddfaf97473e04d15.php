<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if(isset($username)): ?>
        <div class="alert alert-primary mb-4">
            <h4 class="mb-0">Selamat datang, <?php echo e($username); ?>!</h4>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm mb-5">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Jadwal Kuliah Semester Genap 2023/2024</h5>
            <span class="badge bg-light text-dark">Kelas A</span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th width="5%">No</th>
                            <th width="10%">Hari</th>
                            <th width="15%">Jam</th>
                            <th width="10%">Kode</th>
                            <th width="25%">Mata Kuliah</th>
                            <th width="5%">Kelas</th>
                            <th width="30%">Ruang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item['no']); ?></td>
                            <td><strong><?php echo e($item['hari']); ?></strong></td>
                            <td><?php echo e($item['jam']); ?></td>
                            <td><?php echo e($item['kode']); ?></td>
                            <td><?php echo e($item['matakuliah']); ?></td>
                            <td class="text-center"><?php echo e($item['kelas']); ?></td>
                            <td><?php echo e($item['ruang']); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\UTS-Pweb\resources\views/dashboard.blade.php ENDPATH**/ ?>