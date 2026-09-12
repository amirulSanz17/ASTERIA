<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
     <?php $__env->slot('subtitle', null, []); ?> <?php echo e($subtitle); ?> <?php $__env->endSlot(); ?>

    <div class="grid grid-cols-1 gap-10 sm:grid-cols-3">
        <a href="<?php echo e(route('form_kp.papa.scissor_lift.index')); ?>" class="flex flex-col items-center p-4 transition-transform rounded-lg shadow-md bg-gradient-to-t from-cyan-700 to-cyan-500 transform-gpu hover:shadow-lg hover:scale-[103%]">
            <img src="<?php echo e(asset('assets/icon/papa/scissor-lift.png')); ?>" alt="Scissor Lift" class="w-16 h-16 mb-2">
            <h2 class="text-lg font-semibold text-white">Scissor Lift</h2>
        </a>
        
        <a href="<?php echo e(route('form_kp.papa.wheel_loader.index')); ?>" class="flex flex-col items-center p-4 transition-transform rounded-lg shadow-md bg-gradient-to-t from-red-700 to-red-500 transform-gpu hover:shadow-lg hover:scale-[103%]">
            <img src="<?php echo e(asset('assets/icon/papa/loader.png')); ?>" alt="Wheel Loader" class="w-16 h-16 mb-2">
            <h2 class="text-lg font-semibold text-white">Wheel Loader</h2>
        </a>
        
        <a href="<?php echo e(route('form_kp.papa.dump_trailer.index')); ?>" class="flex flex-col items-center p-4 transition-transform rounded-lg shadow-md bg-gradient-to-t from-blue-900 to-blue-500 transform-gpu hover:shadow-lg hover:scale-[103%]">
            <img src="<?php echo e(asset('assets/icon/papa/trailer.png')); ?>" alt="Dump Trailer" class="w-16 h-16 mb-2">
            <h2 class="text-lg font-semibold text-white">Dump Trailer</h2>
        </a>
        
        <a href="<?php echo e(route('form_kp.papa.crane.index')); ?>" class="flex flex-col items-center p-4 transition-transform rounded-lg shadow-md bg-gradient-to-t from-yellow-700 to-yellow-500 transform-gpu hover:shadow-lg hover:scale-[103%]">
            <img src="<?php echo e(asset('assets/icon/papa/crane.png')); ?>" alt="Crane" class="w-16 h-16 mb-2">
            <h2 class="text-lg font-semibold text-white">Crane</h2>
        </a>
        
        <a href="<?php echo e(route('form_kp.papa.forklift.index')); ?>" class="flex flex-col items-center p-4 transition-transform rounded-lg shadow-md bg-gradient-to-t from-green-700 to-green-500 transform-gpu hover:shadow-lg hover:scale-[103%]">
            <img src="<?php echo e(asset('assets/icon/papa/forklift.png')); ?>" alt="Forklift" class="w-16 h-16 mb-2">
            <h2 class="text-lg font-semibold text-white">Forklift</h2>
        </a>
        
        <a href="<?php echo e(route('form_kp.papa.cargo_lift.index')); ?>" class="flex flex-col items-center p-4 transition-transform rounded-lg shadow-md bg-gradient-to-t from-gray-700 to-gray-500 transform-gpu hover:shadow-lg hover:scale-[103%]">
            <img src="<?php echo e(asset('assets/icon/papa/elevator.png')); ?>" alt="Cargo Lift" class="w-16 h-16 mb-2">
            <h2 class="text-lg font-semibold text-white">Cargo Lift</h2>
        </a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\asteria\resources\views/form_kp/papa/index.blade.php ENDPATH**/ ?>