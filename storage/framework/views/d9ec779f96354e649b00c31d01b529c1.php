<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<div class="grid w-full min-h-screen grid-cols-1 overflow-hidden md:grid-cols-12 bg-gradient-to-b from-blue-900 to-blue-500">

    <!-- LEFT -->
    <div class="flex col-span-1 p-10 text-white md:py-8 md:col-span-7 md:px-32">
        <div class="flex flex-col justify-between w-full min-w-sm">
            <div>
                <h1 class="my-8 text-4xl font-bold leading-tight md:text-4xl text-indigo-50">
                    Selamat Datang di Sistem Riksa Uji
                    <span class="mt-2 md:block">PT. Asteria Riksa Indonesia</span>
                </h1>

                <p class="mb-2 text-lg">
                    Platform untuk monitoring, mengelola, dan memastikan semua peralatan industri Anda lulus uji sesuai standar K3!
                </p>

                <div class="flex justify-around gap-5">
                    <img src="<?php echo e(asset('assets/logo/image-riksa-uji.png')); ?>"
                        class="object-contain md:w-64 md:h-64 w-52 h-52 my-9 transform-gpu hover:scale-105">

                    <div class="flex flex-col justify-center">
                        <p class="mb-2 text-lg">✅ Monitoring jadwal riksa uji</p>
                        <p class="mb-2 text-lg">✅ Laporan inspeksi mudah & cepat</p>
                        <p class="mb-2 text-lg">✅ Status pemeriksaan alat real-time</p>
                    </div>
                </div>

                <p class="mb-1 text-base">Sudah punya akun?</p>

                <div class="flex items-center h-12">
                    <a class="px-4 py-2 font-semibold text-blue-900 bg-white border border-blue-500 rounded-lg hover:bg-gray-50" href="<?php echo e(route('login')); ?>">
                        Log In
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT -->
    <div class="relative col-span-1 px-6 md:px-0 md:col-span-5 flex md:rounded-tl-[44px] bg-white">
        <div class="absolute top-4 right-0 -left-4 h-full w-full rounded-tl-[44px] bg-white/50 hidden md:block"></div>

        <div class="z-10 w-full">
            <div class="max-w-sm p-4 mx-auto mt-6 bg-white sm:p-10 lg:max-w-lg xl:max-w-xl">

                <h2 class="mb-8 text-4xl font-bold text-slate-600">Registrasi</h2>

                <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <input id="nama" name="nama" type="text" value="<?php echo e(old('nama')); ?>"
                        placeholder="Nama Lengkap"
                        class="w-full px-4 py-4 mb-4 text-lg border-b text-slate-700 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('nama'),'class' => 'mb-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('nama')),'class' => 'mb-3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>

                    <input id="id_user" name="id_user" type="text" value="<?php echo e(old('id_user')); ?>"
                        placeholder="ID Karyawan"
                        class="w-full px-4 py-4 mb-4 text-lg border-b text-slate-700 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('id_user'),'class' => 'mb-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('id_user')),'class' => 'mb-3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>

                    <input id="email" name="email" type="email" value="<?php echo e(old('email')); ?>"
                        placeholder="Email"
                        class="w-full px-4 py-4 mb-4 text-lg border-b text-slate-700 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('email'),'class' => 'mb-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('email')),'class' => 'mb-3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>

                    <input id="jabatan" name="jabatan" type="text" value="<?php echo e(old('jabatan')); ?>"
                        placeholder="Jabatan"
                        class="w-full px-4 py-4 mb-4 text-lg border-b text-slate-700 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('jabatan'),'class' => 'mb-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('jabatan')),'class' => 'mb-3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>

                    <input id="avatar" name="avatar" type="file"
                        class="w-full px-2 py-3 mb-4 text-sm border-b text-slate-600">

                    <div class="relative mb-4">
                        <input id="password" name="password" type="password"
                            placeholder="Password"
                            class="w-full px-4 py-4 pr-12 text-lg border-b text-slate-700 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                        <button type="button"
                            onclick="togglePassword('password')"
                            class="absolute text-gray-500 -translate-y-1/2 right-3 top-1/2 hover:text-blue-500">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5
                                    c4.478 0 8.268 2.943 9.542 7
                                    -1.274 4.057-5.064 7-9.542 7
                                    -4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>

                    <div class="relative mb-8">
                        <input id="password_confirmation" name="password_confirmation" type="password"
                            placeholder="Konfirmasi Password"
                            class="w-full px-4 py-4 pr-12 text-lg border-b text-slate-700 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                        
                        <button type="button"
                            onclick="togglePassword('password_confirmation')"
                            class="absolute text-gray-500 -translate-y-1/2 right-3 top-1/2 hover:text-blue-500">
                            <svg id="eyeIconConfirm" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                    <button type="submit"
                        class="w-full py-4 font-bold text-white transition rounded-full bg-gradient-to-t from-blue-900 to-blue-500 hover:-translate-y-1 hover:shadow-lg">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>

<script>
function togglePassword(id) {
    const p = document.getElementById(id);
    p.type = p.type === 'password' ? 'text' : 'password';
}
</script>
<?php /**PATH C:\laragon\www\asteria\resources\views/auth/register.blade.php ENDPATH**/ ?>