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
    'LBL_MODULE_NAME' => 'Historial',
    'LBL_MODULE_TITLE' => 'Historial: Inicio',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda en Historial',
    'LBL_LIST_FORM_TITLE' => 'Historial',
    'LBL_LIST_SUBJECT' => 'Asunto',
    'LBL_LIST_CONTACT' => 'Contacto',
    'LBL_LIST_RELATED_TO' => 'Relacionado con',
    'LBL_LIST_DATE' => 'Fecha',
    'LBL_LIST_CLOSE' => 'Cerrar',
    'LBL_SUBJECT' => 'Asunto:',
    'LBL_STATUS' => 'Estado:',
    'LBL_LOCATION' => 'Lugar:',
    'LBL_DATE_TIME' => 'Fecha y hora inicial:',
    'LBL_DATE' => 'Fecha inicial:',
    'LBL_TIME' => 'Hora inicial:',
    'LBL_DURATION' => 'Duración:',
    'LBL_HOURS_MINS' => '(horas/minutos)',
    'LBL_CONTACT_NAME' => 'Contacto: ',
    'LBL_DESCRIPTION' => 'Descripción:',
    'LNK_NEW_CALL' => 'Programar llamada',
    'LNK_NEW_MEETING' => 'Programar reunión',
    'LNK_NEW_TASK' => 'Nueva tarea',
    'LNK_NEW_NOTE' => 'Nueva nota o archivo adjunto',
    'LNK_NEW_EMAIL' => 'Archivar e-Mail',
    'LNK_CALL_LIST' => 'Llamadas',
    'LNK_MEETING_LIST' => 'Reuniones',
    'LNK_TASK_LIST' => 'Tareas',
    'LNK_NOTE_LIST' => 'Notas',
    'ERR_DELETE_RECORD' => 'Debe especificar un número de registro a eliminar',
    'LBL_INVITEE' => 'Asistentes',
    'LBL_LIST_DIRECTION' => 'Dirección',
    'LBL_DIRECTION' => 'Dirección',
    'LNK_NEW_APPOINTMENT' => 'Nueva cita',
    'LNK_VIEW_CALENDAR' => 'Hoy',
    'LBL_OPEN_ACTIVITIES' => 'Actividades abiertas',
    'LBL_HISTORY' => 'Historial',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Nueva tarea',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Nueva tarea',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Programar reunión',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Programar reunión',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Programar llamada',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Nueva nota o archivo adjunto',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Nueva nota o archivo adjunto',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivar e-Mail',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivar e-Mail',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_DUE_DATE' => 'Fecha de vencimiento',
    'LBL_LIST_LAST_MODIFIED' => 'Modificado',
    'LNK_IMPORT_NOTES' => 'Importar notas',
    'LBL_ACCEPT_THIS' => '¿Aceptar?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Historial',

    'LBL_CATEGORY' => 'Categoría',
    'LBL_LIST_CATEGORY' => 'Categoría',
);
