
<div class="detail-border-bottom"></div>

<script language="javascript">
    {literal}
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
{if !$config.enable_action_menu}
<div class="buttons">
{if $bean->aclAccess("edit")}
<input title="{$APP.LBL_EDIT_BUTTON_TITLE}"
accessKey="{$APP.LBL_EDIT_BUTTON_KEY}"
name="Edit"
id="edit_button"
class="button primary"
type="button"
value="{$APP.LBL_EDIT_BUTTON_LABEL}"
onclick="window.location.href='index.php?module=Cases&action=EditView&record={$id}&return_module=Cases&return_action=DetailView&return_id={$id}'"/>
{/if}
{if $bean->aclAccess("edit")}
<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}"
accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}"
name="Duplicate"
id="duplicate_button"
class="button"
type="button"
value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}"
onclick="window.location.href='index.php?module=Cases&action=EditView&record={$id}&return_module=Cases&return_action=DetailView&return_id={$id}&isDuplicate=true'"/>
{/if}
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Cases'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} 
{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}
<input title="{$APP.LBL_DUP_MERGE}"
name="Merge"
id="merge_duplicate_button"
class="button primary"
type="button"
value="{$APP.LBL_DUP_MERGE}"
onclick="window.location.href='index.php?module=MergeRecords&action=Step1&record={$id}&return_module=Cases&return_action=DetailView&return_id={$id}'"/>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Cases", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>                    {/if}
</form>
</div>
</td>
<td align="right" width="20%" class="buttons">{$ADMIN_EDIT}
</td>
</tr>
</table>
{sugar_include include=$includes}
<div class="detail-view">
<div class="mobile-pagination">{$PAGINATION}</div>

<ul class="nav nav-tabs">

{if $config.enable_action_menu and $config.enable_action_menu != false}
<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
{sugar_translate label='LBL_CASE_INFORMATION' module='Cases'}
</a>
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
{sugar_translate label='LBL_CASE_INFORMATION' module='Cases'}
</a>
</li>
{/if}
{if $config.enable_action_menu and $config.enable_action_menu != false}
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">ACTIONS<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li>{if $bean->aclAccess("edit")}
<input title="{$APP.LBL_EDIT_BUTTON_TITLE}"
accessKey="{$APP.LBL_EDIT_BUTTON_KEY}"
name="Edit"
id="edit_button"
class="button primary"
type="button"
value="{$APP.LBL_EDIT_BUTTON_LABEL}"
onclick="window.location.href='index.php?module=Cases&action=EditView&record={$id}&return_module=Cases&return_action=DetailView&return_id={$id}'"/>
{/if}</li>
<li>{if $bean->aclAccess("edit")}
<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}"
accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}"
name="Duplicate"
id="duplicate_button"
class="button"
type="button"
value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}"
onclick="window.location.href='index.php?module=Cases&action=EditView&record={$id}&return_module=Cases&return_action=DetailView&return_id={$id}&isDuplicate=true'"/>
{/if}</li>
<li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Cases'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li>
<li>{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}
<input title="{$APP.LBL_DUP_MERGE}"
name="Merge"
id="merge_duplicate_button"
class="button primary"
type="button"
value="{$APP.LBL_DUP_MERGE}"
onclick="window.location.href='index.php?module=MergeRecords&action=Step1&record={$id}&return_module=Cases&return_action=DetailView&return_id={$id}'"/>
{/if}</li>
<li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Cases", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li>
</ul>        </li>
<li class="tab-inline-pagination">
{$PAGINATION}
</li>
{/if}
</ul>
<div class="clearfix"></div>

{if $config.enable_action_menu and $config.enable_action_menu != false}

<div class="tab-content">
{else}

<div class="tab-content" style="padding: 0; border: 0;">
{/if}


{if $config.enable_action_menu and $config.enable_action_menu != false}
<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="numero_identidad_c">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NUMERO_IDENTIDAD_C' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="varchar" field="numero_identidad_c" colspan='3'>

{if !$fields.numero_identidad_c.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.numero_identidad_c.value) <= 0}
{assign var="value" value=$fields.numero_identidad_c.default_value }
{else}
{assign var="value" value=$fields.numero_identidad_c.value }
{/if} 
<span class="sugar_field" id="{$fields.numero_identidad_c.name}">{$fields.numero_identidad_c.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="case_number">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CASE_NUMBER' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex" type="int" field="case_number" >

{if !$fields.case_number.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.case_number.name}">
{assign var="value" value=$fields.case_number.value }
{$value}
</span>
{/if}

</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="priority">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PRIORITY' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="enum" field="priority" >

{if !$fields.priority.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.priority.options)}
<input type="hidden" class="sugar_field" id="{$fields.priority.name}" value="{ $fields.priority.options }">
{ $fields.priority.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.priority.name}" value="{ $fields.priority.value }">
{ $fields.priority.options[$fields.priority.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="state">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_STATE' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="enum" field="state" >

{if !$fields.state.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.state.options)}
<input type="hidden" class="sugar_field" id="{$fields.state.name}" value="{ $fields.state.options }">
{ $fields.state.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.state.name}" value="{ $fields.state.value }">
{ $fields.state.options[$fields.state.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="status">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="dynamicenum" field="status" >

{if !$fields.status.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.options }">
{ $fields.status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.value }">
{ $fields.status.options[$fields.status.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="type">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="enum" field="type" >

{if !$fields.type.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.type.options)}
<input type="hidden" class="sugar_field" id="{$fields.type.name}" value="{ $fields.type.options }">
{ $fields.type.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.type.name}" value="{ $fields.type.value }">
{ $fields.type.options[$fields.type.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="account_name">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNT_NAME' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="relate" field="account_name" >

{if !$fields.account_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.account_id.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.account_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="account_id" class="sugar_field" data-id-value="{$fields.account_id.value}">{$fields.account_name.value}</span>
{if !empty($fields.account_id.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="name">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SUBJECT' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="name" field="name" >

{if !$fields.name.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="suggestion_box">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SUGGESTION_BOX' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="readonly" field="suggestion_box" >

{if !$fields.suggestion_box.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.suggestion_box.value) <= 0}
{assign var="value" value=$fields.suggestion_box.default_value }
{else}
{assign var="value" value=$fields.suggestion_box.value }
{/if} 
<span class="sugar_field" id="{$fields.suggestion_box.name}">{$fields.suggestion_box.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="text" field="description" colspan='3'>

{if !$fields.description.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.description.name|url2html|nl2br|htmlpurify}">{$fields.description.value|escape:'html_entity_decode'|url2html|nl2br|htmlpurify}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="resolution">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_RESOLUTION' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="text" field="resolution" colspan='3'>

{if !$fields.resolution.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.resolution.name|escape:'html'|url2html|nl2br}">{$fields.resolution.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="case_attachments_display">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CASE_ATTACHMENTS_DISPLAY' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="function" field="case_attachments_display" colspan='3'>

{if !$fields.case_attachments_display.hidden}
{counter name="panelFieldCount" print=false}
<span id='case_attachments_display_span'>
{$fields.case_attachments_display.value}
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="update_text">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_UPDATE_TEXT' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="text" field="update_text" colspan='3'>

{if !$fields.update_text.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.update_text.name|url2html|nl2br|htmlpurify}">{$fields.update_text.value|escape:'html_entity_decode'|url2html|nl2br|htmlpurify}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="photo_c">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PHOTO' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="image" field="photo_c" colspan='3'>

{if !$fields.photo_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.photo_c.name}">
{if strlen($fields.photo_c.value) <= 0}
<img src="" style="max-width: {if !$vardef.width}120{else}200{/if}px;" height="{if !$vardef.height}120{else}50{/if}">
{else}
<img src="index.php?entryPoint=download&id={$fields.id.value}_{$fields.photo_c.name}{$fields.width.value}&type={$module}" style="max-width: {if !$vardef.width}120{else}200{/if}px;" height="{if !$vardef.height}120{else}50{/if}">
{/if}
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="internal">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_INTERNAL' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="bool" field="internal" colspan='3'>

{if !$fields.internal.hidden}
{counter name="panelFieldCount" print=false}

{if strval($fields.internal.value) == "1" || strval($fields.internal.value) == "yes" || strval($fields.internal.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.internal.name}" id="{$fields.internal.name}" value="$fields.internal.value" disabled="true" {$checked}>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="case_update_form">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CASE_UPDATE_FORM' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="function" field="case_update_form" colspan='3'>

{if !$fields.case_update_form.hidden}
{counter name="panelFieldCount" print=false}
<span id='case_update_form_span'>
{$fields.case_update_form.value}
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="assigned_user_name">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="relate" field="assigned_user_name" colspan='3'>

{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount" print=false}

<span id="assigned_user_id" class="sugar_field" data-id-value="{$fields.assigned_user_id.value}">{$fields.assigned_user_name.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>
                        </div>
{else}

<div class="tab-pane-NOBOOTSTRAPTOGGLER panel-collapse"></div>
{/if}
</div>

<div class="panel-content">





{if $config.enable_action_menu and $config.enable_action_menu != false}

{else}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel--1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_CASE_INFORMATION' module='Cases'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel--1" data-id="LBL_CASE_INFORMATION">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="numero_identidad_c">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NUMERO_IDENTIDAD_C' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="varchar" field="numero_identidad_c" colspan='3'>

{if !$fields.numero_identidad_c.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.numero_identidad_c.value) <= 0}
{assign var="value" value=$fields.numero_identidad_c.default_value }
{else}
{assign var="value" value=$fields.numero_identidad_c.value }
{/if} 
<span class="sugar_field" id="{$fields.numero_identidad_c.name}">{$fields.numero_identidad_c.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="case_number">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CASE_NUMBER' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex" type="int" field="case_number" >

{if !$fields.case_number.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.case_number.name}">
{assign var="value" value=$fields.case_number.value }
{$value}
</span>
{/if}

</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="priority">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PRIORITY' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="enum" field="priority" >

{if !$fields.priority.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.priority.options)}
<input type="hidden" class="sugar_field" id="{$fields.priority.name}" value="{ $fields.priority.options }">
{ $fields.priority.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.priority.name}" value="{ $fields.priority.value }">
{ $fields.priority.options[$fields.priority.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="state">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_STATE' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="enum" field="state" >

{if !$fields.state.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.state.options)}
<input type="hidden" class="sugar_field" id="{$fields.state.name}" value="{ $fields.state.options }">
{ $fields.state.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.state.name}" value="{ $fields.state.value }">
{ $fields.state.options[$fields.state.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="status">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="dynamicenum" field="status" >

{if !$fields.status.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.options }">
{ $fields.status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.value }">
{ $fields.status.options[$fields.status.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="type">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="enum" field="type" >

{if !$fields.type.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.type.options)}
<input type="hidden" class="sugar_field" id="{$fields.type.name}" value="{ $fields.type.options }">
{ $fields.type.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.type.name}" value="{ $fields.type.value }">
{ $fields.type.options[$fields.type.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="account_name">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNT_NAME' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="relate" field="account_name" >

{if !$fields.account_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.account_id.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.account_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="account_id" class="sugar_field" data-id-value="{$fields.account_id.value}">{$fields.account_name.value}</span>
{if !empty($fields.account_id.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="name">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SUBJECT' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="name" field="name" >

{if !$fields.name.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="suggestion_box">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SUGGESTION_BOX' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex inlineEdit" type="readonly" field="suggestion_box" >

{if !$fields.suggestion_box.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.suggestion_box.value) <= 0}
{assign var="value" value=$fields.suggestion_box.default_value }
{else}
{assign var="value" value=$fields.suggestion_box.value }
{/if} 
<span class="sugar_field" id="{$fields.suggestion_box.name}">{$fields.suggestion_box.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="text" field="description" colspan='3'>

{if !$fields.description.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.description.name|url2html|nl2br|htmlpurify}">{$fields.description.value|escape:'html_entity_decode'|url2html|nl2br|htmlpurify}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="resolution">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_RESOLUTION' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="text" field="resolution" colspan='3'>

{if !$fields.resolution.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.resolution.name|escape:'html'|url2html|nl2br}">{$fields.resolution.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="case_attachments_display">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CASE_ATTACHMENTS_DISPLAY' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="function" field="case_attachments_display" colspan='3'>

{if !$fields.case_attachments_display.hidden}
{counter name="panelFieldCount" print=false}
<span id='case_attachments_display_span'>
{$fields.case_attachments_display.value}
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="update_text">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_UPDATE_TEXT' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="text" field="update_text" colspan='3'>

{if !$fields.update_text.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.update_text.name|url2html|nl2br|htmlpurify}">{$fields.update_text.value|escape:'html_entity_decode'|url2html|nl2br|htmlpurify}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="photo_c">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PHOTO' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="image" field="photo_c" colspan='3'>

{if !$fields.photo_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.photo_c.name}">
{if strlen($fields.photo_c.value) <= 0}
<img src="" style="max-width: {if !$vardef.width}120{else}200{/if}px;" height="{if !$vardef.height}120{else}50{/if}">
{else}
<img src="index.php?entryPoint=download&id={$fields.id.value}_{$fields.photo_c.name}{$fields.width.value}&type={$module}" style="max-width: {if !$vardef.width}120{else}200{/if}px;" height="{if !$vardef.height}120{else}50{/if}">
{/if}
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="internal">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_INTERNAL' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="bool" field="internal" colspan='3'>

{if !$fields.internal.hidden}
{counter name="panelFieldCount" print=false}

{if strval($fields.internal.value) == "1" || strval($fields.internal.value) == "yes" || strval($fields.internal.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.internal.name}" id="{$fields.internal.name}" value="$fields.internal.value" disabled="true" {$checked}>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="case_update_form">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CASE_UPDATE_FORM' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="function" field="case_update_form" colspan='3'>

{if !$fields.case_update_form.hidden}
{counter name="panelFieldCount" print=false}
<span id='case_update_form_span'>
{$fields.case_update_form.value}
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="assigned_user_name">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='Cases'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex inlineEdit" type="relate" field="assigned_user_name" colspan='3'>

{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount" print=false}

<span id="assigned_user_id" class="sugar_field" data-id-value="{$fields.assigned_user_id.value}">{$fields.assigned_user_name.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="pencil"}
</div>
</div>
<div class="dotted-border"></div>


</div>

</div>
                            </div>
</div>
</div>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>            <script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
{literal}
<script type="text/javascript">

                    let selectTabDetailView = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                        $('#content div.detail-view div.panel-content div.panel.panel').hide();
                        $('#content div.panel-content div.panel.tab-panel-' + tab).show();
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                </script>
{/literal}