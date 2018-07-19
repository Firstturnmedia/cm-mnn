<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from xml/schema/CRM/Member/MembershipStatus.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:ea7435287a239f4851dd354150980069)
 */

/**
 * Database access object for the MembershipStatus entity.
 */
class CRM_Member_DAO_MembershipStatus extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_membership_status';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Membership Id
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Name for Membership Status
   *
   * @var string
   */
  public $name;

  /**
   * Label for Membership Status
   *
   * @var string
   */
  public $label;

  /**
   * Event when this status starts.
   *
   * @var string
   */
  public $start_event;

  /**
   * Unit used for adjusting from start_event.
   *
   * @var string
   */
  public $start_event_adjust_unit;

  /**
   * Status range begins this many units from start_event.
   *
   * @var int
   */
  public $start_event_adjust_interval;

  /**
   * Event after which this status ends.
   *
   * @var string
   */
  public $end_event;

  /**
   * Unit used for adjusting from the ending event.
   *
   * @var string
   */
  public $end_event_adjust_unit;

  /**
   * Status range ends this many units from end_event.
   *
   * @var int
   */
  public $end_event_adjust_interval;

  /**
   * Does this status aggregate to current members (e.g. New, Renewed, Grace might all be TRUE... while Unrenewed, Lapsed, Inactive would be FALSE).
   *
   * @var boolean
   */
  public $is_current_member;

  /**
   * Is this status for admin/manual assignment only.
   *
   * @var boolean
   */
  public $is_admin;

  /**
   * @var int
   */
  public $weight;

  /**
   * Assign this status to a membership record if no other status match is found.
   *
   * @var boolean
   */
  public $is_default;

  /**
   * Is this membership_status enabled.
   *
   * @var boolean
   */
  public $is_active;

  /**
   * Is this membership_status reserved.
   *
   * @var boolean
   */
  public $is_reserved;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_membership_status';
    parent::__construct();
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
          'title' => ts('Membership Status ID'),
          'description' => 'Membership Id',
          'required' => TRUE,
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
        ],
        'membership_status' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Status'),
          'description' => 'Name for Membership Status',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_membership_status.name',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => TRUE,
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
        ],
        'label' => [
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Label'),
          'description' => 'Label for Membership Status',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 1,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'start_event' => [
          'name' => 'start_event',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Start Event'),
          'description' => 'Event when this status starts.',
          'maxlength' => 12,
          'size' => CRM_Utils_Type::TWELVE,
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::eventDate',
          ]
        ],
        'start_event_adjust_unit' => [
          'name' => 'start_event_adjust_unit',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Start Event Adjust Unit'),
          'description' => 'Unit used for adjusting from start_event.',
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::unitList',
          ]
        ],
        'start_event_adjust_interval' => [
          'name' => 'start_event_adjust_interval',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Start Event Adjust Interval'),
          'description' => 'Status range begins this many units from start_event.',
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
        ],
        'end_event' => [
          'name' => 'end_event',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('End Event'),
          'description' => 'Event after which this status ends.',
          'maxlength' => 12,
          'size' => CRM_Utils_Type::TWELVE,
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::eventDate',
          ]
        ],
        'end_event_adjust_unit' => [
          'name' => 'end_event_adjust_unit',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('End Event Adjust Unit'),
          'description' => 'Unit used for adjusting from the ending event.',
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::unitList',
          ]
        ],
        'end_event_adjust_interval' => [
          'name' => 'end_event_adjust_interval',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('End Event Adjust Interval'),
          'description' => 'Status range ends this many units from end_event.',
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
        ],
        'is_current_member' => [
          'name' => 'is_current_member',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Current Membership?'),
          'description' => 'Does this status aggregate to current members (e.g. New, Renewed, Grace might all be TRUE... while Unrenewed, Lapsed, Inactive would be FALSE).',
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
        ],
        'is_admin' => [
          'name' => 'is_admin',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Administrator Only?'),
          'description' => 'Is this status for admin/manual assignment only.',
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
        ],
        'weight' => [
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order'),
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
        ],
        'is_default' => [
          'name' => 'is_default',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Default Status?'),
          'description' => 'Assign this status to a membership record if no other status match is found.',
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Active'),
          'description' => 'Is this membership_status enabled.',
          'default' => '1',
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
        ],
        'is_reserved' => [
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Reserved'),
          'description' => 'Is this membership_status reserved.',
          'table_name' => 'civicrm_membership_status',
          'entity' => 'MembershipStatus',
          'bao' => 'CRM_Member_BAO_MembershipStatus',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
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
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'membership_status', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'membership_status', $prefix, []);
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
