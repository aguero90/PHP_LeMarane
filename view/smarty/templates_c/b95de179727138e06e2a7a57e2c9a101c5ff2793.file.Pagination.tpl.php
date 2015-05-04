<?php /* Smarty version Smarty-3.1.17, created on 2015-05-04 15:58:09
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\back\Pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:724955477af1ebd909-38392605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b95de179727138e06e2a7a57e2c9a101c5ff2793' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\back\\Pagination.tpl',
      1 => 1430738905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '724955477af1ebd909-38392605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'numberOfPages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55477af21251e1_81792395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55477af21251e1_81792395')) {function content_55477af21251e1_81792395($_smarty_tpl) {?>

<!--

A DIFFERENZA DELLA PAGINAZIONE DEL FRONT, QUESTA DEVE ESSERE VISIBILE
ANCHE SU MOBILE

-->

<!-- PAGINAZIONE -->
<?php if ($_smarty_tpl->tpl_vars['numberOfPages']->value>1) {?>
    <div class="row">
        <nav id="paginationContainer">
            <ul class="pagination">
                <li id="goToPreviousPage">
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['numberOfPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['numberOfPages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>

                    <li class="paginationItem <?php if ($_smarty_tpl->tpl_vars['i']->value===1) {?>active<?php }?>" data-number="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                        <a href="#" ><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                    </li>

                <?php }} ?>

                <li id="goToNextPage">
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
<?php }?><?php }} ?>
