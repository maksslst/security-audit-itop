CREATE TABLE `audit_agent` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `public_id` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', `os_type` ENUM('LINUX','UNKNOWN','WINDOWS') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'unknown') ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
CREATE TABLE `audit_agent_token` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `registration_token` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', `expires_in_minutes` INT(11)) ENGINE = innodb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
ALTER TABLE `priv_trigger_onobject` CHANGE `target_class` `target_class` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'ApplicationSolution'
ALTER TABLE `priv_sync_datasource` CHANGE `scope_class` `scope_class` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'lnkTriggerAction'
ALTER TABLE `priv_sync_att_linkset` CHANGE `attribute_qualifier` `attribute_qualifier` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '\''
ALTER TABLE `audit` ADD `agent_id` INT(11) DEFAULT 0
ALTER TABLE `audit` ADD INDEX `agent_id` (`agent_id`)
