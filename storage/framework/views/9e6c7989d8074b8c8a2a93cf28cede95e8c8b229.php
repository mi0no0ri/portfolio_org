<?php $__env->startSection('contents'); ?>

  <div class="workWrap work">
    <h2>Works</h2>
    <div class="modalList">
      <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($image->count() >= 6): ?>
      <img src="storage/<?php echo e($image->photo); ?>" alt="" class="workImg" data-target="modal<?php echo e($index); ?>">

        <div class="modal none" id="modal<?php echo e($index); ?>">
          <div class="modalWrap">
            <div class="modalContent">
              <p class="modalClose">×</p>
              <div>
                <p class="modalTitle"><?php echo e($image->title); ?></p>
                <p><?php echo e($image->description); ?></p>
                <?php $__currentLoopData = $image->languague; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <small class="languagueList"><?php echo e($langs->languague); ?></small>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <div class="workImages">
              <?php $__currentLoopData = $image->postdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="storage/<?php echo e($detail->image); ?>" alt="" class="workDetailImage">
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>
        </div>
        <?php else: ?>
        <div>
          <div class="functionWrap">
            <div class="workList workList<?php echo e($index); ?>">
              <div class="workTitle">
                <h4><?php echo e($image->title); ?></h4>
                <p><?php echo e($image->description); ?></p>
                <p class="languagueTitle">使用言語：</p>
                <?php $__currentLoopData = $image->languague; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <small class="languagueList"><?php echo e($langs->languague); ?></small>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="functionLink">
                  <p class="functionBtn" data-target="function<?php echo e($index); ?>">機能一覧</p>
                  <div class="functionModal none" id="function<?php echo e($index); ?>">
                    <h4>機能一覧</h4>
                    <div class="functionContents">
                      <p class="functionClose">×</p>
                    <?php $__currentLoopData = $image->functions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $function): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <p class="functionName"><?php echo e($index + 1); ?>：<?php echo e($function->name); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="imageList">
                <?php $__currentLoopData = $image->postdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <img src="storage/<?php echo e($detail->image); ?>" alt="" class="workDetailImage">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="return">
      <a href="<?php echo e(route('top')); ?>">TOP</a>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('toppage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>