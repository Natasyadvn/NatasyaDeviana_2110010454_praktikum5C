

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6">
            <h3>Tambah Data Ruang</h3>
        </div>
        <div class="col-md-6">
            <a href="<?php echo e(route('Ruang.index')); ?>" class="btn btn-primary btn-sm float-end">
                <i class="fa fa-arrow-circle-left">Kembali</i>
            </a>
        </div>
    </div>

    <div class="card px-3 py-3">
        <form action="<?php echo e(route('Ruang.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>
            <div class="mb-3">
                <label for="nama_ruang">Nama Ruang</label>
                <input type="text"
                    class="form-control <?php $__errorArgs = ['nama_ruang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="nama_ruang"
                    id="nama_ruang"
                    value="<?php echo e(old('nama_ruang')); ?>" required>
                 <?php $__errorArgs = ['nama_ruang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <p class="text-danger"><?php echo e($message); ?></p>

                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col mb-3">
                <button class="btn btn-success" type="submit">
                    <i class="fas fa-save">Simpan</i>
                </button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\reyhan\Documents\Weblaravel\bangsukri\resources\views/Ruang/create.blade.php ENDPATH**/ ?>