<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce User Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>    
    <!-- Tom Select -->
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
</head>
<body class="min-h-screen font-sans bg-gray-100">
    <div x-data="{ openSidebar: false }" class="flex flex-col min-h-screen md:flex-row">
        <!-- Sidebar -->
        <?php if (isset($component)) { $__componentOriginal2880b66d47486b4bfeaf519598a469d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2880b66d47486b4bfeaf519598a469d6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $attributes = $__attributesOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $component = $__componentOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__componentOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>

        <!-- Main Content -->
        <main class="flex-1 p-4 overflow-y-auto transition-all duration-300 md:p-6 md:ml-64">
            <!-- Mobile Menu Toggle -->
            <div class="flex items-start justify-between mb-4 md:hidden ">
                
                <button @click="openSidebar = !openSidebar" class="p-2 rounded-full hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                
                <?php if(auth()->guard()->check()): ?>
                <div class="flex gap-[10px] items-center">
                    <div class="flex flex-col items-end justify-center">
                        <p class="font-semibold text-black"><?php echo e(auth()->user()->nama); ?></p>
                        <p class="text-sm font-light"><?php echo e(auth()->user()->jabatan); ?></p>
                    </div>
                    <div class="w-[56px] h-[56px] overflow-hidden rounded-full flex shrink-0 border-2 border-blue-700">
                        <a href="<?php echo e(route('dashboard')); ?>">
                            <img src="<?php echo e(asset('storage/' . (auth()->user()->avatar ?? 'avatars/default.png'))); ?>" 
                            class="object-cover w-full h-full" alt="photo">
                        </a>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <!-- Dashboard Section -->
            <div class="space-y-6">
                <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
                     <?php $__env->slot('subtitle', null, []); ?> <?php echo e($subtitle); ?> <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
                <?php echo e($slot); ?>

            </div>
        </main>
    </div>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>



<?php /**PATH C:\laragon\www\asteria\resources\views/components/layout.blade.php ENDPATH**/ ?>