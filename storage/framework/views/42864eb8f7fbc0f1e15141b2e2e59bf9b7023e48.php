<?php $__env->startSection('page-title', trans('app.general_settings')); ?>
<?php $__env->startSection('page-heading', trans('app.general_settings')); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <section class="content">

        <div class="box box-default">
            <?php echo Form::open(['route' => ['backend.settings.list.update', 'general'], 'id' => 'general-settings-form']); ?>

            <div class="box-header with-border">
                <h3 class="box-title"><?php echo app('translator')->get('app.general_settings'); ?></h3>
            </div>

            <div class="box-body">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('app.name'); ?></label>
                            <input type="text" class="form-control" id="app_name" name="app_name" value="<?php echo e(settings('app_name')); ?>">
                        </div>
                        <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.frontend'); ?>
                            </label>
                            <?php echo Form::select('frontend', $directories, settings('frontend', 'Default'), ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.turn_off_the_site'); ?>
                            </label>
                            <?php echo Form::select('siteisclosed', ['0' => __('app.no'), '1' => __('app.yes')], settings('siteisclosed'), ['class' => 'form-control']); ?>

                        </div>

                       <!-- <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.contact_form_active'); ?>
                            </label>
                            <?php echo Form::select('contact_form_active', ['0' => __('app.no'), '1' => __('app.yes')], settings('contact_form_active'), ['class' => 'form-control']); ?>

                        </div> -->


                    </div>

                    <div class="col-md-6">

                        <!-- <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.country_check'); ?>
                            </label>
                            <?php echo Form::select('country_check', ['0' => __('app.no'), '1' => __('app.yes')], settings('country_check'), ['class' => 'form-control']); ?>

                        </div> -->

                      <!-- <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.blocked_countries'); ?>
                            </label>


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
                            <?php echo Form::select('blocked_countries[]', array_combine($countries,$countries), settings('blocked_countries'), ['class' => 'form-control select2', 'style' => 'width: 100%', 'multiple' => true]); ?>

                        </div> -->

                      
                       <!--  <hr>

                       <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.phone_prefix_check'); ?>
                            </label>
                            <?php echo Form::select('phone_prefix_check', ['0' => __('app.no'), '1' => __('app.yes')], settings('phone_prefix_check'), ['class' => 'form-control']); ?>

                        </div> -->

                       <!-- <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.blocked_phone_prefixes'); ?>
                            </label>
                            <?php $prefixes = ['+7', '+380']; ?>
                            <?php echo Form::select('blocked_phone_prefixes[]', array_combine($prefixes,$prefixes), settings('blocked_phone_prefixes'), ['class' => 'form-control select2', 'style' => 'width: 100%', 'multiple' => true]); ?>

                        </div> -->

                       
                      <!--  <hr>
<div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.domain_check'); ?>
                            </label>
                            <?php echo Form::select('domain_check', ['0' => __('app.no'), '1' => __('app.yes')], settings('domain_check'), ['class' => 'form-control']); ?>

                        </div> -->

                        <!-- <div class="form-group">
                            <label>
                                <?php echo app('translator')->get('app.blocked_domains'); ?>
                            </label>
                            <?php $domains = ['.mail.com', '.email.ua', '.yandex.ru', '.ya.ru', '.ua']; ?>
                            <?php echo Form::select('blocked_domains[]', array_combine($domains,$domains), settings('blocked_domains'), ['class' => 'form-control select2', 'style' => 'width: 100%', 'multiple' => true]); ?>

                        </div> -->
                    </div>

                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">
                    <?php echo app('translator')->get('app.edit_settings'); ?>
                </button>
                <?php if( Auth::user()->hasRole('admin') && Auth::user()->shop_id == 0 ): ?>

                    <a href="<?php echo e(route('backend.settings.sync')); ?>"
                       class="btn btn-danger "
                       data-method="PUT"
                       data-confirm-title="<?php echo app('translator')->get('app.please_confirm'); ?>"
                       data-confirm-text="<?php echo app('translator')->get('app.do_you_want_to_sync_shops'); ?>"
                       data-confirm-delete="<?php echo app('translator')->get('app.yes_i_do'); ?>">
                        <b>Sync</b></a>
                <?php endif; ?>

                <a href="<?php echo e(route('backend.settings.gelete_stat')); ?>"
                   class="btn btn-danger "
                   data-method="PUT"
                   data-confirm-title="<?php echo app('translator')->get('app.please_confirm'); ?>"
                   data-confirm-text="<?php echo app('translator')->get('app.delete_stat_game_question'); ?>"
                   data-confirm-delete="<?php echo app('translator')->get('app.yes_i_do'); ?>">
                    <b><?php echo app('translator')->get('app.delete_stat_game'); ?></b></a>
                <a href="<?php echo e(route('backend.settings.gelete_log')); ?>"
                   class="btn btn-danger "
                   data-method="PUT"
                   data-confirm-title="<?php echo app('translator')->get('app.please_confirm'); ?>"
                   data-confirm-text="<?php echo app('translator')->get('app.delete_log_game_question'); ?>"
                   data-confirm-delete="<?php echo app('translator')->get('app.yes_i_do'); ?>">
                    <b><?php echo app('translator')->get('app.delete_log_game'); ?></b></a>


            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/fastuser/data/www/demo60.2games.pw/resources/views/backend/settings/general.blade.php ENDPATH**/ ?>