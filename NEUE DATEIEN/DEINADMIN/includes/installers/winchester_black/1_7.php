<?php
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '1.7' WHERE configuration_key = 'WINCHESTER_BLACK_VERSION' LIMIT 1;");