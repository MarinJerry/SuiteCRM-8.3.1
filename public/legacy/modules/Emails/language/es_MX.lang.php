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
    'LBL_EMAIL_INFORMATION' => 'EMAIL',
    'LBL_FW' => 'RW:',
    'LBL_RE' => 'RE:',

    'LBL_BUTTON_CREATE' => 'Crear',
    'LBL_BUTTON_EDIT' => 'Editar',
    'LBL_BUTTON_EDIT_EDIT_DRAFT' => 'Editar Borrador',
    'LBL_QS_DISABLED' => '(La búsqueda rápida no está disponible para este módulo. Por favor, use el botón de selección)',
    'LBL_SIGNATURE_PREPEND' => 'Firma sobre la respuesta',
    'LBL_IMPORT' => 'Importar',
    'LBL_LOADING' => 'Cargando',
    'LBL_MARKING' => 'Marcando',
    'LBL_DELETING' => 'Eliminando',

    'LBL_CONFIRM_DELETE_EMAIL' => '¿Estas seguro que quieres eliminar este email?',
    'LBL_ENTER_FOLDER_NAME' => 'Por favor, introduzca un nombre de carpeta',

    'LBL_ERROR_SELECT_MODULE' => 'Por favor, seleccione un módulo para el campo relacionado con',

    'ERR_ARCHIVE_EMAIL' => 'Error: Seleccione los e-Mails a archivar',
    'ERR_DELETE_RECORD' => 'Por favor, seleccione un nombre haciendo clic en el botón de selección junto al campo relacionado con',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_ADD_DASHLETS' => 'Agregar SuiteCRM Dashlets',
    'LBL_ADD_DOCUMENT' => 'Agregar documentos',
    'LBL_ADD_ENTRIES' => 'Agregar entradas',
    'LBL_ADD_FILE' => 'Agregar archivos',
    'LBL_ATTACHMENTS' => 'Adjuntos:',
    'LBL_ATTACH_FILES' => 'Adjuntar Archivos',
    'LBL_ATTACH_DOCUMENTS' => 'Adjuntar Documentos',
    'LBL_HAS_ATTACHMENT' => '¿Tiene Adjunto?:',
    'LBL_BCC' => 'CCO:',
    'LBL_BODY' => 'Cuerpo:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Incidencias',
    'LBL_CC' => 'CC:',
    'LBL_COMPOSE_MODULE_NAME' => 'Redactar e-Mail',
    'LBL_CONTACT_NAME' => 'Contacto:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_CREATED_BY' => 'Creado por',
    'LBL_DATE_SENT_RECEIVED' => 'Fecha Envio/Recepción:',
    'LBL_DATE' => 'Fecha de envío',
    'LBL_DELETE_FROM_SERVER' => 'Eliminar mensaje del servidor',
    'LBL_DESCRIPTION' => 'Descripción',
    'LBL_EDIT_ALT_TEXT' => 'Editar texto plano',
    'LBL_SEND_IN_PLAIN_TEXT' => 'Enviar en texto plano',
    'LBL_SEND_CONFIRM_OPT_IN' => 'Enviar mensaje de autorización',
    'LBL_EMAIL_ATTACHMENT' => 'Archivo adjunto',
    'LBL_EMAIL_SELECTOR_SELECT' => 'Seleccionar',
    'LBL_EMAIL_SELECTOR_CLEAR' => 'Limpiar',
    'LBL_EMAIL' => 'e-Mail:',
    'LBL_EMAILS_ACCOUNTS_REL' => 'e-Mails:Cuentas',
    'LBL_EMAILS_BUGS_REL' => 'e-Mails:Incidencias',
    'LBL_EMAILS_CASES_REL' => 'e-Mails:Casos',
    'LBL_EMAILS_CONTACTS_REL' => 'e-Mails:Contactos',
    'LBL_EMAILS_LEADS_REL' => 'e-Mails:Clientes potenciales',
    'LBL_EMAILS_OPPORTUNITIES_REL' => 'e-Mails:Oportunidades',
    'LBL_EMAILS_NOTES_REL' => 'e-Mails:Notas',
    'LBL_EMAILS_PROJECT_REL' => 'e-Mails:Proyecto',
    'LBL_EMAILS_PROJECT_TASK_REL' => 'e-Mails:Tareas de proyecto',
    'LBL_EMAILS_PROSPECT_REL' => 'e-Mails:Público objetivo',
    'LBL_EMAILS_CONTRACTS_REL' => 'Correo electrónico: contrato',
    'LBL_EMAILS_TASKS_REL' => 'e-Mails:Tareas',
    'LBL_EMAILS_USERS_REL' => 'e-Mails:Usuarios',
    'LBL_EMPTY_FOLDER' => 'No hay e-Mails a mostrar',
    'LBL_SELECT_FOLDER' => 'Seleccionar Carpeta',
    'LBL_ERROR_SENDING_EMAIL' => 'Error enviando e-Mail',
    'LBL_ERROR_SAVING_DRAFT' => 'Error guardando borrador',
    'LBL_FROM_NAME' => 'Nombre del remitente',
    'LBL_FROM' => 'De:',
    'LBL_REPLY_TO' => 'Responder a:',
    'LBL_HTML_BODY' => 'Cuerpo de HTML',
    'LBL_INVITEE' => 'Destinatarios',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes potenciales',
    'LBL_MESSAGE_SENT' => 'Mensaje enviado',
    'LBL_MODIFIED_BY' => 'Modificado por',
    'LBL_MODULE_NAME' => 'Todos los e-Mails',
    'LBL_MODULE_TITLE' => 'Correos electrónicos:',
    'LBL_MY_EMAILS' => 'e-Mails',
    'LBL_NEW_FORM_TITLE' => 'Guardar e-Mail',
    'LBL_NONE' => 'Ninguno',
    'LBL_NOT_SENT' => 'Error de envío',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Datos adjuntos',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyectos',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tareas de proyecto',
    'LBL_RAW' => 'Código fuente de e-Mail',
    'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Guardar borrador',
    'LBL_DISREGARD_DRAFT_BUTTON_TITLE' => 'Descartar el borrador',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de e-Mails',
    'LBL_SEND_ANYWAYS' => 'Este e-Mail no tiene asunto. ¿Enviar/guardar de todas formas?',
    'LBL_SEND_BUTTON_LABEL' => 'Enviar',
    'LBL_SEND_BUTTON_TITLE' => 'Enviar',
    'LBL_SEND' => 'ENVIAR',
    'LBL_SENT_MODULE_NAME' => 'e-Mails enviados',
    'LBL_SHOW_ALT_TEXT' => 'Mostrar texto plano',
    'LBL_SIGNATURE' => 'Firma',
    'LBL_SUBJECT' => 'Asunto:',
    'LBL_TEXT_BODY' => 'Cuerpo de texto',
    'LBL_TIME' => 'Hora de envío:',
    'LBL_TO_ADDRS' => 'Para',
    'LBL_USERS_SUBPANEL_TITLE' => 'Usuarios',
    'LBL_USERS' => 'Usuarios',

    'LNK_CALL_LIST' => 'Llamadas',
    'LBL_EMAIL_RELATE' => 'Relacionado con',
    'LNK_EMAIL_TEMPLATE_LIST' => 'Plantillas de e-Mail',
    'LNK_MEETING_LIST' => 'Reuniones',
    'LNK_NEW_CALL' => 'Programar llamada',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Crear plantilla de e-Mail',
    'LNK_NEW_EMAIL' => 'Enviar e-Mail',
    'LNK_NEW_MEETING' => 'Programar reunión',
    'LNK_NEW_NOTE' => 'Nueva nota o archivo adjunto',
    'LNK_NEW_SEND_EMAIL' => 'Redactar',
    'LNK_NEW_TASK' => 'Nueva tarea',
    'LNK_NOTE_LIST' => 'Notas',
    'LNK_SENT_EMAIL_LIST' => 'e-Mails enviados',
    'LNK_TASK_LIST' => 'Tareas',
    'LNK_VIEW_CALENDAR' => 'Hoy',

    'LBL_LIST_ASSIGNED' => 'Asignado',
    'LBL_LIST_CONTACT_NAME' => 'Nombre de contacto',
    'LBL_LIST_DATE' => 'Fecha de envío',
    'LBL_LIST_DATE_SENT_RECEIVED' => 'Fecha Envio/Recepción',
    'LBL_LIST_FORM_DRAFTS_TITLE' => 'Borrador',
    'LBL_LIST_FORM_SENT_TITLE' => 'e-Mails enviados',
    'LBL_LIST_FORM_TITLE' => 'Lista de e-Mails',
    'LBL_LIST_FROM_ADDR' => 'De',
    'LBL_LIST_RELATED_TO' => 'Tipos de destinatarios',
    'LBL_LIST_SUBJECT' => 'Asunto',
    'LBL_LIST_TO_ADDR' => 'Para',
    'LBL_LIST_TYPE' => 'Tipo',

    'WARNING_SETTINGS_NOT_CONF' => 'Advertencia: Su configuración de e-Mail no está preparada para el envío de e-Mail',

    // for All emails
    'LBL_BUTTON_RAW_LABEL' => 'Mostrar código fuente',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'Ocultar código fuente',

    // for InboundEmail
    'LBL_BUTTON_CHECK' => 'Comprar e-Mail',
    'LBL_BUTTON_CHECK_TITLE' => 'Comprobar e-Mail nuevo',
    'LBL_BUTTON_FORWARD' => 'Reenviar',
    'LBL_BUTTON_REPLY_TITLE' => 'Responder',
    'LBL_BUTTON_REPLY_ALL' => 'Responder a todos',
    'LBL_BUTTON_DELETE_IMAP' => 'Eliminar de IMAP',
    'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
    'LBL_INBOUND_TITLE' => 'e-Mail entrante',
    'LBL_INTENT' => 'Intento',
    'LBL_MESSAGE_ID' => 'ID de mensaje',
    'LBL_REPLY_HEADER_1' => 'El',
    'LBL_REPLY_HEADER_2' => 'escribió:',
    'LBL_REPLY_TO_ADDRESS' => 'Dirección de Responder a',
    'LBL_REPLY_TO_NAME' => 'Nombre de Responder a',

    'LBL_LIST_BUG' => 'Incidencias',
    'LBL_LIST_CASE' => 'Casos',
    'LBL_LIST_CONTACT' => 'Contactos',
    'LBL_LIST_LEAD' => 'Clientes potenciales',
    'LBL_LIST_TASK' => 'Tareas',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario asignado',

    // for Inbox
    'LBL_ALL' => 'Todo',
    'LBL_ASSIGN_WARN' => 'Asegúrese de que las dos opciones están seleccionadas',
    'LBL_BACK_TO_GROUP' => 'Volver a la bandeja de entrada de grupo',
    'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Asignar',
    'LBL_BUTTON_DISTRIBUTE' => 'Asignar',
    'LBL_BUTTON_GRAB_TITLE' => 'Tomar del grupo',
    'LBL_BUTTON_GRAB' => 'Tomar del grupo',
    'LBL_CREATE_BUG' => 'Nueva incidencia',
    'LBL_CREATE_CASE' => 'Nuevo caso',
    'LBL_CREATE_CONTACT' => 'Nuevo contacto',
    'LBL_CREATE_LEAD' => 'Nuevo cliente potencial',
    'LBL_CREATE_TASK' => 'Nueva tarea',
    'LBL_DIST_TITLE' => 'Asignación',
    'LBL_LOCK_FAIL_DESC' => 'El elemento elegido no está disponible actualmente',
    'LBL_LOCK_FAIL_USER' => 'ha tomado posesión',
    'LBL_MASS_DELETE_ERROR' => 'No se ha seleccionado ningún elemento para su borrado',
    'LBL_NEW' => 'Nuevo',
    'LBL_NEXT_EMAIL' => 'Siguiente elemento libre',
    'LBL_REPLIED' => 'Respondido',
    'LBL_TO' => 'Para:',
    'LBL_TOGGLE_ALL' => 'Cambiar todo',
    'LBL_UNKNOWN' => 'Desconocido',
    'LBL_USE' => 'Asignar:',
    'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Asignar resultados seleccionados a:',
    'LBL_USER_SELECT' => 'Seleccionar usuarios',
    'LBL_USING_RULES' => 'Usando reglas:',
    'LBL_WARN_NO_DIST' => 'No se ha seleccionado el método de distribución',
    'LBL_WARN_NO_USERS' => 'No se han seleccionado usuarios',
    'LBL_IMPORT_STATUS_TITLE' => 'Estado',
    'LBL_INDICATOR' => 'Indicador',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_TITLE_GROUP_INBOX' => 'Bandeja de entrada de grupo',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Borradores',
    'LBL_LIST_TITLE_MY_INBOX' => 'Bandeja de entrada',
    'LBL_LIST_TITLE_MY_SENT' => 'Email Enviado',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'e-Mails archivados',

    'LNK_MY_DRAFTS' => 'Borradores',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'Ver Email',
    'LNK_QUICK_REPLY' => 'Responder',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'No se ha especificado un equipo principal',
    'LBL_INSERT_CONTACT_EMAIL' => 'Insertar la dirección de Email desde un contacto',
    'LBL_INSERT_ACCOUNT_EMAIL' => 'Insertar la dirección de Email desde una Cuenta',
    'LBL_INSERT_TARGET_EMAIL' => 'Insertar la dirección de Email desde un Cliente Potencial',
    'LBL_INSERT_USER_EMAIL' => 'Insertar la dirección de Email desde un Usuario',
    'LBL_INSERT_LEAD_EMAIL' => 'Insertar la dirección de Email desde un Cliente Potencial',
    'LBL_INSERT_ERROR_BLANK_EMAIL' => 'Dirección de email inválida',

    // advanced search
    'LBL_ASSIGNED_TO' => 'Asignado a:',
    'LBL_MEMBER_OF' => 'Padre',
    'LBL_QUICK_CREATE' => 'Creación rápida',
    'LBL_CREATE' => 'Nuevo',
    'LBL_STATUS' => 'Estado de Email:',
    'LBL_EMAIL_FLAGGED' => 'Etiquetado:',
    'LBL_EMAIL_REPLY_TO_STATUS' => 'Estado de Responder a:',
    'LBL_TYPE' => 'Tipo:',
    //#20680 EmialTemplate Ext.Message.show;
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => '¡Por favor, compruebe los siguiente!',
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Al seleccionar esta plantilla el cuerpo del e-Mail ya introducido será reemplazado. ¿Desea continuar?',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Al seleccionar "--Ninguno--" se limpiará cualquier información ya introducida en el cuerpo del e-Mail. ¿Desea continuar?',
    'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Advertencia',
    'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Usando una plantilla de e-Mail conteniendo variables de contacto, como el nombre de contacto, para enviar e-Mails a múltiples recipientes podría tener resultados inesperados. Se recomienda que utilice un e-Mail de campaña para e-Mails masivos',
    'LBL_CHECK_ATTACHMENTS' => 'Por favor, compruebe los archivos adjuntos',
    'LBL_HAS_ATTACHMENTS' => 'Este e-Mail ya tiene archivos adjuntos. ¿Desea preservarlos?',
    'LBL_HAS_ATTACHMENT_INDICATOR' => 'Tiene adjuntos',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Falta campo requerido',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Campo requerido inválido',
    'LBL_FILTER_BY_RELATED_BEAN' => 'Sólo mostrar destinatarios relacionados',
    'LBL_ADD_INBOUND_ACCOUNT' => 'Añadir',
    'LBL_ADD_OUTBOUND_ACCOUNT' => 'Añadir',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Propiedades de la cuenta de e-Mail',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Servidor de e-Mail saliente SMTP',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Servidores de e-Mail saliente SMTP',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Cuentas de e-Mail',
    'LBL_EMAIL_SETTINGS_INBOUND' => 'e-Mail entrante',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => 'e-Mail saliente',
    'LBL_ADD_CC' => 'Agregar Cc',
    'LBL_ADD_BCC' => 'Agregar Cco',
    'LBL_MOVE_TO_BCC' => 'Mover a Bcc',
    'LBL_ADD_TO_ADDR' => 'Agregar Para',
    'LBL_SELECTED_ADDR' => 'Seleccionado',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => 'Error enviando e-Mail',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'mostrar',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => 'más',
    'LBL_MORE_OPTIONS' => 'Más',
    'LBL_LESS_OPTIONS' => 'Menos',
    'LBL_MAILBOX_TYPE_PERSONAL' => 'Personal',
    'LBL_MAILBOX_TYPE_GROUP' => 'Grupo',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Grupo - Auto-Importación',
    'LBL_SEARCH_FOR' => 'Buscar',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Personal</b>: Cuenta de e-Mail accesible por usted. Sólo usted puede administrar e importar e-Mail desde esta cuenta.<br><b>Grupo</b>: Cuenta de e-Mail accesible por miembros de equipos específicos. Los miembros de equipos pueden administrar e importar e-Mails de esta cuenta.<br><b>Grupo - auto-importación</b>: Cuenta de e-Mail accesible por miembros de equipos específicos. Los e-Mails son importados como registros de forma automática',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Introduzca una dirección de e-Mail, Nombre, Apellido o Nombre de cuenta para encontrar destinatarios',
    'LBL_TEST_SETTINGS' => 'Probar configuración',
    'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>Este mensaje no tiene contenido</em></span></p>',
    'LBL_HAS_EMPTY_EMAIL_SUBJECT' => 'Por favor especificar un asunto',
    'LBL_HAS_EMPTY_EMAIL_BODY' => 'Por favor escriba su mensaje en el cuerpo',
    'LBL_HAS_INVALID_EMAIL_CC' => 'La(s) dirección(es) en el campo Cc son inválidas',
    'LBL_HAS_INVALID_EMAIL_BCC' => 'La(s) dirección(es) en el campo Bcc son inválidas',
    'LBL_HAS_INVALID_EMAIL_TO' => 'La(s) dirección(es) en el campo Para son inválidas',
    'LBL_TEST_EMAIL_SUBJECT' => 'E-Mail de prueba desde SuiteCRM',
    'LBL_NO_SUBJECT' => '(sin asunto)',
    'LBL_CHECKING_ACCOUNT' => 'Comprobando cuenta',
    'LBL_OF' => 'de',
    'LBL_TEST_EMAIL_BODY' => 'Este e-Mail se ha enviado para comprobar la información sobre el servidor de e-Mail saliente proporcionada en la aplicación SuiteCRM.  La recepción con éxito de este e-Mail confirma que la información proporcionada acerca del servidor de e-Mail saliente es válida.',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'El administrador aún no ha configurado la cuenta de e-Mail saliente predeterminada.  No es posible enviar el e-Mail de prueba',
    'LBL_MAIL_SMTPAUTH_REQ' => '¿Usar autenticación SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Contraseña SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Puerto SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Usuario SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificación del servidor SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Elija su proveedor de e-Mail:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Contraseña de Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID de Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Contraseña de Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Dirección de Email de Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Contraseña de Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Nombre de usuario de Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Puerto del servidor Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange:',

    'LBL_EDIT_LAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
    'LBL_ATTACHMENT' => 'Adjunto' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Eliminar' /*for 508 compliance fix*/,
    'LBL_CREATE_CASES' => 'Crear caso' /*for 508 compliance fix*/,
    'LBL_CREATE_LEADS' => 'Crear cliente potencial' /*for 508 compliance fix*/,
    'LBL_CREATE_CONTACTS' => 'Crear contacto' /*for 508 compliance fix*/,
    'LBL_CREATE_BUGS' => 'Crear incidencia' /*for 508 compliance fix*/,
    'LBL_CREATE_TASKS' => 'Crear tarea' /*for 508 compliance fix*/,
    'LBL_CHECK_INLINE' => 'Correcto' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Cerrar' /*for 508 compliance fix*/,
    'LBL_HELP' => 'Ayuda' /*for 508 compliance fix*/,
    'LBL_WAIT' => 'Espere' /*for 508 compliance fix*/,
    'LBL_CHECKEMAIL' => 'Revisar el correo electrónico' /*for 508 compliance fix*/,
    'LBL_COMPOSEEMAIL' => 'Redactar e-Mail' /*for 508 compliance fix*/,
    'LBL_EMAILSETTINGS' => 'Opciones de e-Mail' /*for 508 compliance fix*/,

    // SNIP
    'LBL_EMAILS_MEETINGS_REL' => 'Reuniones:Email',
    'LBL_DATE_MODIFIED' => 'Fecha de modificación',

    'LBL_CATEGORY' => 'Categoría',
    'LBL_LIST_CATEGORY' => 'Categoría',
    'LBL_EMAIL_TEMPLATE' => 'Plantilla de e-Mail',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Descartar Borrador',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Esta operación eliminará este mensaje, ¿desea continuar?',
    'LBL_EMAIL_DRAFT_DELETED' => 'El borrador ha sido eliminado',
    'LBL_EMAIL_DRAFT_ERROR_DELETING' => 'Se ha producido un error al intentar eliminar el borrador.',

    'LBL_QUICK_CREATE_SUCCESS1' => 'El registro se ha creado con éxito.',
    'LBL_QUICK_CREATE_SUCCESS2' => 'Haga clic en Aceptar para ver el nuevo registro.',
    'LBL_QUICK_CREATE_SUCCESS3' => 'Haga clic en Cancelar para volver al correo electrónico.',

    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Aplicar una plantilla de mensaje',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Esta operación borrará el campo Contenido y Asunto, ¿Desea Continuar?',

    'LBL_MAILBOX_ID' => 'ID de Bandeja de correo',
    'LBL_PARENT_ID' => 'ID del Padre',
    'LBL_LAST_SYNCED' => 'Ultima sincronización',
    'LBL_ORPHANED' => 'Huérfanos',
    'LBL_IMAP_KEYWORDS' => 'IMAP palabras clave',
    'LBL_ERROR_NO_FOLDERS' => 'Error: No hay carpetas disponibles. Por favor revise su configuración de correo.',
    'LBL_ORIGINAL_MESSAGE_SEPARATOR' => '---',


    'LBL_MARK_UNREAD' => 'Marcar como no leído',
    'LBL_MARK_READ' => 'Marcar como leído',
    'LBL_MARK_FLAGGED' => 'Marca como destacado',
    'LBL_MARK_UNFLAGGED' => 'Marcar como no destacado',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Mensaje de autorización enviado',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Mensaje de autorización fallido',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirmar el Token de Autorización',

    'ERR_NO_RETURN_ID' => 'Adjunto no encontrado.',

    'LBL_LIST_DATE_MODIFIED' => 'Última modificación',
    'LNK_IMPORT_CAMPAIGNS' => 'Importar Campaña',
    
    // Email Validation Error messages. Typicaly for Email Validation:
    'ERR_FIELD_FROM_IS_NOT_SET' => 'El nombre de la dirección de envío no está establecido.',
    'ERR_FIELD_FROM_IS_EMPTY' => 'El nombre de la dirección de envío está vacío.',
    'ERR_FIELD_FROM_IS_INVALID' => 'El nombre de la dirección de envío es inválido.',
    'ERR_FIELD_FROM_ADDR_IS_NOT_SET' => 'La dirección de envío no está definida.',
    'ERR_FIELD_FROM_ADDR_IS_EMPTY' => 'La dirección de envío está vacía.',
    'ERR_FIELD_FROM_ADDR_IS_INVALID' => 'La dirección de envío es inválida.',
    'ERR_FIELD_FROMNAME_IS_NOT_SET' => 'El nombre de la dirección de envío no está definido.',
    'ERR_FIELD_FROMNAME_IS_EMPTY' => 'El nombre de la dirección de envío está vacío.',
    'ERR_FIELD_FROMNAME_IS_INVALID' => 'El nombre de la dirección de envío es inválido.',
    'ERR_FIELD_FROM_NAME_IS_NOT_SET' => 'El nombre de la dirección de envío no está definido.',
    'ERR_FIELD_FROM_NAME_IS_EMPTY' => 'El nombre de la dirección de envío está vacío.',
    'ERR_FIELD_FROM_NAME_IS_INVALID' => 'El nombre de la dirección de envío es inválido.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_NOT_SET' => 'La pareja de dirección y nombre de envío no están definidos.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_EMPTY' => 'La pareja de dirección y nombre de envío están vacíos.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_INVALID' => 'La pareja de dirección y nombre de envío son inválidos.',
    'ERR_FIELD_FROM_ADDR_NAME_DOESNT_MATCH_REGEX' => 'El formato de la pareja de dirección y nombre de envío son incorrectos, utilice el formato "de@correo.org <Name of Person>".',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_NAME_PART' => 'La parte del nombre no es válida en la pareja de dirección y nombre de envío.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART' => 'La parte del correo no es válida en la pareja de dirección y nombre de envío.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM' => 'La pareja de dirección y nombre de envío no coinciden con un nombre o dirección de correo registrados.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_ADDR' => 'La pareja de dirección y nombre de envío no coinciden con una dirección de correo.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROMNAME' => 'La pareja de dirección y nombre de envío no coinciden con un nombre registrado.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_NAME' => 'La pareja de dirección y nombre de envío no coinciden con un nombre registrado.',
);
