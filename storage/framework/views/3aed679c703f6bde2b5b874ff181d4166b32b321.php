<?php $__env->startSection('contents'); ?>

  <div class="introduce">
    <h2>About</h2>
    <div>
      <div class="aboutContents">
        <div class="myImage">
          <img src="storage/<?php echo e($user->image); ?>" alt="" class="aboutImage">
          <div class="aboutName">
            <h4>名前：</h4>
            <p>minori</p>
          </div>
        </div>
        <div class="aboutIntroduce">
          <h4>経歴</h4>
          <ul>
            <?php $__currentLoopData = $carrier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($carrier->carrier); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>

          <h4>自己紹介</h4>
          <p><?php echo e($user->introduce); ?></p>

          <h4>趣味</h4>
          <ul>
            <?php $__currentLoopData = $hobbies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hobby): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($hobby->hobby); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>

      <ul class="mySkill">
        <div class="pointer1">
          <li>HTML/CSS</li>
          <p class="popup1 none">1year</p>
          <div>
            <p class="barRemain"> </p>
            <p class="bar1year"> </p>
          </div>
        </div>
        <div class="pointer2">
          <li>JavaScript(jQuery)</li>
          <p class="popup2 none">1year</p>
          <div>
            <p class="barRemain"> </p>
            <p class="bar1year"> </p>
          </div>
        </div>
        <div class="pointer3">
          <li>PHP(Laravel)</li>
          <p class="popup3 none">6months</p>
          <div>
            <p class="barRemain"> </p>
            <p class="bar6month"> </p>
          </div>
        </div>
        <div class="pointer4">
          <li>Java</li>
          <p class="popup4 none">3months</p>
          <div>
            <p class="barRemain"> </p>
            <p class="bar3month"> </p>
          </div>
        </div>
      </ul>
    </div>
    <div class="return">
      <a href="<?php echo e(route('top')); ?>">TOP</a>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('toppage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>