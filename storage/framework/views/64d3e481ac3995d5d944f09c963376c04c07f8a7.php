<?php $__env->startSection('contents'); ?>

<article class="contact fadeIn">
  <h2>Contact</h2>
  <?php if(session('message')): ?>
  <div class="contactMessage"><?php echo e(session('message')); ?></div>
  <?php endif; ?>
  <form class="contactForm" method="post" action="<?php echo e(route('confirm')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="contactWrap">
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p class="error"><?php echo e($error); ?></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div class="contactContents">
        <label for="name">お名前</label>
        <input type="text" id="name" name="name" class="contactInput">
      </div>
      <div class="contactContents">
        <label for="email">メールアドレス</label>
        <input type="text" id="email" name="email" class="contactInput">
      </div>
      <div class="contactContents">
        <label for="title">件名</label>
        <input type="text" id="title" name="title" class="contactInput">
      </div>
      <div class="contactContents">
        <label for="contact">お問い合わせ</label>
        <input type="textarea" id="contact" name="contact" class="contactTextbox">
      </div>
    </div>
    <div class="submitBtn">
      <input type="submit" value="確認">
    </div>
  </form>
  <div class="return">
    <a href="<?php echo e(route('top')); ?>">TOP</a>
  </div>
</article>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('toppage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>