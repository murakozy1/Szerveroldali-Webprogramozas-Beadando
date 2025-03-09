<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            div{
                width: 90%;
                margin-left: auto;
                margin-right: auto;
                text-align: justify;    
            }

            header{
                text-align: center;
                font-size: 20px;
            }

        </style>
        
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        
                        <?php if(Route::has('login')): ?>
                            <nav class="-mx-3 flex flex-1 justify-end">
                                <?php if(auth()->guard()->check()): ?>
                                    <a
                                        href="<?php echo e(url('/dashboard')); ?>"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                <?php else: ?>
                                    <a
                                        href="<?php echo e(route('login')); ?>"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    <?php if(Route::has('register')): ?>
                                        <a
                                            href="<?php echo e(route('register')); ?>"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </nav>
                        <?php endif; ?>
                        <hr>
                    </header>

                    <main>
                        <div>
                            Welcome to "Battle Arena: Solo Showdown" – a thrilling one-player turn-based fighting game where you, the lone warrior, embark on an epic journey to conquer formidable foes and emerge as the ultimate champion of the arena! Prepare to test your skills, strategy, and courage as you face a series of challenging enemies in pulse-pounding battles. With each victory, unlock new abilities, upgrade your gear, and rise to greater heights of power and glory. Are you ready to step into the arena and claim your place among the legends? The battle awaits!
                        </div>
                        <h3>
                            characters: <?php echo e($count); ?>

                        </h3>
                        <h3>
                            contests: <?php echo e($contestCount); ?>

                        </h3>
                    </main>   

                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\murak\OneDrive\Asztali gép\Szerveroldali\beadando2\resources\views/welcome.blade.php ENDPATH**/ ?>