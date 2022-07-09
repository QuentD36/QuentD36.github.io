<?php
/* Smarty version 4.1.0, created on 2022-07-09 14:40:31
  from 'C:\wamp64\www\wild_code_challenge\v2\mod_member\view\memberView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62c9935f77f371_82260758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76be79a2e86e6b0e0904710014dd9496018ffb48' => 
    array (
      0 => 'C:\\wamp64\\www\\wild_code_challenge\\v2\\mod_member\\view\\memberView.tpl',
      1 => 1657377630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c9935f77f371_82260758 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Wild Code School Challenge</title>
    <meta name="description" content="Challenge de la Wild Code School - Les Argonautes">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="icon" href="public/img/logo.ico" />

</head>
<body>
<header>
    <a class="header-logo" href="#"><img src="public/img/logo.png" alt="Logo de la Wild Code School"></a>

    <h2>Les Argonautes</h2>

    <nav>
        <ul>
            <li><a href="#">
                    <svg width="30" height="30" viewBox="0 0 1024 1024" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z" transform="scale(64)" fill="#1B1F23"/>
                    </svg>
                </a>
            </li>
        </ul>
    </nav>
</header>

<main>
    <div class="input-container">
        <form method="POST" action="index.php">
            <input type="hidden" name="gestion" value="member">
            <input type="hidden" name="action" value="addMember">
            <input type="text" id="name" name="name">
            <button type="submit" id="btn">Ajouter
                <svg enable-background="new 0 0 512 512" height="25px" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,512C114.625,512,0,397.391,0,256C0,114.609,114.625,0,256,0c141.391,0,256,114.609,256,256  C512,397.391,397.391,512,256,512z M256,64C149.969,64,64,149.969,64,256s85.969,192,192,192c106.047,0,192-85.969,192-192  S362.047,64,256,64z M288,384h-64v-96h-96v-64h96v-96h64v96h96v64h-96V384z"/></svg>
            </button>
        </form>
    </div>

    <div class="msg-container">
        <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
            <span class="is-invalid"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?>
            <span class="is-valid"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</span>
        <?php }?>
    </div>

    <div class="table-container">
        <?php if ($_smarty_tpl->tpl_vars['firstCrew']->value) {?>
            <table id="table_id">
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['firstCrew']->value, 'firstMember');
$_smarty_tpl->tpl_vars['firstMember']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['firstMember']->value) {
$_smarty_tpl->tpl_vars['firstMember']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['firstMember']->value->getName();?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>

            <table id="table_id">
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondCrew']->value, 'secondMember');
$_smarty_tpl->tpl_vars['secondMember']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['secondMember']->value) {
$_smarty_tpl->tpl_vars['secondMember']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['secondMember']->value->getName();?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>

            <table id="table_id">
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastCrew']->value, 'lastMember');
$_smarty_tpl->tpl_vars['lastMember']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lastMember']->value) {
$_smarty_tpl->tpl_vars['lastMember']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['lastMember']->value->getName();?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <?php } else { ?>
            <table id="table_id">
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['crew']->value, 'member');
$_smarty_tpl->tpl_vars['member']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['member']->value->getName();?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        <?php }?>

    </div>
</main>

<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/script.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
