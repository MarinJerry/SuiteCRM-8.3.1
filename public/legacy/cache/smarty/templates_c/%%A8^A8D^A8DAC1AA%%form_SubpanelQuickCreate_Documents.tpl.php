<?php /* Smarty version 2.6.33, created on 2024-09-09 21:28:18
         compiled from cache/themes/suite8/modules/Documents/form_SubpanelQuickCreate_Documents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/themes/suite8/modules/Documents/form_SubpanelQuickCreate_Documents.tpl', 64, false),array('function', 'sugar_translate', 'cache/themes/suite8/modules/Documents/form_SubpanelQuickCreate_Documents.tpl', 84, false),array('function', 'counter', 'cache/themes/suite8/modules/Documents/form_SubpanelQuickCreate_Documents.tpl', 108, false),array('function', 'html_options', 'cache/themes/suite8/modules/Documents/form_SubpanelQuickCreate_Documents.tpl', 115, false),array('function', 'sugar_getimage', 'cache/themes/suite8/modules/Documents/form_SubpanelQuickCreate_Documents.tpl', 171, false),array('function', 'sugar_image', 'cache/themes/suite8/modules/Documents/form_SubpanelQuickCreate_Documents.tpl', 186, false),array('block', 'minify', 'cache/themes/suite8/modules/Documents/form_SubpanelQuickCreate_Documents.tpl', 100, false),array('modifier', 'strip_semicolon', 'cache/themes/suite8/modules/Documents/form_SubpanelQuickCreate_Documents.tpl', 102, false),array('modifier', 'default', 'cache/themes/suite8/modules/Documents/form_SubpanelQuickCreate_Documents.tpl', 384, false),)), $this); ?>

<div class="edit-border-bottom"></div>

<script>
    <?php echo '
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($(\'.edit-view-pagination\').children().length == 0) $(\'.saveAndContinue\').remove();
    });
    '; ?>

</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons action-buttons">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php else: ?>
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php endif; ?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if (( ! empty ( $_REQUEST['return_module'] ) || ! empty ( $_REQUEST['relate_to'] ) ) && ! ( isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true' )): ?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']): ?><?php echo $_REQUEST['return_relationship']; ?>
<?php elseif ($_REQUEST['relate_to'] && empty ( $_REQUEST['from_dcmenu'] )): ?><?php echo $_REQUEST['relate_to']; ?>
<?php elseif (empty ( $this->_tpl_vars['isDCForm'] ) && empty ( $_REQUEST['from_dcmenu'] )): ?><?php echo $_REQUEST['return_module']; ?>
<?php endif; ?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<?php $this->assign('place', '_HEADER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<input type="hidden" name="old_id" value="<?php echo $this->_tpl_vars['fields']['document_revision_id']['value']; ?>
">   
<input type="hidden" name="parent_id" value="<?php echo $_REQUEST['parent_id']; ?>
">   
<input type="hidden" name="parent_type" value="<?php echo $_REQUEST['parent_type']; ?>
">   
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Documents'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Documents'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Documents_subpanel_save_button');return false;" type="submit" name="Documents_subpanel_save_button" id="Documents_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Documents_subpanel_cancel_button" id="Documents_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Documents'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Documents_subpanel_full_form_button" id="Documents_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Documents", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
</div>
</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'DEFAULT','module' => 'Documents'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="status_id">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DOC_STATUS">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_STATUS','module' => 'Documents'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="status_id" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['status_id']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['status_id']['name']; ?>
"
title=''              
>
<?php if (isset ( $this->_tpl_vars['fields']['status_id']['value'] ) && $this->_tpl_vars['fields']['status_id']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status_id']['options'],'selected' => $this->_tpl_vars['fields']['status_id']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status_id']['options'],'selected' => $this->_tpl_vars['fields']['status_id']['default']), $this);?>

<?php endif; ?>
</select>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="filename">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_FILENAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FILENAME','module' => 'Documents'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="file" field="filename" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<script type="text/javascript" src='cache/include/externalAPI.cache.js?v=tTJJSMpksQF2-QyqVf4b2Q'></script>
<script type="text/javascript" src='include/SugarFields/Fields/File/SugarFieldFile.js?v=tTJJSMpksQF2-QyqVf4b2Q'></script>
<?php if (! empty ( $this->_tpl_vars['fields']['filename']['value'] )): ?>
<?php $this->assign('showRemove', true); ?>
<?php else: ?>
<?php $this->assign('showRemove', false); ?>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['fields']['filename']['value'] )): ?>
<?php $this->assign('showRemove', true); ?>
<?php $this->assign('noChange', true); ?>
<?php else: ?>
<?php $this->assign('noChange', false); ?>
<?php endif; ?>
<input type="hidden" name="deleteAttachment" value="0">
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['filename']['value']; ?>
">
<input type="hidden" name="doc_id" id="doc_id" value="<?php echo $this->_tpl_vars['fields']['doc_id']['value']; ?>
">
<input type="hidden" name="doc_url" id="doc_url" value="<?php echo $this->_tpl_vars['fields']['doc_url']['value']; ?>
">
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_old_doctype" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_old_doctype" value="<?php echo $this->_tpl_vars['fields']['doc_type']['value']; ?>
">
<span id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_old" style="display:<?php if (! $this->_tpl_vars['showRemove']): ?>none;<?php endif; ?>">
<a href="index.php?entryPoint=download&id=<?php echo $this->_tpl_vars['fields']['document_revision_id']['value']; ?>
&type=<?php echo $this->_tpl_vars['module']; ?>
" class="tabDetailViewDFLink"><?php echo $this->_tpl_vars['fields']['filename']['value']; ?>
</a>
<?php if (isset ( $this->_tpl_vars['fields']['doc_type'] ) && ! empty ( $this->_tpl_vars['fields']['doc_type']['value'] ) && $this->_tpl_vars['fields']['doc_type']['value'] != 'Sugar' && ! empty ( $this->_tpl_vars['fields']['doc_url']['value'] )): ?>
<?php ob_start(); ?>
<?php echo $this->_tpl_vars['fields']['doc_type']['value']; ?>
_image_inline.png
<?php $this->_smarty_vars['capture']['imageNameCapture'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
<a href="<?php echo $this->_tpl_vars['fields']['doc_url']['value']; ?>
" class="tabDetailViewDFLink" target="_blank"><?php echo smarty_function_sugar_getimage(array('name' => $this->_tpl_vars['imageName'],'alt' => $this->_tpl_vars['imageName'],'other_attributes' => 'border="0" '), $this);?>
</a>
<?php endif; ?>
<?php if (! $this->_tpl_vars['noChange']): ?>
<input type='button' class='button' id='remove_button' value='<?php echo $this->_tpl_vars['APP']['LBL_REMOVE']; ?>
' onclick='SUGAR.field.file.deleteAttachment("<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
","doc_type",this);'>
<?php endif; ?>
</span>
<?php if (! $this->_tpl_vars['noChange']): ?>
<span id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_new" style="display:<?php if ($this->_tpl_vars['showRemove']): ?>none;<?php endif; ?>">
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_escaped">
<input id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_file" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_file" 
type="file" title='' size="30"
maxlength="255"
>
<span id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_externalApiSelector" style="display:none;">
<br><h4 id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_externalApiLabel">
<span id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_more"><?php echo smarty_function_sugar_image(array('name' => 'advanced_search','width' => '8px','height' => '8px'), $this);?>
</span>
<span id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_less" style="display: none;"><?php echo smarty_function_sugar_image(array('name' => 'basic_search','width' => '8px','height' => '8px'), $this);?>
</span>
<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_EXTERNAL_API']; ?>
</h4>
<span id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteNameSpan" style="display: none;">
<input type="text" class="sqsEnabled" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteName" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteName" size="30" 
maxlength="255"
autocomplete="off" value="<?php if (! empty ( $this->_tpl_vars['fields'][$this->_sections['doc_id']['index']]['value'] )): ?><?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
<?php endif; ?>">
<span class="id-ff multiple">
<button type="button" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteSelectBtn" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteSelectBtn" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_FILE_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_FILE_LABEL'), $this);?>
"
onclick="SUGAR.field.file.openPopup('<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
'); return false;">
<span class="suitepicon suitepicon-action-select"></span></button>
<button type="button" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteClearBtn" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteClearBtn" tabindex="0" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" class="button lastChild" value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" onclick="SUGAR.field.file.clearRemote('<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
'); return false;">
<span class="suitepicon suitepicon-action-clear"></span>
</button>
</span>
</span>
<div style="display: none;" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_securityLevelBox">
<b><?php echo $this->_tpl_vars['APP']['LBL_EXTERNAL_SECURITY_LEVEL']; ?>
: </b>
<select name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_securityLevel" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_securityLevel">
</select>
</div>
<script type="text/javascript">
YAHOO.util.Event.onDOMReady(function() {
SUGAR.field.file.setupEapiShowHide("<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
","doc_type","<?php echo $this->_tpl_vars['form_name']; ?>
");
});

if ( typeof(sqs_objects) == 'undefined' ) {
    sqs_objects = new Array;
}

sqs_objects["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteName"] = {
"form":"<?php echo $this->_tpl_vars['form_name']; ?>
",
"method":"externalApi",
"api":"",
"modules":["EAPM"],
"field_list":["name", "id", "url", "id"],
"populate_list":["<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteName", "doc_id", "doc_url", "<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
"],
"required_list":["name"],
"conditions":[],
"no_match_text":"No Match"
};

if(typeof QSProcessedFieldsArray != 'undefined') {
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteName"] = false;
}
<?php if ($this->_tpl_vars['showRemove'] && strlen ( 'doc_type' ) > 0): ?>
document.getElementById("doc_type").disabled = true;
<?php endif; ?>
enableQS(false);
</script>
<?php else: ?>

<script type="text/javascript">
YAHOO.util.Event.onDOMReady(function() 
{
document.getElementById("doc_type").disabled = true;
});
</script>
<?php endif; ?>
<script type="text/javascript">

var <?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_setFileName = function()
<?php echo '
{
    var dom = YAHOO.util.Dom;
'; ?>
    
    sourceElement = "<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_file";
    targetElement = "document_name";
	src = new String(dom.get(sourceElement).value);
	target = new String(dom.get(targetElement).value);
<?php echo '
	if (target.length == 0) 
	{
		lastindex=src.lastIndexOf("/");
		if (lastindex == -1) {
			lastindex=src.lastIndexOf("\\\\");
		} 
		if (lastindex == -1) {
			dom.get(targetElement).value=src;
		} else {
			dom.get(targetElement).value=src.substr(++lastindex, src.length);
		}	
	}	
}
'; ?>


YAHOO.util.Event.onDOMReady(function() 
{
if(document.getElementById("document_name"))
{
YAHOO.util.Event.addListener('<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_file', 'change', <?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_setFileName);
YAHOO.util.Event.addListener(['<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_file', 'doc_type'], 'change', SUGAR.field.file.checkFileExtension,{ fileEl: '<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_file', targEl: 'document_name'});
}
});
</script>
</span>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="document_name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Documents'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="document_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['document_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['document_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['document_name']['value']); ?>
<?php endif; ?>
<input type='text' name='<?php echo $this->_tpl_vars['fields']['document_name']['name']; ?>
'
id='<?php echo $this->_tpl_vars['fields']['document_name']['name']; ?>
' size='30'
maxlength='255'        value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="revision">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DOC_VERSION">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_VERSION','module' => 'Documents'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="revision"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<input tabindex="0"  name="revision" type="text" value="<?php echo $this->_tpl_vars['fields']['revision']['value']; ?>
" <?php echo $this->_tpl_vars['DISABLED']; ?>
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="active_date">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DOC_ACTIVE_DATE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_ACTIVE_DATE','module' => 'Documents'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="active_date"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['active_date']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['active_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['active_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<span class="datetimeicon" id="<?php echo $this->_tpl_vars['fields']['active_date']['name']; ?>
_trigger" onclick="return false;">        
<?php echo smarty_function_sugar_getimage(array('name' => 'calendar','attr' => 'border="0" ','alt' => ($this->_tpl_vars['APP']).".LBL_ENTER_DATE"), $this);?>
        
</span>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['active_date']['name']; ?>
",
form : "form_SubpanelQuickCreate_Documents",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['active_date']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="category_id">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SF_CATEGORY">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SF_CATEGORY','module' => 'Documents'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="category_id"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['category_id']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['category_id']['name']; ?>
"
title=''              
>
<?php if (isset ( $this->_tpl_vars['fields']['category_id']['value'] ) && $this->_tpl_vars['fields']['category_id']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['category_id']['options'],'selected' => $this->_tpl_vars['fields']['category_id']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['category_id']['options'],'selected' => $this->_tpl_vars['fields']['category_id']['default']), $this);?>

<?php endif; ?>
</select>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Documents'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
'
    rows="10"
    cols="120"
    title='' tabindex="0" 
     ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<script language="javascript">
    var _form_id = '<?php echo $this->_tpl_vars['form_id']; ?>
';
    <?php echo '
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == \'\') ? \'EditView\' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    '; ?>

</script>
<?php $this->assign('place', '_FOOTER'); ?> <!-- to be used for id for buttons with custom code in def files-->
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_Documents",
    function () { initEditView(document.forms.form_SubpanelQuickCreate_Documents) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
</script>
<?php echo '
<script type="text/javascript">

    var selectTab = function(tab) {
        $(\'#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').hide();
        $(\'#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').eq(tab).show().addClass(\'active\').addClass(\'in\');
        $(\'#EditView_tabs div.panel-content div.panel\').hide();
        $(\'#EditView_tabs div.panel-content div.panel.tab-panel-\' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $(\'#EditView_tabs ul.nav.nav-tabs li\').removeClass(\'active\');
        $(\'#EditView_tabs ul.nav.nav-tabs li a\').css(\'color\', \'\');

        $(\'#EditView_tabs ul.nav.nav-tabs li\').eq(tab).find(\'a\').first().css(\'color\', \'red\');
        $(\'#EditView_tabs ul.nav.nav-tabs li\').eq(tab).addClass(\'active\');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest(\'.tab-pane-NOBOOTSTRAPTOGGLER\').attr(\'id\').match(/^tab-content-(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $(\'#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]\').click(function(e){
            if(typeof $(this).parent().find(\'a\').first().attr(\'id\') != \'undefined\') {
                var tab = parseInt($(this).parent().find(\'a\').first().attr(\'id\').match(/^tab(?<number>(.)*)$/)[1]);
                selectTab(tab);
            }
        });

        $(\'a[data-toggle="collapse-edit"]\').click(function(e){
            if($(this).hasClass(\'collapsed\')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass(\'collapsed\');
                // Expand .panel-body
                $(this).parents(\'.panel\').find(\'.panel-body\').removeClass(\'in\').addClass(\'in\');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass(\'collapsed\');
                // Collapse .panel-body
                $(this).parents(\'.panel\').find(\'.panel-body\').removeClass(\'in\').removeClass(\'in\');
            }
        });
    });

    </script>
'; ?>
<?php echo '
<script type="text/javascript">
addForm(\'form_SubpanelQuickCreate_Documents\');addToValidate(\'form_SubpanelQuickCreate_Documents\', \'name\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'modified_user_id\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'modified_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'created_by\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'created_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'description\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'deleted\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'assigned_user_id\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'assigned_user_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'document_name\', \'varchar\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'doc_id\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_ID','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'doc_type\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_TYPE','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'doc_url\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_URL','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'filename\', \'file\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FILENAME','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'active_date\', \'date\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_ACTIVE_DATE','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'exp_date\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_EXP_DATE','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'category_id\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SF_CATEGORY','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'subcategory_id\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SF_SUBCATEGORY','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'status_id\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_STATUS','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'status\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_STATUS','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'document_revision_id\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LATEST_REVISION','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'revision\', \'varchar\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_VERSION','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'last_rev_created_name\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_REV_CREATOR','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'last_rev_mime_type\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_REV_MIME_TYPE','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'latest_revision\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LATEST_REVISION','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'last_rev_create_date\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_REV_CREATE_DATE','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'related_doc_id\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RELATED_DOCUMENT_ID','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'related_doc_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DET_RELATED_DOCUMENT','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'related_doc_rev_id\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RELATED_DOCUMENT_REVISION_ID','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'related_doc_rev_number\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DET_RELATED_DOCUMENT_VERSION','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'is_template\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_IS_TEMPLATE','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'template_type\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TEMPLATE_TYPE','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'latest_revision_name\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LASTEST_REVISION_NAME','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'selected_revision_name\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECTED_REVISION_NAME','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'contract_status\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONTRACT_STATUS','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'contract_name\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONTRACT_NAME','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'linked_id\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LINKED_ID','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'selected_revision_id\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECTED_REVISION_ID','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'latest_revision_id\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LATEST_REVISION_ID','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'selected_revision_filename\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECTED_REVISION_FILENAME','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_Documents\', \'filecontents\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FILE_CONTENTS','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_Documents\', \'assigned_user_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Documents','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Documents','for_js' => true), $this);?>
<?php echo '\', \'assigned_user_id\' );
</script>'; ?>
