

<?php $__env->startSection('title', $post->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-3" style="text-align: center">
    <h2><?php echo e($post->title); ?></h2>
    <div style="text-align:left"><p class="px-5"><?php echo e($post->content); ?></p></div>
    <p><strong>Author:</strong> <?php echo e($post->author); ?></p></div>

    <!-- Display Comments Section -->
    <h3>Comments</h3><hr>
    <?php if($post->comments && $post->comments->count() > 0): ?>
        <ul>
            <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <strong><?php echo e($comment->author); ?>:</strong> <?php echo e($comment->content); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p>No comments available.</p>
    <?php endif; ?>

    <!-- Add a New Comment Form -->
    <h4>Add a Comment</h4>
    <form action="<?php echo e(route('comments.store', $post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <label for="author">Name:</label>
            <input type="text" id="author" name="author" required>
        </div>

        <div>
            <label for="content">Comment:</label>
            <textarea id="content" name="content" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit Comment</button>
    </form>

    <a class="btn btn-outline-secondary" href="<?php echo e(route('posts.index')); ?>">Back to All Posts</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hihar\Desktop\Laravel\blog_management_system\resources\views/posts/show.blade.php ENDPATH**/ ?>