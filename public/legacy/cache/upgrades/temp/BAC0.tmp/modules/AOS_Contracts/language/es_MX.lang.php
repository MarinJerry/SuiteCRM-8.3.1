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
    'LBL_ASSIGNED_TO_NAME' => 'Administrador de Contratos',
    'LBL_CONTRACT_ACCOUNT' => 'Cuenta',
    'LBL_OPPORTUNITY' => 'Oportunidad',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Fecha de creación',
    'LBL_DATE_MODIFIED' => 'Fecha de modificación',
    'LBL_MODIFIED' => 'Modificado por',
    'LBL_MODIFIED_NAME' => 'Modificado por nombre',
    'LBL_CREATED' => 'Creado por',
    'LBL_DESCRIPTION' => 'Descripción',
    'LBL_DELETED' => 'Eliminado',
    'LBL_NAME' => 'Título del Contrato',
    'LBL_CREATED_USER' => 'Creado por usuario',
    'LBL_MODIFIED_USER' => 'Modificado por usuario',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_LIST_FORM_TITLE' => 'Lista de Contratos',
    'LBL_MODULE_NAME' => 'Contratos',
    'LBL_MODULE_TITLE' => 'Contratos: Inicio',
    'LBL_HOMEPAGE_TITLE' => 'Mis Contratos',
    'LNK_NEW_RECORD' => 'Crear Contrato',
    'LNK_LIST' => 'Ver Contratos',
    'LBL_SEARCH_FORM_TITLE' => 'Buscar Contratos',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Historial',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_NEW_FORM_TITLE' => 'Contrato Nuevo',
    'LBL_CONTRACT_NAME' => 'Nombre del Contrato',
    'LBL_REFERENCE_CODE ' => 'Código de Referencia ',
    'LBL_START_DATE' => 'Fecha inicial',
    'LBL_END_DATE' => 'Fecha final',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Valor del Contrato',
    'LBL_STATUS' => 'Estado',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Fecha de Firma del Cliente',
    'LBL_COMPANY_SIGNED_DATE' => 'Fecha de Firma de la Compañía',
    'LBL_RENEWAL_REMINDER' => ' Recordatorio de Renovación de Contrato',
    'LBL_RENEWAL_REMINDER_DATE' => 'Renovar Fecha de Recordatorio',
    'LBL_CONTRACT_TYPE' => 'Tipo de Contrato',
    'LBL_CONTACT' => 'Contacto',
    'LBL_ADD_GROUP' => 'Agregar Grupo',
    'LBL_DELETE_GROUP' => 'Eliminar Grupo',
    'LBL_GROUP_NAME' => 'Nombre del Grupo',
    'LBL_GROUP_TOTAL' => 'Total del Grupo',
    'LBL_PRODUCT_QUANITY' => 'Cantidad',
    'LBL_PRODUCT_NAME' => 'Producto',
    'LBL_PART_NUMBER' => 'Número de Parte',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'LBL_PRODUCT_DESCRIPTION' => 'Descripción',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Descuento',
    'LBL_UNIT_PRICE' => 'Precio de Venta',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Impuesto',
    'LBL_VAT_AMT' => 'Cantidad de Impuesto',
    'LBL_SERVICE_NAME' => 'Servicio',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Precio de Venta',
    'LBL_SERVICE_DISCOUNT' => 'Descuento',
    'LBL_LINE_ITEMS' => 'Items por linea',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Descuento',
    'LBL_TAX_AMOUNT' => 'Impuesto',
    'LBL_SHIPPING_AMOUNT' => 'Envíos',
    'LBL_TOTAL_AMT' => 'Total',
    'LBL_GRAND_TOTAL' => 'Gran Total',
    'LBL_SHIPPING_TAX' => 'Impuesto de Envío',
    'LBL_SHIPPING_TAX_AMT' => 'Impuesto de Envío',
    'LBL_ADD_PRODUCT_LINE' => 'Agregar Línea de Producto',
    'LBL_ADD_SERVICE_LINE' => 'Agregar Línea de Servicio ',
    'LBL_PRINT_AS_PDF' => 'Imprimir como PDF',
    'LBL_EMAIL_PDF' => 'Enviar PDF por Correo',
    'LBL_PDF_NAME' => 'Contrato',
    'LBL_EMAIL_NAME' => 'Contrato para',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo se encontró plantilla. Si usted no ha creado una plantilla de Contrato, vaya al módulo de plantillas PDF y cree uno',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Valor del Contrato (Moneda Predeterminada)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Moneda Predeterminada)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Descuento (Moneda Predeterminada)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Impuestos (Moneda Predeterminada)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Envío (Moneda Predeterminada)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Moneda Predeterminada)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Impuesto de envío (Moneda Predeterminada)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Gran Total (Moneda Predeterminada)',

    'LBL_CALL_ID' => 'Identificador de llamada',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Items por Linea agrupados',
    'LBL_AOS_PRODUCT_QUOTES' => 'Presupuestos de Productos',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Presupuestos: Contratos',
);
