

<?php $__env->startSection('title', 'Create Blog Post'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Create a New Blog Post</h2>

    <?php if($errors->any()): ?>
        <div>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <form action="<?php echo e(route('posts.store')); ?>" method="POST" >
        <?php echo csrf_field(); ?>
        <div class="mb-3" style="text-align: center">
            <label for="title"><b>Title:</b></label>
            <input type="text" id="title" name="title" value="<?php echo e(old('title')); ?>" required>
        </div>

        

        <div class="mb-3" style="text-align: center">
            <label for="content"><b>Content:</b></label>
            <textarea id="content" name="content" rows="15" cols="75" required><?php echo e(old('content')); ?></textarea>
        </div>
        
        <div class="mb-3" style="text-align: center">
            <label for="author"><b>Author:</b></label>
            <input type="text" id="author" name="author" value="<?php echo e(old('author')); ?>" required>
        </div>

        <div style="text-align: center"><button type="submit" class="btn btn-primary" >Create Post</button></div>
        <form action="<?php echo e(route('uploadImage')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <label for="image">Choose an image:</label>
    <input type="file" name="image" id="image">
    <button type="submit">Upload Image</button>
</form>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hihar\Desktop\Laravel\blog_management_system\resources\views/posts/create.blade.php ENDPATH**/ ?>