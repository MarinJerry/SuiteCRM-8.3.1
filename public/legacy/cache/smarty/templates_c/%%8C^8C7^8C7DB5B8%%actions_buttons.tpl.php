<?php /* Smarty version 2.6.33, created on 2024-09-13 19:49:46
         compiled from themes/suite8/include/EditView/actions_buttons.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_button', 'themes/suite8/include/EditView/actions_buttons.tpl', 4, false),array('function', 'sugar_action_menu', 'themes/suite8/include/EditView/actions_buttons.tpl', 18, false),)), $this); ?>

    <?php if (! empty ( $this->_tpl_vars['form'] ) && ! empty ( $this->_tpl_vars['form']['buttons'] )): ?>
        <?php $_from = $this->_tpl_vars['form']['buttons']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val'] => $this->_tpl_vars['button']):
?>
        <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => ($this->_tpl_vars['button']),'form_id' => ($this->_tpl_vars['form_id']),'view' => ($this->_tpl_vars['view'])), $this);?>

        <?php endforeach; endif; unset($_from); ?>
    <?php else: ?>
        <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'SAVE','view' => ($this->_tpl_vars['view']),'form_id' => ($this->_tpl_vars['form_id'])), $this);?>

        <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'CANCEL','view' => ($this->_tpl_vars['view']),'form_id' => ($this->_tpl_vars['form_id'])), $this);?>

    <?php endif; ?>
    {if $showVCRControl}
            <button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
                {$APP.LBL_SAVE_AND_CONTINUE}
            </button>
    {/if}
    <?php if (empty ( $this->_tpl_vars['form']['hideAudit'] ) || ! $this->_tpl_vars['form']['hideAudit']): ?>
        <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'Audit','view' => ($this->_tpl_vars['view']),'form_id' => ($this->_tpl_vars['form_id'])), $this);?>

    <?php endif; ?>
    <?php echo smarty_function_sugar_action_menu(array('buttons' => $this->_tpl_vars['footer_buttons'],'class' => 'fancymenu','flat' => true), $this);?>
