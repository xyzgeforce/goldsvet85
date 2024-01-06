<style>

    .nav .locale-selector .locale-selector__selector {
        padding-top: 14px;
        padding-bottom: 14px;
        border: none;
        border-left: 1px solid #eee;
        background-color: transparent;
    }

    .locale-selector {
        position: relative;
        display: inline-block;
        font-weight: 500;
        color: #fff
    }

    .locale-selector--small .locale-selector__name {
        display: none
    }

    .locale-selector--small .locale-selector__dropdown {
        bottom: auto;
        top: 100%;
        right: -6px;
        left: auto;
        margin: 20px 0 0
    }

    .locale-selector--small .locale-selector__dropdown::before {
        top: -10px;
        bottom: auto;
        right: 8px;
        left: auto;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 7px solid #272831;
        border-top: transparent
    }

    .locale-selector__selector {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        font-size: 14px;
        width: 100%;
        transition: 0.25s all ease
    }

    @media (min-width: 768px) {
        .locale-selector__selector {
            width:auto
        }
    }

    .locale-selector__selector:focus,.locale-selector__selector:hover {
        color: #ffbb39
    }

    .locale-selector__img {
        width: 22px;
        height: 22px;
        border-radius: 50%
    }

    .locale-selector__name {
        display: block;
        font-size: 14px;
        line-height: 1;
        margin-left: 20px
    }

    .locale-selector__dropdown {
        display: none;
        background: #272831;
        position: absolute;
        bottom: 100%;
        left: 0;
        z-index: 995;
        padding: 4px 0;
        min-width: 80px;
        margin: 0;
        list-style: none;
        border-radius: 8px;
        text-transform: uppercase
    }

    .open .locale-selector__dropdown {
        display: block
    }

    .locale-selector__dropdown::before {
        content: "";
        position: absolute;
        bottom: -15px;
        left: 8px;
        display: block;
        margin: 4px 0 0 6px;
        border: 8px solid transparent;
        border-top: 7px solid #272831
    }

    .locale-selector__link {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        transition: 0.25s all ease;
        padding: 6px 10px;
        color: #7a7b91
    }

    .locale-selector__link:hover,.locale-selector__link:focus {
        color: #fff
    }

    .locale-selector__dropdown-name {
        font-size: 12px;
        line-height: 1.2;
        margin-left: 10px;
        white-space: nowrap
    }
</style>

<?php
    $lang = [
        'en' => 'English',
        'ru' => 'Russian',
        'de' => 'Deutsch',
    ];
    if (isset($_COOKIE['language'])) {
        $laut = htmlspecialchars($_COOKIE['language']);
    } else {
        $laut = 'ru';
    }
?>
<div class="language-select top-bar__locale locale-selector--small locale-selector ng-isolate-scope" dropdown="">
    <button class="locale-selector__selector">
        <img class="locale-selector__img" alt="<?php echo e($lang[$laut]); ?>" src="https://cdn2.softswiss.net/flags/square/<?php echo e($laut); ?>.svg">
        <span class="locale-selector__name ng-binding"><?php echo e(strtoupper(substr($lang[$laut], 0, 3))); ?></span>
    </button>
    <ul role="menu" class="locale-selector__dropdown">
        <?php $__currentLoopData = $lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="locale-selector__item" style="margin: 4px 6px;">
                <i data-lang-code="<?php echo e($k); ?>" role="button">
                    <img class="locale-selector__img" alt="<?php echo e($v); ?>" src="https://cdn2.softswiss.net/flags/square/<?php echo e($k); ?>.svg">
                    <span class="locale-selector__dropdown-name ng-binding"><?php echo e(strtoupper(substr($v, 0, 3))); ?></span>
                </i>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<script>
    $('.language-select').on('click', 'i', function() {
        var langCode = $(this).data('lang-code');
        if (langCode) {
            document.cookie = 'language=' + langCode + ';path=/';
            location.reload();
        }
    });
    $('.locale-selector__selector').click(function(){
        $(this).parent().toggleClass('open');
    })
</script>
<?php /**PATH C:\OSPanel\domains\localhost\resources\views/backend/partials/localeSelector.blade.php ENDPATH**/ ?>