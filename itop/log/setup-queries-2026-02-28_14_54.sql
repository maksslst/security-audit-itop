ALTER TABLE `priv_trigger_onobject` CHANGE `target_class` `target_class` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'ApplicationSolution'
ALTER TABLE `priv_sync_datasource` CHANGE `scope_class` `scope_class` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'lnkTriggerAction'
ALTER TABLE `priv_sync_att_linkset` CHANGE `attribute_qualifier` `attribute_qualifier` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '\''
