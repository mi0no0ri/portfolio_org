<?php $__env->startSection('contents'); ?>

<article class="body">
  <div class="article">
    <div>
      <img src="<?php echo e(asset('storage/'.$user->background)); ?>" alt="トップ写真" class="topPic">
    </div>
    <div class="introduce">
      <h2>About</h2>
      <div class="introduceContents">
        <img src="<?php echo e(asset('storage/'.$user->image)); ?>" alt="" class="profileImage">
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
                  <p class="languageTitle">使用言語：</p>
                  <?php $__currentLoopData = $image->language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <small class="languageList"><?php echo e($language->usableLanguage->language); ?></small>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="imageList">
                  <?php $__currentLoopData = $image->postdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e(asset('storage/'.$detail->image)); ?>" alt="" class="workImage">
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="moreLink">
          <?php if($images->count() >= 4): ?>
            <a href="<?php echo e(route('work')); ?>">more...</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</article>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('toppage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>