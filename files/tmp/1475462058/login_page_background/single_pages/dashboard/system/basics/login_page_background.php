<?php  defined('C5_EXECUTE') or die('Access Denied.'); ?>

<?php  Core::make('help')->display(t('The selected image will be stretched to fill the width and height of the login page. For best results select an image that is at least 500px by 500px. Clearing the selected image will restore the default background image.')); ?>

<form method="post" id="site-form" action="<?php  echo $this->action('save_settings'); ?>"  enctype="multipart/form-data">

    <?php  echo $this->controller->token->output('save_settings'); ?>

    <div class="form-group">
        <?php  echo $form->label('background_image', t('Background Image')); ?>
        <?php  $al = Core::make('helper/concrete/asset_library'); ?>
        <?php  echo $al->image('background_image', 'background_image', 'Select Background Image', $imageObject); ?>
    </div>

    <div class="ccm-dashboard-form-actions-wrapper">
        <div class="ccm-dashboard-form-actions">
            <button class="pull-right btn btn-success" type="submit"><?php  echo t('Save')?></button>
        </div>
    </div>

</form>
