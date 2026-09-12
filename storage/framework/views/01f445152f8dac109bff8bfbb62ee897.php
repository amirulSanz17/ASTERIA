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
        <div class="p-4 bg-white rounded-lg shadow-md">
            <form action="<?php echo e(route('job_orders.store')); ?>" method="POST" class="space-y-4" enctype="multipart/form-data" onsubmit="return confirm('Simpan data?')">
                <?php echo csrf_field(); ?>
                
                <h2 class="block text-sm font-bold text-gray-700">General Order</h2>
                <div>
                    <input type="text" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="block w-full px-3 py-2 mt-1 uppercase bg-gray-200 border border-gray-400 rounded-md shadow-sm cursor-not-allowed sm:text-sm" <?php endif; ?> required name="nama_perusahaan" placeholder="Nama Perusahaan" id="nama_perusahaan" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm <?php $__errorArgs = ['nama_perusahaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('nama_perusahaan')); ?>">
                    <?php $__errorArgs = ['nama_perusahaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-600">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                </div>

                
                <div>
                    <input type="text" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="block w-full px-3 py-2 mt-1 bg-gray-200 border border-gray-400 rounded-md shadow-sm cursor-not-allowed sm:text-sm" <?php endif; ?> required name="alamat_perusahaan" placeholder="Alamat Perusahaan" id="alamat_perusahaan" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm <?php $__errorArgs = ['alamat_perusahaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('alamat_perusahaan')); ?>">
                    <?php $__errorArgs = ['alamat_perusahaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-600">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                </div>
                
                
                <div>
                    <input type="text" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="block w-full px-3 py-2 mt-1 bg-gray-200 border border-gray-400 rounded-md shadow-sm cursor-not-allowed sm:text-sm" <?php endif; ?> required name="pic_order" placeholder="PIC Order" id="pic_order" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm <?php $__errorArgs = ['pic_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('pic_order')); ?>">
                    <?php $__errorArgs = ['pic_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-600">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                </div>
                
                
                <div>
                    <input type="email" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="block w-full px-3 py-2 mt-1 bg-gray-200 border border-gray-400 rounded-md shadow-sm cursor-not-allowed sm:text-sm" <?php endif; ?> name="email" placeholder="Email" id="email" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-600">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                </div>
                
                
                <div>
                    <input type="tel" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="block w-full px-3 py-2 mt-1 bg-gray-200 border border-gray-400 rounded-md shadow-sm cursor-not-allowed sm:text-sm" <?php endif; ?> name="contact_person" placeholder="Contact Person" id="contact_person" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm <?php $__errorArgs = ['contact_person'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('contact_person')); ?>">
                    <?php $__errorArgs = ['contact_person'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-600">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                </div>
                
                
                <div>
                    <input type="text" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="block w-full px-3 py-2 mt-1 bg-gray-200 border border-gray-400 rounded-md shadow-sm cursor-not-allowed sm:text-sm" <?php endif; ?> name="no_penawaran" placeholder="No. Penawaran" id="no_penawaran" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm <?php $__errorArgs = ['no_penawaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('no_penawaran')); ?>">
                    <?php $__errorArgs = ['no_penawaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-600">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                </div>
                
                
                <div>
                    <input type="tel" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="block w-full px-3 py-2 mt-1 bg-gray-200 border border-gray-400 rounded-md shadow-sm cursor-not-allowed sm:text-sm" <?php endif; ?> name="no_purcash_order"  placeholder="No. Purcash Order" id="no_purcash_order" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm <?php $__errorArgs = ['no_purcash_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('no_purcash_order')); ?>">
                    <?php $__errorArgs = ['no_purcash_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-600">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                </div>
                
                    
                    <h2 class="block text-sm font-bold text-gray-700">Tanggal Pemeriksaan</h2>
                    <div class="flex flex-wrap justify-between w-full gap-y-4">
                        
                        <div class="w-full md:w-[48%]">
                            <div class="relative">
                                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5 bg-gray-200 border border-gray-400 cursor-not-allowed" <?php endif; ?> id="datepicker-autohide-1" name="tanggal_pemeriksaan1" placeholder="(1)" value="<?php echo e(old('tanggal_pemeriksaan1')); ?>" datepicker datepicker-autohide datepicker-format="dd-mm-yyyy" datepicker-buttons datepicker-autoselect-today type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  <?php $__errorArgs = ['tanggal_pemeriksaan1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('tanggal_pemeriksaan1')); ?>"> 
                            </div>
                            <?php $__errorArgs = ['tanggal_pemeriksaan1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-xs text-red-600">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        <div class="w-full md:w-[48%]">
                            <div class="relative">
                                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5 bg-gray-200 border border-gray-400 cursor-not-allowed" <?php endif; ?> id="datepicker-autohide-2" name="tanggal_pemeriksaan2" placeholder="(2)" value="<?php echo e(old('tanggal_pemeriksaan2')); ?>" datepicker datepicker-autohide datepicker-format="dd-mm-yyyy" datepicker-buttons datepicker-autoselect-today type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  <?php $__errorArgs = ['tanggal_pemeriksaan2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('tanggal_pemeriksaan2')); ?>">
                                <?php $__errorArgs = ['tanggal_pemeriksaan2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-xs text-red-600">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        
                        <div class="w-full md:w-[48%]">
                            <div class="relative">
                                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5 bg-gray-200 border border-gray-400 cursor-not-allowed" <?php endif; ?> id="datepicker-autohide-3" name="tanggal_pemeriksaan3" placeholder="(3)" value="<?php echo e(old('tanggal_pemeriksaan3')); ?>" datepicker datepicker-autohide datepicker-format="dd-mm-yyyy" datepicker-buttons datepicker-autoselect-today type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  <?php $__errorArgs = ['tanggal_pemeriksaan3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('tanggal_pemeriksaan3')); ?>">
                            </div>
                            <?php $__errorArgs = ['tanggal_pemeriksaan3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-xs text-red-600">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        <div class="w-full md:w-[48%]">
                            <div class="relative">
                                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5 bg-gray-200 border border-gray-400 cursor-not-allowed" <?php endif; ?> id="datepicker-autohide-4" name="tanggal_pemeriksaan4" placeholder="(4)" value="<?php echo e(old('tanggal_pemeriksaan4')); ?>" datepicker datepicker-autohide datepicker-format="dd-mm-yyyy" datepicker-buttons datepicker-autoselect-today type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  <?php $__errorArgs = ['tanggal_pemeriksaan4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('tanggal_pemeriksaan4')); ?>">
                            </div>
                            <?php $__errorArgs = ['tanggal_pemeriksaan4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-xs text-red-600">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        <div class="w-full md:w-[48%]">
                            <div class="relative">
                                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5 bg-gray-200 border border-gray-400 cursor-not-allowed" <?php endif; ?> id="datepicker-autohide-5" name="tanggal_pemeriksaan5" placeholder="(5)" value="<?php echo e(old('tanggal_pemeriksaan5')); ?>" datepicker datepicker-autohide datepicker-format="dd-mm-yyyy" datepicker-buttons datepicker-autoselect-today type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  <?php $__errorArgs = ['tanggal_pemeriksaan5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('tanggal_pemeriksaan5')); ?>">
                            </div>
                            <?php $__errorArgs = ['tanggal_pemeriksaan5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-xs text-red-600">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                
                <div>
                    <select <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="block w-full px-3 py-2 mt-1 bg-gray-200 border border-gray-400 rounded-md shadow-sm cursor-not-allowed sm:text-sm" <?php endif; ?> required name="jumlah_hari_pemeriksaan" id="jumlah_hari_pemeriksaan" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm <?php $__errorArgs = ['jumlah_hari_pemeriksaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <option value="" class="text-center">--- Jumlah Hari Pemeriksaan ---</option>
                        <option value="1" <?php echo e(old('jumlah_hari_pemeriksaan') == '1' ? 'selected' : ''); ?>>1 Hari</option>
                        <option value="2" <?php echo e(old('jumlah_hari_pemeriksaan') == '2' ? 'selected' : ''); ?>>2 Hari</option>
                        <option value="3" <?php echo e(old('jumlah_hari_pemeriksaan') == '3' ? 'selected' : ''); ?>>3 Hari</option>
                        <option value="4" <?php echo e(old('jumlah_hari_pemeriksaan') == '4' ? 'selected' : ''); ?>>4 Hari</option>
                        <option value="5" <?php echo e(old('jumlah_hari_pemeriksaan') == '5' ? 'selected' : ''); ?>>5 Hari</option>
                        <option value=">5" <?php echo e(old('jumlah_hari_pemeriksaan') == '>5' ? 'selected' : ''); ?>>>5 Hari</option>
                    </select>
                    <?php $__errorArgs = ['jumlah_hari_pemeriksaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-600">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  
                </div>

                
                <div class="flex flex-wrap justify-between w-full gap-y-4">
                    
                    <div class="w-full md:w-[48%]">
                        <h2 class="block mb-4 text-sm font-bold text-gray-700">Tanggal JO Dibuat</h2>
                        <div class="relative">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5 bg-gray-200 border border-gray-400 cursor-not-allowed" <?php endif; ?> required id="datepicker-autohide-7" name="tanggal_dibuat" value="<?php echo e(old('tanggal_dibuat')); ?>" datepicker datepicker-autohide datepicker-format="dd-mm-yyyy" datepicker-buttons datepicker-autoselect-today type="text"  placeholder="Pilih Tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  <?php $__errorArgs = ['tanggal_dibuat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('tanggal_dibuat')); ?>">
                        </div>
                        <?php $__errorArgs = ['tanggal_dibuat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-xs text-red-600">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="w-full md:w-[48%]">
                        <h2 class="block mb-4 text-sm font-bold text-gray-700">Tanggal Selesai Pemeriksaan</h2>
                        <div class="relative">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5 bg-gray-200 border border-gray-400 cursor-not-allowed" <?php endif; ?> required id="datepicker-autohide-6" name="tanggal_selesai" value="<?php echo e(old('tanggal_selesai')); ?>" datepicker datepicker-autohide datepicker-format="dd-mm-yyyy" datepicker-buttons datepicker-autoselect-today type="text"  placeholder="Pilih Tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  <?php $__errorArgs = ['tanggal_selesai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('tanggal_selesai')); ?>">
                        </div>
                        <?php $__errorArgs = ['tanggal_selesai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-xs text-red-600">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                
                <div class="pb-2">
                    
                    <div class="flex justify-between gap-x-2 gap-y-4">
                        <div class="inline-block w-full md:w-[48%]">
                            <label for="jam_bertemu" class="block mb-4 text-sm font-medium text-gray-900">Jam Bertemu:</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <input type="time" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="bg-gray-200 cursor-not-allowed border leading-none border-gray-400 text-gray-900 text-sm rounded-lg block w-full p-2.5" <?php endif; ?> name="jam_bertemu" value="<?php echo e(old('jam_bertemu', '00:00')); ?>" id="jam_bertemu" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                            </div>
                        </div>
                        
                        <div class="inline-block w-full md:w-[48%]">
                            <label for="end-time" class="block mb-4 text-sm font-medium text-gray-900">Jam Selesai:</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <input type="time" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="bg-gray-200 cursor-not-allowed border leading-none border-gray-400 text-gray-900 text-sm rounded-lg block w-full p-2.5" <?php endif; ?> name="jam_selesai" value="<?php echo e(old('jam_selesai', '00:00')); ?>" id="end-time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div>
                    <input type="text" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="block w-full px-3 py-2 mt-1 bg-gray-200 border border-gray-400 rounded-md shadow-sm cursor-not-allowed sm:text-sm" <?php endif; ?> name="pic_ditemui" placeholder="PIC yang ditemui..." id="pic_ditemui" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm <?php $__errorArgs = ['pic_ditemui'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('pic_ditemui')); ?>">
                    <?php $__errorArgs = ['pic_ditemui'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-600">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                </div>

                
                <div>
                    <input type="tel" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="block w-full px-3 py-2 mt-1 bg-gray-200 border border-gray-400 rounded-md shadow-sm cursor-not-allowed sm:text-sm" <?php endif; ?> name="contact_person2" placeholder="Contact Person" id="contact_person2" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm <?php $__errorArgs = ['contact_person2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('contact_person2')); ?>">
                    <?php $__errorArgs = ['contact_person2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-600">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                </div>

                

                
                <div>
                    <label for="responsibles" class="block text-sm font-medium text-gray-700">
                        Penanggung Jawab <span class="text-red-600">*</span>
                    </label>
                    <select <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="block w-full mt-1 bg-gray-200 border border-gray-400 rounded-md shadow-sm cursor-not-allowed sm:text-sm" <?php endif; ?> id="responsibles" name="responsibles[]" multiple class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm <?php $__errorArgs = ['responsibles'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <?php $__currentLoopData = $petugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($user->id); ?>" 
                                <?php echo e(in_array($user->id, old('responsibles', [])) ? 'selected' : ''); ?>>
                                <?php echo e($user->nama); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['responsibles'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="mt-1 text-xs text-red-600"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                
                <label for="responsibles" class="block text-sm font-medium text-gray-700">List Job Order <span class="text-red-600">*</span></label>
                <div class="px-4 pb-4 overflow-x-auto bg-white rounded-lg shadow-md">
                    <table class="table min-w-full divide-y divide-gray-200" id="tools-table">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Alat</th>
                                <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Qty</th>
                                <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Status</th>
                                <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Kapasitas</th>
                                <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Model/Tipe</th>
                                <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">No. Seri/Unit</th>
                                <th class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="tools-table-body" class="divide-y divide-gray-200">
                        
                        <?php if(old('tools')): ?>
                            <?php $__currentLoopData = old('tools'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="w-full sm:w-[30%] min-w-[200px] px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                                        <select <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="cursor-not-allowed form-control" <?php endif; ?> name="tools[<?php echo e($i); ?>][tool_id]" id="tool-select-<?php echo e($i); ?>" class="form-control" required>
                                            <option value="">-- Pilih --</option>
                                            <?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($t->id); ?>" <?php echo e(old("tools.$i.tool_id") == $t->id ? 'selected' : ''); ?>>
                                                    <?php echo e($t->nama); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                                        <input type="number" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="bg-gray-200 rounded-md cursor-not-allowed form-control" <?php endif; ?> name="tools[<?php echo e($i); ?>][qty]" 
                                            class="bg-gray-100 rounded-md form-control"
                                            min="1" required
                                            value="<?php echo e(old("tools.$i.qty")); ?>">
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                                        <select <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="cursor-not-allowed form-control" <?php endif; ?> name="tools[<?php echo e($i); ?>][status]" class="form-control" required>
                                            <option value="Pertama" <?php echo e(old("tools.$i.status") == 'Pertama' ? 'selected' : ''); ?>>Pertama</option>
                                            <option value="Resertifikasi" <?php echo e(old("tools.$i.status") == 'Resertifikasi' ? 'selected' : ''); ?>>Resertifikasi</option>
                                        </select>
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                                        <input type="text" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="bg-gray-200 rounded-md cursor-not-allowed form-control" <?php endif; ?> name="tools[<?php echo e($i); ?>][kapasitas]" 
                                            class="bg-gray-100 rounded-md form-control"
                                            value="<?php echo e(old("tools.$i.kapasitas")); ?>">
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                                        <input type="text" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="bg-gray-200 rounded-md cursor-not-allowed form-control" <?php endif; ?> name="tools[<?php echo e($i); ?>][model]" 
                                            class="bg-gray-100 rounded-md form-control"
                                            value="<?php echo e(old("tools.$i.model")); ?>">
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                                        <input type="text" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="bg-gray-200 rounded-md cursor-not-allowed form-control" <?php endif; ?> name="tools[<?php echo e($i); ?>][no_seri]" 
                                            class="bg-gray-100 rounded-md form-control"
                                            value="<?php echo e(old("tools.$i.no_seri")); ?>">
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                                        <button type="button" class="flex p-2 transition-all duration-500 rounded-full remove-row group item-center">
                                                <svg class="pointer-events-none" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="pointer-events-none fill-red-600" d="M4.00031 5.49999V4.69999H3.20031V5.49999H4.00031ZM16.0003 5.49999H16.8003V4.69999H16.0003V5.49999ZM17.5003 5.49999L17.5003 6.29999C17.9421 6.29999 18.3003 5.94183 18.3003 5.5C18.3003 5.05817 17.9421 4.7 17.5003 4.69999L17.5003 5.49999ZM9.30029 9.24997C9.30029 8.80814 8.94212 8.44997 8.50029 8.44997C8.05847 8.44997 7.70029 8.80814 7.70029 9.24997H9.30029ZM7.70029 13.75C7.70029 14.1918 8.05847 14.55 8.50029 14.55C8.94212 14.55 9.30029 14.1918 9.30029 13.75H7.70029ZM12.3004 9.24997C12.3004 8.80814 11.9422 8.44997 11.5004 8.44997C11.0585 8.44997 10.7004 8.80814 10.7004 9.24997H12.3004ZM10.7004 13.75C10.7004 14.1918 11.0585 14.55 11.5004 14.55C11.9422 14.55 12.3004 14.1918 12.3004 13.75H10.7004ZM4.00031 6.29999H16.0003V4.69999H4.00031V6.29999ZM15.2003 5.49999V12.5H16.8003V5.49999H15.2003ZM11.0003 16.7H9.00031V18.3H11.0003V16.7ZM4.80031 12.5V5.49999H3.20031V12.5H4.80031ZM9.00031 16.7C7.79918 16.7 6.97882 16.6983 6.36373 16.6156C5.77165 16.536 5.49093 16.3948 5.29823 16.2021L4.16686 17.3334C4.70639 17.873 5.38104 18.0979 6.15053 18.2013C6.89702 18.3017 7.84442 18.3 9.00031 18.3V16.7ZM3.20031 12.5C3.20031 13.6559 3.19861 14.6033 3.29897 15.3498C3.40243 16.1193 3.62733 16.7939 4.16686 17.3334L5.29823 16.2021C5.10553 16.0094 4.96431 15.7286 4.88471 15.1366C4.80201 14.5215 4.80031 13.7011 4.80031 12.5H3.20031ZM15.2003 12.5C15.2003 13.7011 15.1986 14.5215 15.1159 15.1366C15.0363 15.7286 14.8951 16.0094 14.7024 16.2021L15.8338 17.3334C16.3733 16.7939 16.5982 16.1193 16.7016 15.3498C16.802 14.6033 16.8003 13.6559 16.8003 12.5H15.2003ZM11.0003 18.3C12.1562 18.3 13.1036 18.3017 13.8501 18.2013C14.6196 18.0979 15.2942 17.873 15.8338 17.3334L14.7024 16.2021C14.5097 16.3948 14.229 16.536 13.6369 16.6156C13.0218 16.6983 12.2014 16.7 11.0003 16.7V18.3ZM2.50031 4.69999C2.22572 4.7 2.04405 4.7 1.94475 4.7C1.89511 4.7 1.86604 4.7 1.85624 4.7C1.85471 4.7 1.85206 4.7 1.851 4.7C1.05253 5.50059 1.85233 6.3 1.85256 6.3C1.85273 6.3 1.85297 6.3 1.85327 6.3C1.85385 6.3 1.85472 6.3 1.85587 6.3C1.86047 6.3 1.86972 6.3 1.88345 6.3C1.99328 6.3 2.39045 6.3 2.9906 6.3C4.19091 6.3 6.2032 6.3 8.35279 6.3C10.5024 6.3 12.7893 6.3 14.5387 6.3C15.4135 6.3 16.1539 6.3 16.6756 6.3C16.9364 6.3 17.1426 6.29999 17.2836 6.29999C17.3541 6.29999 17.4083 6.29999 17.4448 6.29999C17.4631 6.29999 17.477 6.29999 17.4863 6.29999C17.4909 6.29999 17.4944 6.29999 17.4968 6.29999C17.498 6.29999 17.4988 6.29999 17.4994 6.29999C17.4997 6.29999 17.4999 6.29999 17.5001 6.29999C17.5002 6.29999 17.5003 6.29999 17.5003 5.49999C17.5003 4.69999 17.5002 4.69999 17.5001 4.69999C17.4999 4.69999 17.4997 4.69999 17.4994 4.69999C17.4988 4.69999 17.498 4.69999 17.4968 4.69999C17.4944 4.69999 17.4909 4.69999 17.4863 4.69999C17.477 4.69999 17.4631 4.69999 17.4448 4.69999C17.4083 4.69999 17.3541 4.69999 17.2836 4.69999C17.1426 4.7 16.9364 4.7 16.6756 4.7C16.1539 4.7 15.4135 4.7 14.5387 4.7C12.7893 4.7 10.5024 4.7 8.35279 4.7C6.2032 4.7 4.19091 4.7 2.9906 4.7C2.39044 4.7 1.99329 4.7 1.88347 4.7C1.86974 4.7 1.86051 4.7 1.85594 4.7C1.8548 4.7 1.85396 4.7 1.85342 4.7C1.85315 4.7 1.85298 4.7 1.85288 4.7C1.85284 4.7 2.65253 5.49941 1.85408 6.3C1.85314 6.3 1.85296 6.3 1.85632 6.3C1.86608 6.3 1.89511 6.3 1.94477 6.3C2.04406 6.3 2.22573 6.3 2.50031 6.29999L2.50031 4.69999ZM7.05028 5.49994V4.16661H5.45028V5.49994H7.05028ZM7.91695 3.29994H12.0836V1.69994H7.91695V3.29994ZM12.9503 4.16661V5.49994H14.5503V4.16661H12.9503ZM12.0836 3.29994C12.5623 3.29994 12.9503 3.68796 12.9503 4.16661H14.5503C14.5503 2.8043 13.4459 1.69994 12.0836 1.69994V3.29994ZM7.05028 4.16661C7.05028 3.68796 7.4383 3.29994 7.91695 3.29994V1.69994C6.55465 1.69994 5.45028 2.8043 5.45028 4.16661H7.05028ZM2.50031 6.29999C4.70481 6.29998 6.40335 6.29998 8.1253 6.29997C9.84725 6.29996 11.5458 6.29995 13.7503 6.29994L13.7503 4.69994C11.5458 4.69995 9.84724 4.69996 8.12529 4.69997C6.40335 4.69998 4.7048 4.69998 2.50031 4.69999L2.50031 6.29999ZM13.7503 6.29994L17.5003 6.29999L17.5003 4.69999L13.7503 4.69994L13.7503 6.29994ZM7.70029 9.24997V13.75H9.30029V9.24997H7.70029ZM10.7004 9.24997V13.75H12.3004V9.24997H10.7004Z" fill="#F87171"></path>
                                                </svg>
                                        </button>                                    
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                    </table>
                    <button type="button" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="px-3 py-1 font-semibold text-white transition-transform bg-gray-400 rounded-md cursor-not-allowed" <?php endif; ?> id="add-tool" class="px-3 py-1 font-bold text-white transition-transform rounded-lg bg-gradient-to-t from-blue-900 to-blue-500 transform-gpu hover:shadow-md hover:scale-[103%]">+ Tambah List</button>
                </div>

                
                <div>
                    <label for="kelengkapan" class="block text-sm font-medium text-gray-700">
                        Kelengkapan Alat
                    </label>
                    <div class="px-3 py-2 mt-1 space-y-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        
                        <div class="flex items-center gap-3">
                            <label for="kelengkapan_manual_book" class="flex-1 cursor-pointer">
                                Manual Book (Spesifikasi Alat)
                            </label>

                            
                            <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Super Admin|Tim Riksa Uji')): ?>
                                
                                <input type="hidden" name="kelengkapan_manual_book" value="0">
                                <input type="checkbox"
                                    id="kelengkapan_manual_book"
                                    name="kelengkapan_manual_book"
                                    value="1"
                                    <?php echo e(old('kelengkapan_manual_book', $data->kelengkapan_manual_book ?? 0) == 1 ? 'checked' : ''); ?>

                                    class="w-5 h-5">
                            <?php else: ?>
                                <input type="checkbox"
                                    disabled
                                    class="w-5 h-5 bg-gray-200 border border-gray-400 cursor-not-allowed"
                                    id="kelengkapan_manual_book"
                                    value="1"
                                    <?php echo e(old('kelengkapan_manual_book', $data->kelengkapan_manual_book ?? 0) == 1 ? 'checked' : ''); ?>>

                                
                                <input type="hidden" 
                                    name="kelengkapan_manual_book" 
                                    value="<?php echo e(old('kelengkapan_manual_book', $data->kelengkapan_manual_book ?? 0)); ?>">
                            <?php endif; ?>

                            <input type="number" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Admin Riksa Uji')): ?> readonly class="w-20 px-2 py-1 text-sm bg-gray-200 border border-gray-400 rounded-md cursor-not-allowed sm:flex-1" <?php endif; ?> placeholder="Qty..." name="qty_manual_book" value="<?php echo e(old('qty_manual_book')); ?>"
                                class="w-20 px-2 py-1 text-sm border border-gray-300 rounded-md sm:flex-1 <?php $__errorArgs = ['qty_manual_book'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <?php $__errorArgs = ['qty_manual_book'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-xs text-red-600">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        
                        <div class="flex items-center gap-3">
                            <label for="kelengkapan_layout" class="flex-1 cursor-pointer">
                                Layout/Diagram Instalasi
                            </label>

                            
                            <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Super Admin|Tim Riksa Uji')): ?>
                                
                                <input type="hidden" name="kelengkapan_layout" value="0">
                                <input type="checkbox"
                                    id="kelengkapan_layout"
                                    name="kelengkapan_layout"
                                    value="1"
                                    <?php echo e(old('kelengkapan_layout', $data->kelengkapan_layout ?? 0) == 1 ? 'checked' : ''); ?>

                                    class="w-5 h-5">
                            <?php else: ?>
                                
                                <input type="checkbox"
                                    disabled
                                    class="w-5 h-5 bg-gray-200 border border-gray-400 cursor-not-allowed"
                                    id="kelengkapan_layout"
                                    value="1"
                                    <?php echo e(old('kelengkapan_layout', $data->kelengkapan_layout ?? 0) == 1 ? 'checked' : ''); ?>>

                                
                                <input type="hidden" 
                                    name="kelengkapan_layout" 
                                    value="<?php echo e(old('kelengkapan_layout', $data->kelengkapan_layout ?? 0)); ?>">
                            <?php endif; ?>

                            <input type="number" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Admin Riksa Uji')): ?> readonly class="w-20 px-2 py-1 text-sm bg-gray-200 border border-gray-400 rounded-md cursor-not-allowed sm:flex-1" <?php endif; ?> placeholder="Qty..." name="qty_layout" value="<?php echo e(old('qty_layout')); ?>"
                                class="w-20 px-2 py-1 text-sm border border-gray-300 rounded-md sm:flex-1 <?php $__errorArgs = ['qty_layout'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <?php $__errorArgs = ['qty_layout'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-xs text-red-600">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        
                        <div class="flex items-center gap-3">
                            <label for="kelengkapan_maintenance_report" class="flex-1 cursor-pointer">
                                Checklist Maintenance Report
                            </label>

                            
                            <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Super Admin|Tim Riksa Uji')): ?>
                                
                                <input type="hidden" name="kelengkapan_maintenance_report" value="0">
                                <input type="checkbox"
                                    id="kelengkapan_maintenance_report"
                                    name="kelengkapan_maintenance_report"
                                    value="1"
                                    <?php echo e(old('kelengkapan_maintenance_report', $data->kelengkapan_maintenance_report ?? 0) == 1 ? 'checked' : ''); ?>

                                    class="w-5 h-5">
                            <?php else: ?>
                                
                                <input type="checkbox"
                                    disabled
                                    class="w-5 h-5 bg-gray-200 border border-gray-400 cursor-not-allowed"
                                    id="kelengkapan_maintenance_report"
                                    value="1"
                                    <?php echo e(old('kelengkapan_maintenance_report', $data->kelengkapan_maintenance_report ?? 0) == 1 ? 'checked' : ''); ?>>

                                
                                <input type="hidden" 
                                    name="kelengkapan_maintenance_report" 
                                    value="<?php echo e(old('kelengkapan_maintenance_report', $data->kelengkapan_maintenance_report ?? 0)); ?>">
                            <?php endif; ?>


                            <input type="number" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Admin Riksa Uji')): ?> readonly class="w-20 px-2 py-1 text-sm bg-gray-200 border border-gray-400 rounded-md cursor-not-allowed sm:flex-1" <?php endif; ?> placeholder="Qty..." name="qty_maintenance_report" value="<?php echo e(old('qty_maintenance_report')); ?>"
                                class="w-20 px-2 py-1 text-sm border border-gray-300 rounded-md sm:flex-1 <?php $__errorArgs = ['qty_maintenance_report'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <?php $__errorArgs = ['qty_maintenance_report'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-xs text-red-600">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        
                        <div class="flex items-center gap-3">
                            <label for="kelengkapan_surat_permohonan" class="flex-1 cursor-pointer">
                                Surat Permohonan
                            </label>

                            
                            <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Super Admin|Tim Riksa Uji')): ?>
                                
                                <input type="hidden" name="kelengkapan_surat_permohonan" value="0">
                                <input type="checkbox"
                                    id="kelengkapan_surat_permohonan"
                                    name="kelengkapan_surat_permohonan"
                                    value="1"
                                    <?php echo e(old('kelengkapan_surat_permohonan', $data->kelengkapan_surat_permohonan ?? 0) == 1 ? 'checked' : ''); ?>

                                    class="w-5 h-5">
                            <?php else: ?>
                                
                                <input type="checkbox"
                                    disabled
                                    class="w-5 h-5 bg-gray-200 border border-gray-400 cursor-not-allowed"
                                    id="kelengkapan_surat_permohonan"
                                    value="1"
                                    <?php echo e(old('kelengkapan_surat_permohonan', $data->kelengkapan_surat_permohonan ?? 0) == 1 ? 'checked' : ''); ?>>

                                
                                <input type="hidden" 
                                    name="kelengkapan_surat_permohonan" 
                                    value="<?php echo e(old('kelengkapan_surat_permohonan', $data->kelengkapan_surat_permohonan ?? 0)); ?>">
                            <?php endif; ?>


                            <input type="number" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Admin Riksa Uji')): ?> readonly class="w-20 px-2 py-1 text-sm bg-gray-200 border border-gray-400 rounded-md cursor-not-allowed sm:flex-1" <?php endif; ?> placeholder="Qty..." name="qty_surat_permohonan" value="<?php echo e(old('qty_surat_permohonan')); ?>"
                                class="w-20 px-2 py-1 text-sm border border-gray-300 rounded-md sm:flex-1 <?php $__errorArgs = ['qty_surat_permohonan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <?php $__errorArgs = ['qty_surat_permohonan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-xs text-red-600">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>

                
                <div>
                <label for="catatan" class="block text-sm font-medium text-gray-700">
                    Catatan
                </label>
                <textarea 
                    <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Admin Riksa Uji')): ?> readonly class="block w-full px-3 py-2 mt-1 bg-gray-200 border border-gray-400 rounded-md shadow-sm cursor-not-allowed sm:text-sm" <?php endif; ?>
                    name="catatan" 
                    id="catatan" 
                    rows="4"
                    placeholder="Masukkan catatan..."
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm <?php $__errorArgs = ['catatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> valid:border-red-600 valid:focus:border-red-600 valid:focus:ring-red-200 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('catatan')); ?></textarea>
                    <?php $__errorArgs = ['catatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-600">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                </div>

                
                <button class="px-3 py-2 font-bold text-white transition-transform rounded-lg bg-gradient-to-t from-blue-900 to-blue-500 transform-gpu hover:shadow-md hover:scale-[103%]">
                    Simpan
                </button>
            </form>
        </div>
        <?php $__env->startPush('scripts'); ?>
        <script>
        const style = document.createElement("style");
            style.innerHTML = `
            .ts-wrapper {
                width: 100% !important;
                max-width: 100% !important;
            }
            .ts-control {
                width: 100% !important;
                min-width: 100% !important;
                box-sizing: border-box;
                display: flex !important;
                flex-wrap: nowrap !important;   /* cegah melar */
                align-items: center;
            }
            .ts-control .item {
                max-width: 100%;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
            .ts-control input {
                flex: 1 1 auto !important;
                min-width: 0 !important;  /* penting: biar tidak dorong kolom */
                width: auto !important;
            }
            `;
            document.head.appendChild(style);



            // Tom Select untuk responsibles
            new TomSelect("#responsibles", {
                plugins: ['remove_button'],   // tombol hapus di setiap pilihan
                persist: false,
                create: false,
                placeholder: "Pilih penanggung jawab..."
            });

            // Dynamic Button Input
            // Row count/Jumlah baris data dimulai dari jumlah old data, kalau kosong maka = 0
            // Hitung rowCount dari old data
            let rowCount = <?php echo e(old('tools') ? count(old('tools')) : 0); ?>;

            // Init TomSelect untuk select lama (old)
            for (let i = 0; i < rowCount; i++) {
                new TomSelect(`#tool-select-${i}`, {
                    create: false,
                    placeholder: "-- Pilih alat --",
                });
            }

            // Tambah baris baru
            document.getElementById('add-tool').addEventListener('click', function() {
                let row = `
                <tr>
                    <td class="w-full sm:w-[30%] min-w-[200px] px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                        <select <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="bg-gray-200 cursor-not-allowed form-control" <?php endif; ?> id="tool-select-${rowCount}" name="tools[${rowCount}][tool_id]" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tool->id); ?>"><?php echo e($tool->nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                        <input type="number" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="bg-gray-200 rounded-md cursor-not-allowed form-control" <?php endif; ?> name="tools[${rowCount}][qty]" class="bg-gray-100 rounded-md form-control" min="1" required>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                        <select <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> disabled class="bg-gray-200 cursor-not-allowed form-control" <?php endif; ?> name="tools[${rowCount}][status]" class="form-control" required>
                            <option value="Pertama">Pertama</option>
                            <option value="Resertifikasi">Resertifikasi</option>
                        </select>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                        <input type="text" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="bg-gray-200 rounded-md cursor-not-allowed form-control" <?php endif; ?> name="tools[${rowCount}][kapasitas]" class="bg-gray-100 rounded-md form-control">
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                        <input type="text" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="bg-gray-200 rounded-md cursor-not-allowed form-control" <?php endif; ?> name="tools[${rowCount}][model]" class="bg-gray-100 rounded-md form-control">
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                        <input type="text" <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Tim Riksa Uji')): ?> readonly class="bg-gray-200 rounded-md cursor-not-allowed form-control" <?php endif; ?> name="tools[${rowCount}][no_seri]" class="bg-gray-100 rounded-md form-control">
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                        <button type="button" class="flex p-2 transition-all duration-500 rounded-full remove-row group item-center">
                            <!-- SVG hapus -->
                                <svg class="pointer-events-none" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="pointer-events-none fill-red-600" d="M4.00031 5.49999V4.69999H3.20031V5.49999H4.00031ZM16.0003 5.49999H16.8003V4.69999H16.0003V5.49999ZM17.5003 5.49999L17.5003 6.29999C17.9421 6.29999 18.3003 5.94183 18.3003 5.5C18.3003 5.05817 17.9421 4.7 17.5003 4.69999L17.5003 5.49999ZM9.30029 9.24997C9.30029 8.80814 8.94212 8.44997 8.50029 8.44997C8.05847 8.44997 7.70029 8.80814 7.70029 9.24997H9.30029ZM7.70029 13.75C7.70029 14.1918 8.05847 14.55 8.50029 14.55C8.94212 14.55 9.30029 14.1918 9.30029 13.75H7.70029ZM12.3004 9.24997C12.3004 8.80814 11.9422 8.44997 11.5004 8.44997C11.0585 8.44997 10.7004 8.80814 10.7004 9.24997H12.3004ZM10.7004 13.75C10.7004 14.1918 11.0585 14.55 11.5004 14.55C11.9422 14.55 12.3004 14.1918 12.3004 13.75H10.7004ZM4.00031 6.29999H16.0003V4.69999H4.00031V6.29999ZM15.2003 5.49999V12.5H16.8003V5.49999H15.2003ZM11.0003 16.7H9.00031V18.3H11.0003V16.7ZM4.80031 12.5V5.49999H3.20031V12.5H4.80031ZM9.00031 16.7C7.79918 16.7 6.97882 16.6983 6.36373 16.6156C5.77165 16.536 5.49093 16.3948 5.29823 16.2021L4.16686 17.3334C4.70639 17.873 5.38104 18.0979 6.15053 18.2013C6.89702 18.3017 7.84442 18.3 9.00031 18.3V16.7ZM3.20031 12.5C3.20031 13.6559 3.19861 14.6033 3.29897 15.3498C3.40243 16.1193 3.62733 16.7939 4.16686 17.3334L5.29823 16.2021C5.10553 16.0094 4.96431 15.7286 4.88471 15.1366C4.80201 14.5215 4.80031 13.7011 4.80031 12.5H3.20031ZM15.2003 12.5C15.2003 13.7011 15.1986 14.5215 15.1159 15.1366C15.0363 15.7286 14.8951 16.0094 14.7024 16.2021L15.8338 17.3334C16.3733 16.7939 16.5982 16.1193 16.7016 15.3498C16.802 14.6033 16.8003 13.6559 16.8003 12.5H15.2003ZM11.0003 18.3C12.1562 18.3 13.1036 18.3017 13.8501 18.2013C14.6196 18.0979 15.2942 17.873 15.8338 17.3334L14.7024 16.2021C14.5097 16.3948 14.229 16.536 13.6369 16.6156C13.0218 16.6983 12.2014 16.7 11.0003 16.7V18.3ZM2.50031 4.69999C2.22572 4.7 2.04405 4.7 1.94475 4.7C1.89511 4.7 1.86604 4.7 1.85624 4.7C1.85471 4.7 1.85206 4.7 1.851 4.7C1.05253 5.50059 1.85233 6.3 1.85256 6.3C1.85273 6.3 1.85297 6.3 1.85327 6.3C1.85385 6.3 1.85472 6.3 1.85587 6.3C1.86047 6.3 1.86972 6.3 1.88345 6.3C1.99328 6.3 2.39045 6.3 2.9906 6.3C4.19091 6.3 6.2032 6.3 8.35279 6.3C10.5024 6.3 12.7893 6.3 14.5387 6.3C15.4135 6.3 16.1539 6.3 16.6756 6.3C16.9364 6.3 17.1426 6.29999 17.2836 6.29999C17.3541 6.29999 17.4083 6.29999 17.4448 6.29999C17.4631 6.29999 17.477 6.29999 17.4863 6.29999C17.4909 6.29999 17.4944 6.29999 17.4968 6.29999C17.498 6.29999 17.4988 6.29999 17.4994 6.29999C17.4997 6.29999 17.4999 6.29999 17.5001 6.29999C17.5002 6.29999 17.5003 6.29999 17.5003 5.49999C17.5003 4.69999 17.5002 4.69999 17.5001 4.69999C17.4999 4.69999 17.4997 4.69999 17.4994 4.69999C17.4988 4.69999 17.498 4.69999 17.4968 4.69999C17.4944 4.69999 17.4909 4.69999 17.4863 4.69999C17.477 4.69999 17.4631 4.69999 17.4448 4.69999C17.4083 4.69999 17.3541 4.69999 17.2836 4.69999C17.1426 4.7 16.9364 4.7 16.6756 4.7C16.1539 4.7 15.4135 4.7 14.5387 4.7C12.7893 4.7 10.5024 4.7 8.35279 4.7C6.2032 4.7 4.19091 4.7 2.9906 4.7C2.39044 4.7 1.99329 4.7 1.88347 4.7C1.86974 4.7 1.86051 4.7 1.85594 4.7C1.8548 4.7 1.85396 4.7 1.85342 4.7C1.85315 4.7 1.85298 4.7 1.85288 4.7C1.85284 4.7 2.65253 5.49941 1.85408 6.3C1.85314 6.3 1.85296 6.3 1.85632 6.3C1.86608 6.3 1.89511 6.3 1.94477 6.3C2.04406 6.3 2.22573 6.3 2.50031 6.29999L2.50031 4.69999ZM7.05028 5.49994V4.16661H5.45028V5.49994H7.05028ZM7.91695 3.29994H12.0836V1.69994H7.91695V3.29994ZM12.9503 4.16661V5.49994H14.5503V4.16661H12.9503ZM12.0836 3.29994C12.5623 3.29994 12.9503 3.68796 12.9503 4.16661H14.5503C14.5503 2.8043 13.4459 1.69994 12.0836 1.69994V3.29994ZM7.05028 4.16661C7.05028 3.68796 7.4383 3.29994 7.91695 3.29994V1.69994C6.55465 1.69994 5.45028 2.8043 5.45028 4.16661H7.05028ZM2.50031 6.29999C4.70481 6.29998 6.40335 6.29998 8.1253 6.29997C9.84725 6.29996 11.5458 6.29995 13.7503 6.29994L13.7503 4.69994C11.5458 4.69995 9.84724 4.69996 8.12529 4.69997C6.40335 4.69998 4.7048 4.69998 2.50031 4.69999L2.50031 6.29999ZM13.7503 6.29994L17.5003 6.29999L17.5003 4.69999L13.7503 4.69994L13.7503 6.29994ZM7.70029 9.24997V13.75H9.30029V9.24997H7.70029ZM10.7004 9.24997V13.75H12.3004V9.24997H10.7004Z" fill="#F87171"></path>
                                </svg>
                        </button>
                    </td>
                </tr>`;

                document.querySelector('#tools-table tbody').insertAdjacentHTML('beforeend', row);

                // Init TomSelect pada row baru
                new TomSelect(`#tool-select-${rowCount}`, {
                    create: false,
                    placeholder: "-- Pilih alat --",
                });

                rowCount++;
            });

            // Event delegation untuk hapus row (lama & baru)
            document.querySelector('#tools-table tbody').addEventListener('click', function(e) {
                if (e.target.closest('.remove-row')) {
                    e.target.closest('tr').remove();
                }
            });

            // Remove Button Dynamic Input
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-row')) {
                    e.target.closest('tr').remove();
                }
            });
        </script>
        <?php $__env->stopPush(); ?>
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
<?php /**PATH C:\laragon\www\asteria\resources\views/job_orders/create.blade.php ENDPATH**/ ?>