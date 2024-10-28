

<?php $__env->startSection('title', 'All Blog Posts'); ?>

<?php $__env->startSection('content'); ?><div >
    <h2 style="text-align:center">All Blog Posts</h2><hr>
    <div class="grid text-center" ><ul>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <li class="d-inline-flex focus-ring py-1 px-2 text-decoration-none"  >
           <div class="g-col-6 g-col-md-4 card" style="width: 500px; text-overflow: ellipsis; ">    
    <img src="..." alt="..." style="background-color:#474747;height:300px;">
           <div class="card-body"> 
                <a href="<?php echo e(route('posts.show', $post->id)); ?>"><b><h2><?php echo e($post->title); ?><h2></b></a><br><br>
                 <a class="btn btn-outline-secondary" href="<?php echo e(route('posts.edit', $post->id)); ?>">Edit</a>
                <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form></div></div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul></div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hihar\Desktop\Laravel\blog_management_system\resources\views/posts/index.blade.php ENDPATH**/ ?>