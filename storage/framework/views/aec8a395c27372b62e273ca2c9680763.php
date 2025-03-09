<?php
    $i = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
        .newMatch{
            border: 1px solid black;
            width: 100px;
            text-align: center;
        }

        .newMatch:hover{
            border: 2px solid green;
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
                <?php echo e(__('Details')); ?>

            </h2>
         <?php $__env->endSlot(); ?>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                       
                            <h2 style="font-weight: bold">name: <?php echo e($character->name); ?> </h2>
                            <?php if($character->enemy === 1): ?>
                                <h3>Enemy</h3>
                            <?php endif; ?>
                            <br>
                            <h3>defence: <?php echo e($character->defence); ?> </h3>
                            <h3>strength: <?php echo e($character->strength); ?> </h3>
                            <h3>accuracy: <?php echo e($character->accuracy); ?> </h3>
                            <h3>magic: <?php echo e($character->magic); ?> </h3>
                            <br>
                            <?php if($character->enemy === 0): ?>
                                <hr>
                                <br>
                                <h3 style="font-weight: bold">contests:</h3>
                                <?php if(count($contests) > 0): ?>
                                    <?php $__currentLoopData = $contests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <h4>place: <?php echo e($placeNames[$i]); ?> | enemy: <?php echo e($enemyNames[$i++]); ?></h4>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                   <h4> This character has not participated in a contest yet. </h4>
                                <?php endif; ?>
                                <br>
                                <hr>
                                <br>
                            <?php endif; ?>
                            <h3 class="newMatch">
                                <a href="<?php echo e(route('edit', ['id' => $character['id']])); ?>">Edit</a>
                            </h3>
                            <br>
                            <h3 class="newMatch">Delete</h3>
                            <?php if($character->enemy === 0): ?>
                                <br>
                                <h3 class="newMatch">New Match</h3>
                            <?php endif; ?>
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

<?php /**PATH C:\Users\murak\OneDrive\Asztali gép\Szerveroldali\beadando2\resources\views/details.blade.php ENDPATH**/ ?>