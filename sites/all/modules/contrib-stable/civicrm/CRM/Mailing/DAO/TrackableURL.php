<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from xml/schema/CRM/Mailing/TrackableURL.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:13d0c2db9be0713818bda26731896ae6)
 */

/**
 * Database access object for the TrackableURL entity.
 */
class CRM_Mailing_DAO_TrackableURL extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_mailing_trackable_url';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = FALSE;

  /**
   * @var int unsigned
   */
  public $id;

  /**
   * The URL to be tracked.
   *
   * @var text
   */
  public $url;

  /**
   * FK to the mailing
   *
   * @var int unsigned
   */
  public $mailing_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_mailing_trackable_url';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'mailing_id', 'civicrm_mailing', 'id');
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
          'title' => ts('Trackable URL ID'),
          'required' => TRUE,
          'table_name' => 'civicrm_mailing_trackable_url',
          'entity' => 'TrackableURL',
          'bao' => 'CRM_Mailing_BAO_TrackableURL',
          'localizable' => 0,
        ],
        'url' => [
          'name' => 'url',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Url'),
          'description' => 'The URL to be tracked.',
          'required' => TRUE,
          'table_name' => 'civicrm_mailing_trackable_url',
          'entity' => 'TrackableURL',
          'bao' => 'CRM_Mailing_BAO_TrackableURL',
          'localizable' => 0,
        ],
        'mailing_id' => [
          'name' => 'mailing_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing'),
          'description' => 'FK to the mailing',
          'required' => TRUE,
          'table_name' => 'civicrm_mailing_trackable_url',
          'entity' => 'TrackableURL',
          'bao' => 'CRM_Mailing_BAO_TrackableURL',
          'localizable' => 0,
          'FKClassName' => 'CRM_Mailing_DAO_Mailing',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailing_trackable_url', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailing_trackable_url', $prefix, []);
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
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
