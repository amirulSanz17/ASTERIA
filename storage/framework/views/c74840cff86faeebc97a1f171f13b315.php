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
        <div class="grid grid-cols-1 gap-4">
            <div class="p-4 bg-white rounded-lg shadow-md transition-transform transform-gpu hover:shadow-lg hover:scale-[103%]">
                <h2 class="text-lg font-semibold text-gray-700">Total Job Order</h2>
                <p class="text-2xl font-bold text-green-600"><?php echo e($totalJobOrder); ?></p>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md transition-transform transform-gpu hover:shadow-lg hover:scale-[103%]">
                <h2 class="text-lg font-semibold text-gray-700">Riksa Uji Berjalan</h2>
                <p class="text-2xl font-bold text-yellow-600"><?php echo e($riksaBerjalan); ?></p>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md transition-transform transform-gpu hover:shadow-lg hover:scale-[103%]">
                <h2 class="text-lg font-semibold text-gray-700">Riksa Uji Selesai</h2>
                <p class="text-2xl font-bold text-blue-600"><?php echo e($riksaSelesai); ?></p>
            </div>
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
<?php endif; ?><?php /**PATH C:\laragon\www\asteria\resources\views/main-dashboard.blade.php ENDPATH**/ ?>