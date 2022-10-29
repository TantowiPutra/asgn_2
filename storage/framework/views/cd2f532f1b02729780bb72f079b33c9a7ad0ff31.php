

<style>
    .card {
        background-color: rgba(51, 41, 46, 1) !important;
        border: none !important;
    }
</style>
<?php $__env->startSection('container'); ?>
    <div class="card" style="width: 18rem;">
        <h2>About Me</h2>
        <img src="https://source.unsplash.com/500x500?people" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">I'm a third-year Computer Science Student at Bina Nusantara University</p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\asg_2\resources\views/about.blade.php ENDPATH**/ ?>