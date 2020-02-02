<?php

/**
 * This file registers CiviCRM entities via hook_civicrm_managed.
 * Lifecycle events in this extension will cause these registry records to be
 * automatically inserted, updated, or deleted from the database as appropriate.
 * For more details, see "hook_civicrm_managed" (at
 * https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_managed/) as well
 * as "API and the Art of Installation" (at
 * https://civicrm.org/blogs/totten/api-and-art-installation).
 */

return array (
  array (
    'name' => 'CRM_Namelessutils_ContactType_child',
    'entity' => 'ContactType',
    'params' => array (
      "name" => "Child",
      "label" => "Child",
      "description" => "",
      "parent_id" => "1",
      "is_active" => "1"
    ),
  ),
  array (
    'name' => 'CRM_Namelessutils_ContactType_youth',
    'entity' => 'ContactType',
    'params' => array (
      "name" => "Youth",
      "label" => "Youth",
      "description" => "",
      "parent_id" => "1",
      "is_active" => "1"
    ),
  ),
);
