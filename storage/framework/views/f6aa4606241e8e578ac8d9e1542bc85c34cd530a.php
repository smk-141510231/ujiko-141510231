<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Hallo!! Kamu login sebagai Admin!
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>

                 <div class="panel-body">
                    <a href="<?php echo e(route('penggajian.create')); ?>" class="btn btn-warning btn-block">Tambah Penggajian</a>
                </div>
                <div class="panel-body">
                    <a href="<?php echo e(route('pegawai.create')); ?>" class="btn btn-success btn-block">Tambah Pegawai</a>
                </div>
                <div class="panel-body">
                    <a href=" " class="btn btn-primary btn-block">Gajiku</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>