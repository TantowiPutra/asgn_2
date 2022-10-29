

<style>
    .card {
        margin-top: 15px;
    }
</style>
<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <?php for($i = 0; $i < 6; $i++): ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/project" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\asg_2\resources\views/projects.blade.php ENDPATH**/ ?>