

<?php $__env->startSection('title', 'Edit Post'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Edit Blog Post</h2>
    <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3" style="text-align: center">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo e(old('title', $post->title)); ?>" required>
        </div>
        
        <div class="mb-3" style="text-align: center">
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="15" cols="75" required><?php echo e(old('content', $post->content)); ?></textarea>
        </div>

        <div class="mb-3" style="text-align: center">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" value="<?php echo e(old('author', $post->author)); ?>" required>
        </div>

        <div class="mb-3" style="text-align: center"><button type="submit" class="btn btn-primary">Update Post</button></div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hihar\Desktop\Laravel\blog_management_system\resources\views/posts/edit.blade.php ENDPATH**/ ?>