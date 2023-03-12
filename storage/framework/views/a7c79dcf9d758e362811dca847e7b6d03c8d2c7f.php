<?php $__env->startSection('contents'); ?>

<div class="body">
  <div class="article">
    <div>
      <img src="storage/<?php echo e($user->background); ?>" alt="トップ写真" class="topPic">
    </div>
    <div class="introduce">
      <h2>About</h2>
      <div class="introduceContents">
        <img src="storage/<?php echo e($user->image); ?>" alt="" class="profileImage">
        <div class="introduceText">
          <p>NAME: <strong><?php echo e($user->name); ?></strong></p>
          <p><?php echo e($user->introduce); ?></p>
          <a href="<?php echo e(route('about')); ?>">more...</a>
        </div>
      </div>
    </div>
    <div class="work">
      <h2>Works</h2>
      <div class="workContents">
        <div class="modalList">
          <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="functionWrap">
              <div class="workList workList<?php echo e($index); ?>">
                <div class="workTitle">
                  <h4><?php echo e($image->title); ?></h4>
                  <p><?php echo e($image->description); ?></p>
                  <p class="languagueTitle">使用言語：</p>
                  <?php $__currentLoopData = $image->languague; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <small class="languagueList"><?php echo e($langs->languague); ?></small>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="imageList">
                  <?php $__currentLoopData = $image->postdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="storage/<?php echo e($detail->image); ?>" alt="" class="workDetailImage">
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="moreLink">
          <a href="<?php echo e(route('work')); ?>">more...</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('toppage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>