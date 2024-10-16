<?php
$viewdefs ['Cases'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'syncDetailEditViews' => true,
    ),
    'topWidget' => 
    array (
      'type' => 'statistics',
      'options' => 
      array (
        'statistics' => 
        array (
          0 => 
          array (
            'labelKey' => '',
            'type' => 'case-days-open',
            'endLabelKey' => 'LBL_STAT_DAYS',
            'hideValueIfEmpty' => true,
          ),
        ),
      ),
    ),
    'sidebarWidgets' => 
    array (
      0 => 
      array (
        'type' => 'record-thread',
        'labelKey' => 'LBL_CASE_UPDATES',
        'options' => 
        array (
          'recordThread' => 
          array (
            'module' => 'case-updates',
            'class' => 'case-updates',
            'filters' => 
            array (
              'parentFilters' => 
              array (
                'id' => 'case_id',
              ),
              'orderBy' => 'date_entered',
              'sortOrder' => 'DESC',
            ),
            'item' => 
            array (
              'itemClass' => 'case-updates-item pt-2 pb-2',
              'collapsible' => true,
              'dynamicClass' => 
              array (
                0 => 'source',
                1 => 'internal',
              ),
              'layout' => 
              array (
                'header' => 
                array (
                  'rows' => 
                  array (
                  ),
                ),
                'body' => 
                array (
                  'rows' => 
                  array (
                    0 => 
                    array (
                      'align' => 'end',
                      'justify' => 'between',
                      'cols' => 
                      array (
                        0 => 
                        array (
                          'field' => 'author',
                          'labelDisplay' => 'none',
                          'hideIfEmpty' => true,
                          'class' => 'font-weight-bold item-title',
                        ),
                        1 => 
                        array (
                          'field' => 'internal',
                          'labelDisplay' => 'inline',
                          'labelClass' => 'm-0',
                          'display' => 'none',
                          'hideIfEmpty' => true,
                          'class' => 'small ml-auto font-weight-light',
                        ),
                      ),
                    ),
                    1 => 
                    array (
                      'align' => 'start',
                      'justify' => 'start',
                      'class' => 'flex-grow-1 item-content',
                      'cols' => 
                      array (
                        0 => 
                        array (
                          'field' => 
                          array (
                            'name' => 'description',
                            'type' => 'html',
                          ),
                          'labelDisplay' => 'none',
                        ),
                      ),
                    ),
                    2 => 
                    array (
                      'justify' => 'end',
                      'class' => 'flex-grow-1',
                      'cols' => 
                      array (
                        0 => 
                        array (
                          'field' => 'date_entered',
                          'labelDisplay' => 'none',
                          'hideIfEmpty' => true,
                          'class' => 'small ml-auto font-weight-light',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'create' => 
            array (
              'presetFields' => 
              array (
                'parentValues' => 
                array (
                  'id' => 'case_id',
                ),
              ),
              'layout' => 
              array (
                'header' => 
                array (
                  'rows' => 
                  array (
                  ),
                ),
                'body' => 
                array (
                  'rows' => 
                  array (
                    0 => 
                    array (
                      'justify' => 'start',
                      'class' => 'flex-grow-1',
                      'cols' => 
                      array (
                        0 => 
                        array (
                          'field' => 
                          array (
                            'name' => 'description',
                            'metadata' => 
                            array (
                              'rows' => 3,
                            ),
                          ),
                          'labelDisplay' => 'top',
                          'class' => 'flex-grow-1',
                        ),
                      ),
                    ),
                    1 => 
                    array (
                      'align' => 'end',
                      'justify' => 'start',
                      'class' => 'flex-grow-1',
                      'cols' => 
                      array (
                        0 => 
                        array (
                          'field' => 'internal',
                          'labelDisplay' => 'inline',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'acls' => 
        array (
          'Cases' => 
          array (
            0 => 'view',
            1 => 'list',
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'statistics',
        'labelKey' => 'LBL_NUMBER_OF_CASES_PER_ACCOUNT',
        'options' => 
        array (
          'sidebarStatistic' => 
          array (
            'rows' => 
            array (
              0 => 
              array (
                'align' => 'start',
                'cols' => 
                array (
                  0 => 
                  array (
                    'labelKey' => 'LBL_TOTAL_CASES_FOR_THIS_ACCOUNT',
                    'size' => 'medium',
                  ),
                ),
              ),
              1 => 
              array (
                'align' => 'start',
                'cols' => 
                array (
                  0 => 
                  array (
                    'statistic' => 'cases-per-account',
                    'size' => 'xx-large',
                    'bold' => true,
                    'color' => 'green',
                  ),
                ),
              ),
              2 => 
              array (
                'align' => 'start',
                'cols' => 
                array (
                  0 => 
                  array (
                    'labelKey' => 'LBL_SINCE',
                    'size' => 'regular',
                  ),
                  1 => 
                  array (
                    'statistic' => 'get-account-date-entered',
                    'size' => 'regular',
                  ),
                ),
              ),
            ),
          ),
        ),
        'acls' => 
        array (
          'Cases' => 
          array (
            0 => 'view',
            1 => 'list',
          ),
          'Accounts' => 
          array (
            0 => 'view',
            1 => 'list',
          ),
        ),
      ),
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
            'label' => 'LBL_CASE_NUMBER',
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
            'label' => 'LBL_SUBJECT',
          ),
          1 => 
          array (
            'name' => 'suggestion_box',
            'label' => 'LBL_SUGGESTION_BOX',
          ),
        ),
        6 => 
        array (
          0 => 'description',
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
            'label' => 'LBL_CASE_UPDATE_FORM',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'status',
          1 => 'resolution',
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
