<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
                    <div class="col-12">
                        <section class="card">
                            <header class="card-header d-flex justify-content-between align-items-center">
                                <h2 class="card-title">Roles</h2>
                                <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'role-create')): ?>
                                <a href="<?php echo e(route('app.roles.create')); ?>" class="modal-with-move-anim btn btn-sm btn-primary modal-basic"><i class="fa fa-plus-circle"></i>&nbsp;Create Role</a>
                                <?php endif; ?>
                            </header>
                            <div class="card-body ch-input-wrap">
                                <table class="table table-bordered table-striped mb-0" id="datatable-default">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                <th class="text-center">Name(English)</th>
                                <th class="text-center">Name(Bangle)</th>
                                <th class="text-center">Permission</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                    <td class="text-center text-muted"><?php echo e($loop->index+1); ?></td>
                                    <td class="text-center"><?php echo e($item->name); ?></td>
                                    <td class="text-center"><?php echo e($item->name_bn); ?></td>
                                    <td class="text-center">
                                        <?php if($item->permissions->count() >0): ?>
                                            <span class="badge badge-info"><?php echo e($item->permissions->count()); ?></span>
                                        <?php else: ?>
                                            <span class="badge badge-warning">No Permission Found</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center"><?php echo e($item->created_at->diffForHumans()); ?></td>
                                    <td class="text-center">
                                        <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'role-update')): ?>
                                        <a href="<?php echo e(route('app.roles.edit', $item->id)); ?>" class="btn btn-primary"><i
                                                class="fa fa-edit"></i></a>
                                        <?php endif; ?>

                                        <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'role-delete')): ?>
                                        <?php if($item->deletable == true): ?>
                                            <button onclick="deleteData(<?php echo e($item->id); ?>)" type="button"
                                                    class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            <form id="delete-<?php echo e($item->id); ?>" method="POST"
                                                  action="<?php echo e(route('app.roles.destroy', $item->id)); ?>"
                                                  style="display:none;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                            </form>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\advanchedqadmin\resources\views/backend/roles/index.blade.php ENDPATH**/ ?>