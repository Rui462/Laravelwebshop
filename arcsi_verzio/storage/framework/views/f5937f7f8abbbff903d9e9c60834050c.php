<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adatok Feltöltése</title>
</head>
<body>
    <h1>Adatok Feltöltése</h1>

    <!-- Sikeres mentés üzenet -->
    <?php if(session('success')): ?>
        <p style="color: green;"><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <!-- Űrlap új adatok feltöltéséhez -->
    <form action="<?php echo e(route('tablaneve.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="nev">Név:</label>
        <input type="text" id="nev" name="nev" required>
        
        <label for="kor">Kor:</label>
        <input type="number" id="kor" name="kor" required>

        <button type="submit">Hozzáadás</button>
    </form>

    <h2>Mentett adatok</h2>
    <ul>
        <?php $__currentLoopData = $emberek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($ember->nev); ?> - <?php echo e($ember->kor); ?> éves</li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH C:\Users\szabo\proba\resources\views/tablaneve/index.blade.php ENDPATH**/ ?>