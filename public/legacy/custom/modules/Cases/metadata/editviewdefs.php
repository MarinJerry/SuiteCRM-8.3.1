<?php
$viewdefs ['Cases'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/bindWithDelay.js',
        ),
        1 => 
        array (
          'file' => 'modules/AOK_KnowledgeBase/AOK_KnowledgeBase_SuggestionBox.js',
        ),
        2 => 
        array (
          'file' => 'include/javascript/qtip/jquery.qtip.min.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CASE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_case_information' => 
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'numero_identidad_c',
            'label' => 'LBL_NUMERO_IDENTIDAD_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'case_number',
            'type' => 'readonly',
          ),
          1 => 'priority',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'state',
            'comment' => 'The state of the case (i.e. open/closed)',
            'label' => 'LBL_STATE',
          ),
        ),
        4 => 
        array (
          0 => 'type',
          1 => 'account_name',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
            ),
          ),
          1 => 
          array (
            'name' => 'suggestion_box',
            'label' => 'LBL_SUGGESTION_BOX',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        7 => 
        array (
          0 => '',
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'case_attachments_display',
            'studio' => 'visible',
            'label' => 'LBL_CASE_ATTACHMENTS_DISPLAY',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'update_text',
            'studio' => 'visible',
            'label' => 'LBL_UPDATE_TEXT',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'photo_c',
            'studio' => 'visible',
            'label' => 'LBL_PHOTO',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'internal',
            'studio' => 'visible',
            'label' => 'LBL_INTERNAL',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'case_update_form',
            'studio' => 'visible',
          ),
        ),
        13 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'resolution',
            'nl2br' => true,
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'adjunto_resolution_01_c',
            'studio' => 'visible',
            'label' => 'LBL_ADJUNTO_RESOLUTION_01',
          ),
          1 => 
          array (
            'name' => 'adjunto_resolution_02_c',
            'studio' => 'visible',
            'label' => 'LBL_ADJUNTO_RESOLUTION_02',
          ),
        ),
      ),
    ),
  ),
);
;
?>
