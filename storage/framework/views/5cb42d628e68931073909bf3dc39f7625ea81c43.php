<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2 class="panel-heading">Contact List</h2>
                  <div class="panel-body">
                    <?php if($contacts->count() > 0): ?>
                    <table>
                      <tr>
                        <th class="contactList">お名前</th>
                        <th class="contactList">email</th>
                        <th class="contactList">タイトル</th>
                        <th>内容</th>
                      </tr>
                      <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($contact->name); ?></td>
                        <td><?php echo e($contact->email); ?></td>
                        <td><?php echo e($contact->title); ?></td>
                        <td><?php echo e($contact->contact); ?></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php else: ?>
                      <p>お問い合わせはありません</p>
                    <?php endif; ?>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>