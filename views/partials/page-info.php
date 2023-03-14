<?php if(isset($_SESSION['errors'])) :?>
    <div id="error-message" class="text-red-500  text-xs mt-22 mb-2 bg-red-100 p-3 rounded-md">
        <ul>
            <?php foreach($_SESSION['errors'] as $errors) :?>
                <li><?= $errors ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(isset($_SESSION['darkSuccess'])) :?>
    <div id="d-success-message" class="text-green-300 text-base  mb-2 bg-green-400/20 border-sm p-3 rounded-md">
        <?= $_SESSION['darkSuccess'] ?>
    </div>
<?php endif; ?>

<?php if(isset($_SESSION['normalSuccess'])) :?>
    <div id="n-success-message" class="text-green-400 text-base  mb-2 bg-green-100 border-sm p-3 rounded-md">
        <?= $_SESSION['normalSuccess'] ?>
    </div>
<?php endif; ?>