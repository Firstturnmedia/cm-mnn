<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from xml/schema/CRM/Contact/GroupContact.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:1d229cf09854f6b9a9991a0c0bd86c87)
 */

/**
 * Database access object for the GroupContact entity.
 */
class CRM_Contact_DAO_GroupContact extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_group_contact';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * primary key
   *
   * @var int unsigned
   */
  public $id;

  /**
   * FK to civicrm_group
   *
   * @var int unsigned
   */
  public $group_id;

  /**
   * FK to civicrm_contact
   *
   * @var int unsigned
   */
  public $contact_id;

  /**
   * status of contact relative to membership in group
   *
   * @var string
   */
  public $status;

  /**
   * Optional location to associate with this membership
   *
   * @var int unsigned
   */
  public $location_id;

  /**
   * Optional email to associate with this membership
   *
   * @var int unsigned
   */
  public $email_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_group_contact';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'group_id', 'civicrm_group', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'location_id', 'civicrm_loc_block', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'email_id', 'civicrm_email', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group Contact ID'),
          'description' => ts('primary key'),
          'required' => TRUE,
          'table_name' => 'civicrm_group_contact',
          'entity' => 'GroupContact',
          'bao' => 'CRM_Contact_BAO_GroupContact',
          'localizable' => 0,
        ],
        'group_id' => [
          'name' => 'group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group ID'),
          'description' => ts('FK to civicrm_group'),
          'required' => TRUE,
          'table_name' => 'civicrm_group_contact',
          'entity' => 'GroupContact',
          'bao' => 'CRM_Contact_BAO_GroupContact',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Group',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_group',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ]
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID'),
          'description' => ts('FK to civicrm_contact'),
          'required' => TRUE,
          'table_name' => 'civicrm_group_contact',
          'entity' => 'GroupContact',
          'bao' => 'CRM_Contact_BAO_GroupContact',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ],
        'status' => [
          'name' => 'status',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Contact Status'),
          'description' => ts('status of contact relative to membership in group'),
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'table_name' => 'civicrm_group_contact',
          'entity' => 'GroupContact',
          'bao' => 'CRM_Contact_BAO_GroupContact',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::groupContactStatus',
          ]
        ],
        'location_id' => [
          'name' => 'location_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group Contact Location'),
          'description' => ts('Optional location to associate with this membership'),
          'table_name' => 'civicrm_group_contact',
          'entity' => 'GroupContact',
          'bao' => 'CRM_Contact_BAO_GroupContact',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_LocBlock',
        ],
        'email_id' => [
          'name' => 'email_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group Contact Email'),
          'description' => ts('Optional email to associate with this membership'),
          'table_name' => 'civicrm_group_contact',
          'entity' => 'GroupContact',
          'bao' => 'CRM_Contact_BAO_GroupContact',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Email',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'group_contact', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'group_contact', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_contact_group' => [
        'name' => 'UI_contact_group',
        'field' => [
          0 => 'contact_id',
          1 => 'group_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_group_contact::1::contact_id::group_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
