ALTER TABLE `priv_sync_att_linkset` CHANGE `attribute_qualifier` `attribute_qualifier` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '\''
ALTER TABLE `audit_agent` CHANGE `os_type` `os_type` ENUM('LINUX','UNKNOWN','WINDOWS') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
ALTER TABLE `audit_agent_token` ADD `ttl_minutes` INT(11) DEFAULT 15
