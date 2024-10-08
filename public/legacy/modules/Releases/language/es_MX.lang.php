<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Lanzamientos',
    'LBL_MODULE_TITLE' => 'Publicaciones: Inicio',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Publicaciones',
    'LBL_LIST_FORM_TITLE' => 'Lista de Publicaciones',
    'LBL_NEW_FORM_TITLE' => 'Nueva Publicación',
    'LBL_RELEASE' => 'Lanzamiento:',
    'LBL_LIST_NAME' => 'Lanzamiento',
    'LBL_NAME' => 'Versión de la publicación:',
    'LBL_LIST_LIST_ORDER' => 'Orden',
    'LBL_LIST_ORDER' => 'Orden:',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_STATUS' => 'Estado:',
    'LNK_NEW_RELEASE' => 'Lista de Publicaciones',
    'NTC_DELETE_CONFIRMATION' => '¿Está seguro que desea eliminar este registro?',
    'NTC_SNOOZE_CONFIRMATION' => '¿Estás seguro de que quieres posponer?',
    'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar la publicación.',
    'NTC_STATUS' => 'Establezca el estado a Inactiva para eliminar esta publicación de las listas desplegables de Publicaciones',
    'NTC_LIST_ORDER' => 'Establezca el orden en que esta publicación aparecerá en las listas desplegables de Publicaciones',
    'release_status_dom' =>
        array(
            'Active' => 'Activa',
            'Inactive' => 'Inactiva',
        ),
    'LBL_EDITLAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
);
