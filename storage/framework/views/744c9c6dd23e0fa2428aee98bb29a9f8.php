

<?php $__env->startSection('content'); ?>

    <?php if(session('success')): ?>
        <div class="alert alert-primary" role="alert">
                <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-6">
            <h3>Ruang</h3>
        </div>
        <div class="col-md-6">
            <a href="<?php echo e(route('Ruang.create')); ?>" class="btn btn-success btn-sm float-end">
                <i class="fa fa-plus-circle">Tambah</i>
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <table class="table bg-white shadow rounded shadow-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">#</th>
                        <th scope="col">Ruang</th>
                        <th style="width: 200px">Aksi</th>
                    </tr>
                    <tbody>
                <?php $__currentLoopData = $ruangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ruang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($ruang['nama_ruang']); ?></td>
                    <td><?php echo $__env->make('Ruang.action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
                </thead>

            </table>
            
        </div>
    </div>
    <form action="" method="POST" id="deleteForm">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <input type="submut" value="Hapus" style="display: none">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\reyhan\Documents\Weblaravel\bangsukri\resources\views/Ruang/index.blade.php ENDPATH**/ ?>