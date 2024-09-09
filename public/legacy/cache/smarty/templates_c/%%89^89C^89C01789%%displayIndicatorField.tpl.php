<?php /* Smarty version 2.6.33, created on 2024-09-09 17:54:40
         compiled from modules/Emails/templates/displayIndicatorField.tpl */ ?>

<div class="email-indicator">
    <?php if (! empty ( $this->_tpl_vars['bean'] )): ?>
        <?php if (! empty ( $this->_tpl_vars['bean']['status'] ) && $this->_tpl_vars['bean']['status'] == 'unread'): ?>
            <div class="email-new"></div>
        <?php endif; ?>
        <?php if (! empty ( $this->_tpl_vars['bean']['is_imported'] ) && ! empty ( $this->_tpl_vars['bean']['inbound_email_record'] ) && $this->_tpl_vars['bean']['is_imported'] == true && $this->_tpl_vars['bean']['inbound_email_record'] == $_REQUEST['inbound_email_record']): ?>
            <div class="email-imported"><span class="glyphicon glyphicon-ok"></span></div>
        <?php endif; ?>
        <?php if (! empty ( $this->_tpl_vars['bean']['flagged'] ) && $this->_tpl_vars['bean']['flagged'] == 1): ?>
            <span class="email-flagged">!</span>
        <?php endif; ?>
    <?php endif; ?>
</div>