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

    <div class="grid grid-cols-1 gap-10 sm:grid-cols-2">
        <a href="<?php echo e(route('form_kp.ipk.instalasi_fire_hydrant.index')); ?>" class="flex flex-col items-center p-4 transition-transform rounded-lg shadow-md bg-gradient-to-t from-green-700 to-green-500 transform-gpu hover:shadow-lg hover:scale-[103%]">
            <img src="<?php echo e(asset('assets/icon/ipk/fire-hydrant.png')); ?>" alt="Scissor Lift" class="w-16 h-16 mb-2">
            <h2 class="text-lg font-semibold text-white">Instalasi Fire Hydrant</h2>
        </a>

        <a href="<?php echo e(route('form_kp.ipk.instalasi_fire_alarm.index')); ?>" class="flex flex-col items-center p-4 transition-transform rounded-lg shadow-md bg-gradient-to-t from-blue-900 to-blue-500 transform-gpu hover:shadow-lg hover:scale-[103%]">
            <img src="<?php echo e(asset('assets/icon/ipk/fire-alarm.png')); ?>" alt="Katel Uap" class="w-16 h-16 mb-2">
            <h2 class="text-lg font-semibold text-white">Instalasi Fire Alarm</h2>
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
<?php endif; ?><?php /**PATH C:\laragon\www\asteria\resources\views/form_kp/ipk/index.blade.php ENDPATH**/ ?>