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

   
    <?php if(session()->has('success')): ?>
        <div 
            x-data="{ show: true }" 
            x-show="show" 
            x-init="setTimeout(() => show = false, 3000)" 
            @click.outside="show = false"
            class="flex items-center p-2 mb-2 text-white rounded-lg shadow bg-gradient-to-t from-blue-900 to-blue-500" 
            role="alert" 
            x-transition
        >
            <div class="text-sm font-semibold ms-2">
                <?php echo e(session('success')); ?>

            </div>

            <button type="button" 
                @click="show = false"
                class="flex items-center justify-center w-8 h-8 text-black bg-gray-200 rounded-md ms-auto focus:ring-2 focus:ring-blue-300 hover:bg-blue-300" 
                aria-label="Close">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" 
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    <?php endif; ?>
    

    
    <?php if(session()->has('error')): ?> 
        <div 
            x-data="{ show: true }" 
            x-show="show" 
            x-init="setTimeout(() => show = false, 3000)" 
            @click.outside="show = false"
            class="flex items-center p-2 mb-2 text-white rounded-lg shadow bg-gradient-to-t from-red-700 to-red-500" 
            role="alert" 
            x-transition
        >
            <div class="text-sm font-medium ms-2">
                <?php echo e(session('error')); ?>

            </div>

            <button type="button" 
                @click="show = false"
                class="flex items-center justify-center w-8 h-8 text-white bg-gray-200 rounded-md ms-auto focus:ring-2 focus:ring-red-300 hover:bg-red-300" 
                aria-label="Close">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" 
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    <?php endif; ?>
    
    
    
    <div class="p-4 overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">No.</th>
                    <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Tanggal Diperiksa</th>
                    <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">ID JO</th>
                    <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Alat</th>
                    <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Jenis</th>
                    <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Status</th>
                    <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Kapasitas</th>
                    <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Model</th>
                    <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">No. Seri</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php $__empty_1 = true; $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap"><?php echo e($loop->iteration); ?></td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap"><?php echo e($tool->finished_at->format('d-m-Y')); ?></td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap"><?php echo e($tool->jobOrder->nomor_jo); ?></td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap"><?php echo e($tool->tool->nama); ?></td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap"><?php echo e($tool->tool->jenis->jenis); ?></td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap"><?php echo e($tool->status); ?></td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap"><?php echo e($tool->kapasitas); ?></td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap"><?php echo e($tool->model); ?></td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap"><?php echo e($tool->no_seri); ?></td>
                </tr>
                
                
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </tbody>
        </table>
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
<?php endif; ?>
<?php /**PATH C:\laragon\www\asteria\resources\views/riksa_uji/index.blade.php ENDPATH**/ ?>