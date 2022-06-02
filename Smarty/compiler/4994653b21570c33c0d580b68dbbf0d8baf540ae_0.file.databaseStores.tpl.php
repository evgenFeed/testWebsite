<?php
/* Smarty version 4.1.1, created on 2022-06-02 17:23:39
  from '/var/www/html/Smarty/templates/databaseStores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6298f21b294160_78202777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4994653b21570c33c0d580b68dbbf0d8baf540ae' => 
    array (
      0 => '/var/www/html/Smarty/templates/databaseStores.tpl',
      1 => 1654190610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6298f21b294160_78202777 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<header>
        <div class="navbar">
            <a href="index.php">Main Page</a>
            <a href="databaseStores.php">Database stores</a>
        </div>
    </header>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <p>Id</p>
        </div>
        <div class="col-sm">
            <p>Name</p>
        </div>
        <div class="col-sm">
            <p>EMail</p>
        </div>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
$_smarty_tpl->tpl_vars['client']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->do_else = false;
?>
    <div class="row">
        <div class="col-sm">
            <?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>

        </div>
        <div class="col-sm">
            <?php echo $_smarty_tpl->tpl_vars['client']->value->getName();?>

        </div>
        <div class="col-sm">
            <?php echo $_smarty_tpl->tpl_vars['client']->value->getEmail();?>

        </div>
    </div>
    <?php
}
if ($_smarty_tpl->tpl_vars['client']->do_else) {
?>
        No clients in database
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</body>
</html><?php }
}
