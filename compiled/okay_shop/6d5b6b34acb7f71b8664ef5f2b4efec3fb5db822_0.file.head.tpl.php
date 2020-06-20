<?php
/* Smarty version 3.1.36, created on 2020-06-03 21:24:02
  from '/home/anthony/Workspace/Work/Alona/design/okay_shop/html/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed7eac22256b8_88473140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d5b6b34acb7f71b8664ef5f2b4efec3fb5db822' => 
    array (
      0 => '/home/anthony/Workspace/Work/Alona/design/okay_shop/html/head.tpl',
      1 => 1591208405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed7eac22256b8_88473140 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/">

    <?php echo $_smarty_tpl->tpl_vars['ok_head']->value;?>

    
    <?php echo '<script'; ?>
>
        const ut_tracker = {
            start: function(name) {
                performance.mark(name + ':start');
            },
            end: function(name) {
                performance.mark(name + ':end');
                performance.measure(name, name + ':start', name + ':end');
                console.log(name + ' duration: ' + performance.getEntriesByName(name)[0].duration);
            }
        }
    <?php echo '</script'; ?>
>
    
        <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>

        <?php if (!empty($_smarty_tpl->tpl_vars['meta_keywords']->value)) {?>
        <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
    <?php }?>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['meta_description']->value)) {?>
        <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
    <?php }?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'CategoryController' || $_smarty_tpl->tpl_vars['controller']->value == 'BrandController' || $_smarty_tpl->tpl_vars['controller']->value == 'ProductsController') {?>
        <?php if ($_smarty_tpl->tpl_vars['set_canonical']->value && !$_smarty_tpl->tpl_vars['need_indexing']->value) {?>
            <meta name="robots" content="noindex,nofollow">
        <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value) {?>
            <meta name="robots" content="noindex,follow">
        <?php } elseif ((isset($_GET['keyword']))) {?>
            <meta name="robots" content="noindex,follow">
        <?php } else { ?>
            <meta name="robots" content="index,follow">
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "RegisterController" || $_smarty_tpl->tpl_vars['controller']->value == "LoginController" || $_smarty_tpl->tpl_vars['controller']->value == "UserController" || $_smarty_tpl->tpl_vars['controller']->value == "CartController") {?>
        <meta name="robots" content="noindex,follow">
    <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "OrderController") {?>
        <meta name="robots" content="noindex,nofollow">
    <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "CartController") {?>
        <meta name="robots" content="noindex,follow">
    <?php } else { ?>
        <meta name="robots" content="index,follow">
    <?php }?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="OkayCMS <?php echo $_smarty_tpl->tpl_vars['config']->value->version;?>
">

        <?php if ($_smarty_tpl->tpl_vars['controller']->value == "BlogController" && $_smarty_tpl->tpl_vars['total_pages_num']->value > 1) {?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == $_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == 2) {?>
                <link rel="prev" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>null),$_smarty_tpl ) );?>
"/>
            <?php } else { ?>
                <link rel="prev" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl ) );?>
"/>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['current_page_num']->value == 1) {?>
            <link rel="next" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>2),$_smarty_tpl ) );?>
"/>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == 2) {?>
                <link rel="prev" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>null),$_smarty_tpl ) );?>
"/>
            <?php } else { ?>
                <link rel="prev" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl ) );?>
"/>
            <?php }?>
            <link rel="next" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl ) );?>
"/>
        <?php }?>
    <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['rel_prev_next']->value;?>


        <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'ProductController') {?>
        <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta property="og:description" content='<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->annotation), ENT_QUOTES, 'UTF-8', true);?>
'>
        <meta property="og:image" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,330,300 ));?>
">
        <link rel="image_src" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,330,300 ));?>
">
                <meta name="twitter:card" content="product"/>
        <meta name="twitter:url" content="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
        <meta name="twitter:site" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta name="twitter:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta name="twitter:description" content="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->annotation), ENT_QUOTES, 'UTF-8', true);?>
">
        <meta name="twitter:image" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,330,300 ));?>
">
        <meta name="twitter:data1" content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_price;?>
">
        <meta name="twitter:label1" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->variant->price,null,false ));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta name="twitter:data2" content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->meta_organization;?>
">
        <meta name="twitter:label2" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == 'BlogController' && $_smarty_tpl->tpl_vars['post']->value) {?>
        <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
        <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
            <meta property="og:image" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir ));?>
">
            <link rel="image_src" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir ));?>
">
        <?php } else { ?>
            <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value->design_images;
echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
            <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value->design_images;
echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
        <?php }?>
        <meta property="og:description" content='<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value->annotation), ENT_QUOTES, 'UTF-8', true);?>
'>
                <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta name="twitter:description" content="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value->annotation), ENT_QUOTES, 'UTF-8', true);?>
">
        <meta name="twitter:image" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir ));?>
">
    <?php } else { ?>
        <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
">
        <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value->design_images;
echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
        <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <link rel="image_src" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value->design_images;
echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
                <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta name="twitter:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value->design_images;
echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
    <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['canonical']->value))) {?>
        <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['canonical']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value) {?>
        <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_canonical']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
            <link rel="alternate" hreflang="<?php echo $_smarty_tpl->tpl_vars['l']->value->href_lang;?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->url, ENT_QUOTES, 'UTF-8', true);?>
">
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v3") {?>
        <?php echo '<script'; ?>
>ut_tracker.start('render:recaptcha');<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?render=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_v3, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            grecaptcha.ready(function () {
                <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'ProductController' || $_smarty_tpl->tpl_vars['controller']->value == 'BlogController') {?>
                    var recaptcha_action = 'product';
                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == 'CartController') {?>
                    var recaptcha_action = 'cart';
                <?php } else { ?>
                    var recaptcha_action = 'other';
                <?php }?>

                var all_captchеs = document.getElementsByClassName('fn_recaptchav3');
                grecaptcha.execute('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_v3, ENT_QUOTES, 'UTF-8', true);?>
', { action: recaptcha_action })
                    .then(function (token) {
                        for (capture of all_captchеs) {
                            capture.value = token;
                        }
                    });
            });
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>ut_tracker.end('render:recaptcha');<?php echo '</script'; ?>
>
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v2") {?>
        <?php echo '<script'; ?>
>ut_tracker.start('render:recaptcha');<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            var onloadCallback = function() {
                mysitekey = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->public_recaptcha, ENT_QUOTES, 'UTF-8', true);?>
";
                if($('#recaptcha1').length>0){
                    grecaptcha.render('recaptcha1', {
                        'sitekey' : mysitekey
                    });
                }
                if($('#recaptcha2').length>0){
                    grecaptcha.render('recaptcha2', {
                        'sitekey' : mysitekey
                    });
                }
            };
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>ut_tracker.end('render:recaptcha');<?php echo '</script'; ?>
>
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "invisible") {?>
        <?php echo '<script'; ?>
>ut_tracker.start('render:recaptcha');<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function onSubmit(token) {
                document.getElementById("captcha_id").submit();
            }
            function onSubmitCallback(token) {
                document.getElementById("fn_callback").submit();
            }
            function onSubmitBlog(token) {
                document.getElementById("fn_blog_comment").submit();
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>ut_tracker.end('render:recaptcha');<?php echo '</script'; ?>
>
    <?php }?>

    <link rel="search" type="application/opensearchdescription+xml" title="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
 Search" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"opensearch",'absolute'=>1),$_smarty_tpl ) );?>
" />

        <link href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value->design_images, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_favicon, ENT_QUOTES, 'UTF-8', true);?>
?v=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_favicon_version, ENT_QUOTES, 'UTF-8', true);?>
" type="image/x-icon" rel="icon">
    <link href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value->design_images, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_favicon, ENT_QUOTES, 'UTF-8', true);?>
?v=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_favicon_version, ENT_QUOTES, 'UTF-8', true);?>
" type="image/x-icon" rel="shortcut icon">

    
        <?php echo '<script'; ?>
>ut_tracker.start('parsing:page');<?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>ut_tracker.start('parsing:head:scripts');<?php echo '</script'; ?>
>
    <?php if (($_smarty_tpl->tpl_vars['is_mobile']->value === true || $_smarty_tpl->tpl_vars['is_tablet']->value === true) && ($_smarty_tpl->tpl_vars['controller']->value == "CategoryController" || $_smarty_tpl->tpl_vars['controller']->value == "BrandController" || $_smarty_tpl->tpl_vars['controller']->value == "ProductsController")) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js'][0], array( array('file'=>'jquery.ui.touch-punch.js','defer'=>true),$_smarty_tpl ) );?>

    <?php }?>
    <?php echo '<script'; ?>
>ut_tracker.end('parsing:head:scripts');<?php echo '</script'; ?>
>

    <?php if (!empty($_smarty_tpl->tpl_vars['counters']->value['head'])) {?>
    <?php echo '<script'; ?>
>ut_tracker.start('parsing:head:counters');<?php echo '</script'; ?>
>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['counters']->value['head'], 'counter');
$_smarty_tpl->tpl_vars['counter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['counter']->value) {
$_smarty_tpl->tpl_vars['counter']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['counter']->value->code;?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php echo '<script'; ?>
>ut_tracker.end('parsing:head:counters');<?php echo '</script'; ?>
>
    <?php }
}
}
