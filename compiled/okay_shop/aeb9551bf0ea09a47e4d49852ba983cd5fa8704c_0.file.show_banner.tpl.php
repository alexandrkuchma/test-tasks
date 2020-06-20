<?php
/* Smarty version 3.1.36, created on 2020-06-03 21:24:01
  from '/home/anthony/Workspace/Work/Alona/Okay/Modules/OkayCMS/Banners/design/html/show_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed7eac1234c63_09935131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeb9551bf0ea09a47e4d49852ba983cd5fa8704c' => 
    array (
      0 => '/home/anthony/Workspace/Work/Alona/Okay/Modules/OkayCMS/Banners/design/html/show_banner.tpl',
      1 => 1591208404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed7eac1234c63_09935131 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="fn_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_data']->value->group_name, ENT_QUOTES, 'UTF-8', true);?>
 banner_group banner_group--<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
 owl-carousel <?php if (!$_smarty_tpl->tpl_vars['banner_data']->value->settings['as_slider']) {?>no_js<?php }?>">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner_data']->value->items, 'bi');
$_smarty_tpl->tpl_vars['bi']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bi']->value) {
$_smarty_tpl->tpl_vars['bi']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['bi']->value->settings['variant_show'] == Okay\Modules\OkayCMS\Banners\Entities\BannersImagesEntity::SHOW_DEFAULT) {?>
        <div class="banner_group__item block--border banner_group__variant1" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
        <?php } elseif ($_smarty_tpl->tpl_vars['bi']->value->settings['variant_show'] == Okay\Modules\OkayCMS\Banners\Entities\BannersImagesEntity::SHOW_DARK) {?>
        <div class="banner_group__item block--border banner_group__variant2" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
        <?php } elseif ($_smarty_tpl->tpl_vars['bi']->value->settings['variant_show'] == Okay\Modules\OkayCMS\Banners\Entities\BannersImagesEntity::SHOW_IMAGE_LEFT) {?>
        <div class="banner_group__item block--border banner_group__variant3" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
        <?php } elseif ($_smarty_tpl->tpl_vars['bi']->value->settings['variant_show'] == Okay\Modules\OkayCMS\Banners\Entities\BannersImagesEntity::SHOW_IMAGE_RIGHT) {?>
        <div class="banner_group__item block--border banner_group__variant4" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
        <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['bi']->value->url) {?>
            <a class="banner_group__link" aria-label="<?php echo $_smarty_tpl->tpl_vars['bi']->value->title;?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"></a>
            <?php }?>
            <div class="banner_group__image">
                <picture>
                    <source media="(min-width: 768px)" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
">
                    <source media="(max-width: 767px)" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['mobile']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['mobile']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir ));?>
" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['mobile']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['mobile']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir ));?>
">
                    <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings['as_slider']) {?>
                        <img class="owl-lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bi']->value->alt;?>
" title="<?php echo $_smarty_tpl->tpl_vars['bi']->value->title;?>
">
                    <?php } else { ?>
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bi']->value->alt;?>
" title="<?php echo $_smarty_tpl->tpl_vars['bi']->value->title;?>
">
                    <?php }?>
                </picture>
            </div>
            <div class="banner_group__content">
                <div class="banner_group__text">
                    <?php if ($_smarty_tpl->tpl_vars['bi']->value->title) {?>
                        <div class="banner_group__title"><?php echo $_smarty_tpl->tpl_vars['bi']->value->title;?>
</div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['bi']->value->description) {?>
                        <div class="banner_group__description"><?php echo $_smarty_tpl->tpl_vars['bi']->value->description;?>
</div>
                    <?php }?>
                </div>
            </div>
        </div>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings['as_slider']) {
echo '<script'; ?>
>
    document.addEventListener('DOMContentLoaded', function(){
        $('.fn_banner_<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->group_name;?>
').owlCarousel({
            animateOut: "fadeOut",
            loop: <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value->settings['loop'])) && !empty($_smarty_tpl->tpl_vars['banner_data']->value->settings['loop'])) {?>true<?php } else { ?>false<?php }?>,
            lazyLoad:true,
            autoplay: <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value->settings['autoplay'])) && !empty($_smarty_tpl->tpl_vars['banner_data']->value->settings['autoplay'])) {?>true<?php } else { ?>false<?php }?>,
            autoplayTimeout: <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value->settings['rotation_speed'])) && !empty($_smarty_tpl->tpl_vars['banner_data']->value->settings['rotation_speed'])) {
echo intval($_smarty_tpl->tpl_vars['banner_data']->value->settings['rotation_speed']);
} else { ?>2500<?php }?>,
            nav: <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value->settings['nav'])) && !empty($_smarty_tpl->tpl_vars['banner_data']->value->settings['nav'])) {?>true<?php } else { ?>false<?php }?>,
            dots: <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value->settings['dots'])) && !empty($_smarty_tpl->tpl_vars['banner_data']->value->settings['dots'])) {?>true<?php } else { ?>false<?php }?>,
            items:1,
            autoplayHoverPause: true,
            responsive: {
                320: {
                    autoHeight:true,
                    autoplay: false
                },
                991: {
                    autoHeight:false
                }
            }
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
}
