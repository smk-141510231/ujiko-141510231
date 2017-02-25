<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-black panel-primary">
                <div class="panel-heading">EDIT JABATAN</div>

                <div class="panel-body">
                <?php echo Form::model($pegawai,['method'=>'PATCH', 'route'=>['pegawai.update', $pegawai->id]]); ?>


					<div class="form-group <?php echo e($errors->has('nip') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label('NIP','NIP :'); ?>

						<?php echo Form::text('nip',null,['class'=>'form-control']); ?>

						<?php if($errors->has('nip')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('nip')); ?></strong>
				                                    </span>
				                                <?php endif; ?>
					</div>
					<div class="form-group<?php echo e($errors->has('user_id') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label('User Id','User Id :'); ?>

						<?php echo Form::text('user_id',null,['class'=>'form-control']); ?>

												<?php if($errors->has('user_id')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('user_id')); ?></strong>
				                                    </span>
				                                <?php endif; ?>
					</div>
					<div class="form-group <?php echo e($errors->has('jabatan_id') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label('Jabatan Id','Jabatan Id :'); ?>

						<?php echo Form::text('jabatan_id',null,['class'=>'form-control']); ?>

						<?php if($errors->has('jabatan_id')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('jabatan_id')); ?></strong>
				                                    </span>
				                                <?php endif; ?>
					</div>
					<div class="form-group <?php echo e($errors->has('golongan_id') ? ' has-error' : 'pesan'); ?>">
						<?php echo Form::label('Golongan Id','Golongan Id :'); ?>

						<?php echo Form::text('golongan_id',null,['class'=>'form-control']); ?>

												<?php if($errors->has('golongan_id')): ?>
				                                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('golongan_id')); ?></strong>
				                                    </span>
				                                <?php endif; ?>
					</div>
					<div class="form-group">
						<?php echo Form::submit('Save', ['class' => 'btn btn-primary form control']); ?>

						<?php echo Form::close(); ?>

						</div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>