<?php /* Smarty version 2.6.33, created on 2024-09-09 21:34:31
         compiled from include/SugarFields/Fields/File/ListView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_fetch', 'include/SugarFields/Fields/File/ListView.tpl', 43, false),array('function', 'sugar_getimagepath', 'include/SugarFields/Fields/File/ListView.tpl', 49, false),array('function', 'sugar_getimage', 'include/SugarFields/Fields/File/ListView.tpl', 51, false),)), $this); ?>

<a href="index.php?entryPoint=download&id=<?php echo $this->_tpl_vars['parentFieldArray']['ID']; ?>
&type=<?php if (empty ( $this->_tpl_vars['vardef']['displayParams']['module'] )): ?><?php echo $this->_tpl_vars['displayParams']['module']; ?>
<?php else: ?><?php echo $this->_tpl_vars['vardef']['displayParams']['module']; ?>
<?php endif; ?>" class="tabDetailViewDFLink" target='_blank'><?php echo smarty_function_sugar_fetch(array('object' => $this->_tpl_vars['parentFieldArray'],'key' => $this->_tpl_vars['col']), $this);?>

<?php if (isset ( $this->_tpl_vars['vardef']['allowEapm'] ) && $this->_tpl_vars['vardef']['allowEapm'] && isset ( $this->_tpl_vars['parentFieldArray']['DOC_TYPE'] )): ?>
<?php ob_start(); ?>
	<?php echo smarty_function_sugar_fetch(array('object' => $this->_tpl_vars['parentFieldArray'],'key' => 'DOC_TYPE'), $this);?>
_image_inline.png
<?php $this->_smarty_vars['capture']['imageNameCapture'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>
	<?php echo smarty_function_sugar_getimagepath(array('file' => $this->_tpl_vars['imageName']), $this);?>

<?php $this->_smarty_vars['capture']['imageURLCapture'] = ob_get_contents();  $this->assign('imageURL', ob_get_contents());ob_end_clean(); ?>
<?php if (strlen ( $this->_tpl_vars['imageURL'] ) > 1): ?><?php echo smarty_function_sugar_getimage(array('name' => $this->_tpl_vars['imageName'],'alt' => $this->_tpl_vars['imageName'],'other_attributes' => 'border="0" '), $this);?>
<?php endif; ?>
<?php endif; ?>
</a>&nbsp;

<?php if (isset ( $this->_tpl_vars['parentFieldArray']['SHOW_PREVIEW'] ) && $this->_tpl_vars['parentFieldArray']['SHOW_PREVIEW'] !== false): ?>
	<a href="index.php?preview=yes&entryPoint=download&id=<?php echo $this->_tpl_vars['parentFieldArray']['ID']; ?>
&type=<?php if (empty ( $this->_tpl_vars['vardef']['displayParams']['module'] )): ?><?php echo $this->_tpl_vars['displayParams']['module']; ?>
<?php else: ?><?php echo $this->_tpl_vars['vardef']['displayParams']['module']; ?>
<?php endif; ?>" class="tabDetailViewDFLink" target='_blank' style="border-bottom: 0px;">
		<i class="glyphicon glyphicon-eye-open"></i>
	</a>
<?php endif; ?>