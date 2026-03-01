ALTER TABLE `priv_sync_att_linkset` CHANGE `attribute_qualifier` `attribute_qualifier` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '\''
ALTER TABLE `audit_agent_token` ADD `expires_at` DATETIME, CHANGE `status` `status` ENUM('ACTIVE','EXPIRED','USED','new') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'active'
