<?php
    $i = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        button{
            border: 3px solid black;
        }

        button:hover{
            border: 3px solid green;
        }

        input:hover{
            border: 1px solid green;
        }

    </style>
</head>
<body>
    <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header', null, []); ?> 
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('New Character')); ?>

            </h2>
         <?php $__env->endSlot(); ?>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                            <h1> <?php echo e($isAdmin); ?> </h1>
                            <form action="<?php echo e(route('new', $userId)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <label for="name"> Name: </label>
                                <input type="text" name="name" value="<?php echo e(old('name')); ?>">
                                <br>
                                <br>
                                <?php if($isAdmin): ?>
                                <label for="enemy"> Enemy: </label>
                                <input type="number" name="enemy" value="<?php echo e(old('enemy', 0)); ?>"> 
                                <br>
                                <br>
                                <?php endif; ?>
                                <label for="defence"> Defence: </label>
                                <input type="number" name="defence" value="<?php echo e(old('defence')); ?>">
                                <br>
                                <br>
                                <label for="strength"> Strength: </label>
                                <input type="number" name="strength" value="<?php echo e(old('strength')); ?>">
                                <br>
                                <br>
                                <label for="accuracy"> Accuracy: </label>
                                <input type="number" name="accuracy" value="<?php echo e(old('accuracy')); ?>">
                                <br>
                                <br>
                                <label for="magic"> Magic: </label>
                                <input type="number" name="magic" value="<?php echo e(old('magic')); ?>">
                                <br>
                                <br>
                                <button type="submit"> Confirm changes </button>
                                <?php if(count($errors) > 0): ?>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <h4 style="color: red"> <?php echo e($error); ?> </h4>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </form>
                    </div>
                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
</body>
</html>



<?php /**PATH C:\Users\murak\OneDrive\Asztali gép\Szerveroldali\beadando2\resources\views/newcharacter.blade.php ENDPATH**/ ?>