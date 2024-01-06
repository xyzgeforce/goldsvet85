
<div class="row">

    <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.title'))): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label><?php echo app('translator')->get('app.title'); ?></label>
            <input type="text" class="form-control" id="title" name="name" placeholder="<?php echo app('translator')->get('app.title'); ?>" required value="<?php echo e($edit ? $shop->name : old('name')); ?>">
        </div>
    </div>
    <?php endif; ?>

    <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.percent'))): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label><?php echo app('translator')->get('app.percent'); ?></label>
            <?php
                $percents = array_combine(\VanguardLTE\Shop::$values['percent'], \VanguardLTE\Shop::$values['percent_labels']);
            ?>
            <?php echo Form::select('percent', \VanguardLTE\Shop::$values['percent_labels'], $edit ? $shop->percent : (old('percent')?:'90'), ['class' => 'form-control']); ?>

        </div>
    </div>
    <?php endif; ?>

    <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.frontend'))): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label> <?php echo app('translator')->get('app.frontend'); ?></label>
            <?php echo Form::select('frontend', $directories, $edit ? $shop->frontend : (old('frontend')?:'Default'), ['class' => 'form-control']); ?>

        </div>
    </div>
    <?php endif; ?>



    <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.order'))): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label> <?php echo app('translator')->get('app.order'); ?></label>
            <?php
                $orders = array_combine(\VanguardLTE\Shop::$values['orderby'], \VanguardLTE\Shop::$values['orderby']);
            ?>
            <?php echo Form::select('orderby', $orders, $edit ? $shop->orderby : old('orderby'), ['class' => 'form-control']); ?>

        </div>
    </div>
    <?php endif; ?>

    <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.currency'))): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label> <?php echo app('translator')->get('app.currency'); ?></label>
            <?php
                $currencies = array_combine(\VanguardLTE\Shop::$values['currency'], \VanguardLTE\Shop::$values['currency']);
            ?>
            <?php echo Form::select('currency', $currencies, $edit ? $shop->currency : (old('currency')?:'USD'), ['class' => 'form-control']); ?>

        </div>
    </div>
    <?php endif; ?>

    <div class="col-md-6">
        <div class="form-group">
            <label for="device"> <?php echo app('translator')->get('app.categories'); ?></label>
            <select class="form-control select2" name="categories[]" <?php echo e($edit ? 'disabled' : ''); ?> multiple="multiple" style="width: 100%;" required>
                <option value="0" <?php echo e(((old('categories') && in_array(0, old('categories')) ) || ($edit && in_array(0, $cats) )) ? 'selected':''); ?>>All</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"
                            <?php echo e(((old('categories') && in_array($category->id, old('categories')) )  || ($edit && in_array($category->id, $cats) ))
    ? 'selected':''); ?>

                    ><?php echo e($category->title); ?></option>
                    <?php $__currentLoopData = $category->inner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($inner->id); ?>"
                                <?php echo e((( old('categories') && in_array($inner->id, old('categories')) || ( $edit && in_array($inner->id, $cats) )) ) ? 'selected':''); ?>><?php echo e($inner->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>

    <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.max_win'))): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label><?php echo app('translator')->get('app.max_win'); ?></label>
            <?php
                $max_win = array_combine(\VanguardLTE\Shop::$values['max_win'], \VanguardLTE\Shop::$values['max_win']);
            ?>
            <?php echo Form::select('max_win', $max_win, $edit ? $shop->max_win : (old('max_win')?:'100'), ['class' => 'form-control']); ?>

        </div>
    </div>
    <?php endif; ?>

    <?php if(!$edit || ($edit && auth()->user()->hasRole('admin'))): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label><?php echo app('translator')->get('app.shop_limit'); ?></label>
            <?php
                $shop_limits = array_combine(\VanguardLTE\Shop::$values['shop_limit'], \VanguardLTE\Shop::$values['shop_limit']);
            ?>
            <?php echo Form::select('shop_limit', $shop_limits, $edit ? $shop->shop_limit : (old('shop_limit')?:'200'), ['class' => 'form-control']); ?>

        </div>
    </div>
    <?php endif; ?>

    <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.access'))): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label> <?php echo app('translator')->get('app.access'); ?></label>
            <?php echo Form::select('access', [__('app.no'), __('app.yes')], $edit ? $shop->access : (old('access')?:''), ['class' => 'form-control']); ?>

        </div>
    </div>
    <?php endif; ?>

    <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.country'))): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label> <?php echo app('translator')->get('app.country'); ?></label>
            <?php $countries = [
'Afghanistan',
'Albania',
'Algeria',
'American Samoa',
'Andorra',
'Angola',
'Anguilla',
'Antarctica',
'Antigua and Barbuda',
'Argentina',
'Armenia',
'Aruba',
'Australia',
'Austria',
'Azerbaijan',
'Bahamas',
'Bahrain',
'Bangladesh',
'Barbados',
'Belarus',
'Belgium',
'Belize',
'Benin',
'Bermuda',
'Bhutan',
'Bolivia',
'Bonaire, Sint Eustatius, and Saba',
'Bosnia and Herzegovina',
'Botswana',
'Bouvet Island',
'Brazil',
'British Indian Ocean Territory',
'British Virgin Islands',
'Brunei',
'Bulgaria',
'Burkina Faso',
'Burundi',
'Cabo Verde',
'Cambodia',
'Cameroon',
'Canada',
'Cayman Islands',
'Central African Republic',
'Chad',
'Chile',
'China',
'Christmas Island',
'Cocos [Keeling] Islands',
'Colombia',
'Comoros',
'Congo Republic',
'Cook Islands',
'Costa Rica',
'Croatia',
'Cuba',
'Curaçao',
'Cyprus',
'Czechia',
'DR Congo',
'Denmark',
'Djibouti',
'Dominica',
'Dominican Republic',
'East Timor',
'Ecuador',
'Egypt',
'El Salvador',
'Equatorial Guinea',
'Eritrea',
'Estonia',
'Eswatini',
'Ethiopia',
'Falkland Islands',
'Faroe Islands',
'Federated States of Micronesia',
'Fiji',
'Finland',
'France',
'French Guiana',
'French Polynesia',
'French Southern Territories',
'Gabon',
'Gambia',
'Georgia',
'Germany',
'Ghana',
'Gibraltar',
'Greece',
'Greenland',
'Grenada',
'Guadeloupe',
'Guam',
'Guatemala',
'Guernsey',
'Guinea',
'Guinea-Bissau',
'Guyana',
'Haiti',
'Hashemite Kingdom of Jordan',
'Heard Island and McDonald Islands',
'Honduras',
'Hong Kong',
'Hungary',
'Iceland',
'India',
'Indonesia',
'Iran',
'Iraq',
'Ireland',
'Isle of Man',
'Israel',
'Italy',
'Ivory Coast',
'Jamaica',
'Japan',
'Jersey',
'Kazakhstan',
'Kenya',
'Kiribati',
'Kosovo',
'Kuwait',
'Kyrgyzstan',
'Laos',
'Latvia',
'Lebanon',
'Lesotho',
'Liberia',
'Libya',
'Liechtenstein',
'Luxembourg',
'Macao',
'Madagascar',
'Malawi',
'Malaysia',
'Maldives',
'Mali',
'Malta',
'Marshall Islands',
'Martinique',
'Mauritania',
'Mauritius',
'Mayotte',
'Mexico',
'Monaco',
'Mongolia',
'Montenegro',
'Montserrat',
'Morocco',
'Mozambique',
'Myanmar',
'Namibia',
'Nauru',
'Nepal',
'Netherlands',
'New Caledonia',
'New Zealand',
'Nicaragua',
'Niger',
'Nigeria',
'Niue',
'Norfolk Island',
'North Korea',
'North Macedonia',
'Northern Mariana Islands',
'Norway',
'Oman',
'Pakistan',
'Palau',
'Palestine',
'Panama',
'Papua New Guinea',
'Paraguay',
'Peru',
'Philippines',
'Pitcairn Islands',
'Poland',
'Portugal',
'Puerto Rico',
'Qatar',
'Republic of Lithuania',
'Republic of Moldova',
'Romania',
'Russia',
'Rwanda',
'Réunion',
'Saint Barthélemy',
'Saint Helena',
'Saint Lucia',
'Saint Martin',
'Saint Pierre and Miquelon',
'Saint Vincent and the Grenadines',
'Samoa',
'San Marino',
'Saudi Arabia',
'Senegal',
'Serbia',
'Seychelles',
'Sierra Leone',
'Singapore',
'Sint Maarten',
'Slovakia',
'Slovenia',
'Solomon Islands',
'Somalia',
'South Africa',
'South Georgia and the South Sandwich Islands',
'South Korea',
'South Sudan',
'Spain',
'Sri Lanka',
'St Kitts and Nevis',
'Sudan',
'Suriname',
'Svalbard and Jan Mayen',
'Sweden',
'Switzerland',
'Syria',
'São Tomé and Príncipe',
'Taiwan',
'Tajikistan',
'Tanzania',
'Thailand',
'Togo',
'Tokelau',
'Tonga',
'Trinidad and Tobago',
'Tunisia',
'Turkey',
'Turkmenistan',
'Turks and Caicos Islands',
'Tuvalu',
'U.S. Minor Outlying Islands',
'U.S. Virgin Islands',
'Uganda',
'Ukraine',
'United Arab Emirates',
'United Kingdom',
'United States',
'Uruguay',
'Uzbekistan',
'Vanuatu',
'Vatican City',
'Venezuela',
'Vietnam',
'Wallis and Futuna',
'Western Sahara',
'Yemen',
'Zambia',
'Zimbabwe',
'Åland'
			]; ?>
            <?php echo Form::select('country[]', array_combine($countries,$countries), $edit ? $shop->countries->pluck('country') : old('country'), ['class' => 'form-control select2', 'style' => 'width: 100%', 'multiple' => true]); ?>

        </div>
    </div>
    <?php endif; ?>



    <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.os'))): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label> <?php echo app('translator')->get('app.os'); ?></label>
            <?php $os = [
'Windows',
'iPad',
'iPhone',
'Mac OS X',
'Android',
'Linux',
			]; ?>
            <?php echo Form::select('os[]', array_combine($os,$os), $edit ? $shop->oss->pluck('os') : old('os'), ['class' => 'form-control select2', 'style' => 'width: 100%', 'multiple' => true]); ?>

        </div>
    </div>
    <?php endif; ?>


    <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.device'))): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label> <?php echo app('translator')->get('app.device'); ?></label>
            <?php $devices = ['Computer','Mobile', 'Tablet']; ?>
            <?php echo Form::select('device[]', array_combine($devices,$devices), $edit ? $shop->devices->pluck('device') : old('device'), ['class' => 'form-control select2', 'style' => 'width: 100%', 'multiple' => true]); ?>

        </div>
    </div>
    <?php endif; ?>

        <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.terms_and_conditions'))): ?>
        <div class="col-md-6">
            <div class="form-group">
                <label> <?php echo app('translator')->get('app.rules_terms_and_conditions'); ?></label>
                <?php echo Form::select('rules_terms_and_conditions', [0 => __('app.no'), 1 => __('app.yes')], $edit ? $shop->rules_terms_and_conditions : old('rules_terms_and_conditions'), ['class' => 'form-control']); ?>

            </div>
        </div>
        <?php endif; ?>
        <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.privacy_policy'))): ?>
        <div class="col-md-6">
            <div class="form-group">
                <label> <?php echo app('translator')->get('app.rules_privacy_policy'); ?></label>
                <?php echo Form::select('rules_privacy_policy', [0 => __('app.no'), 1 => __('app.yes')], $edit ? $shop->rules_privacy_policy : old('rules_privacy_policy'), ['class' => 'form-control']); ?>

            </div>
        </div>
        <?php endif; ?>
        <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.general_bonus_policy'))): ?>
        <div class="col-md-6">
            <div class="form-group">
                <label> <?php echo app('translator')->get('app.rules_general_bonus_policy'); ?></label>
                <?php echo Form::select('rules_general_bonus_policy', [0 => __('app.no'), 1 => __('app.yes')], $edit ? $shop->rules_general_bonus_policy : old('rules_general_bonus_policy'), ['class' => 'form-control']); ?>

            </div>
        </div>
        <?php endif; ?>
        <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.why_bitcoin'))): ?>
        <div class="col-md-6">
            <div class="form-group">
                <label> <?php echo app('translator')->get('app.rules_why_bitcoin'); ?></label>
                <?php echo Form::select('rules_why_bitcoin', [0 => __('app.no'), 1 => __('app.yes')], $edit ? $shop->rules_why_bitcoin : old('rules_why_bitcoin'), ['class' => 'form-control']); ?>

            </div>
        </div>
        <?php endif; ?>
        <?php if(!$edit || ($edit && auth()->user()->hasPermission('shops.responsible_gaming'))): ?>
        <div class="col-md-6">
            <div class="form-group">
                <label> <?php echo app('translator')->get('app.rules_responsible_gaming'); ?></label>
                <?php echo Form::select('rules_responsible_gaming', [0 => __('app.no'), 1 => __('app.yes')], $edit ? $shop->rules_responsible_gaming : old('rules_responsible_gaming'), ['class' => 'form-control']); ?>

            </div>
        </div>
        <?php endif; ?>


    <?php if($edit && count($blocks)): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label for="device">
                <?php echo app('translator')->get('app.status'); ?>:
                <?php if($shop->is_blocked): ?>
                    <?php echo app('translator')->get('app.block'); ?>
                <?php else: ?>
                    <?php echo app('translator')->get('app.unblock'); ?>
                <?php endif; ?>
            </label>
            <?php echo Form::select('is_blocked', ['' => '---'] + $blocks, $edit ? $shop->is_blocked : old('is_blocked'), ['class' => 'form-control']); ?>

        </div>
    </div>
    <?php endif; ?>


    <?php if(isset($balance)): ?>
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo e(trans('app.balance')); ?></label>
                <input type="text" class="form-control" name="balance" value="<?php echo e(old('balance')?:0); ?>">
            </div>
        </div>
    <?php endif; ?>
</div>


<?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/shops/partials/base.blade.php ENDPATH**/ ?>