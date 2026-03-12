<?php
Dict::Add('RU RU', 'Russian', 'Русский', array(
    'Menu:AuditConsole' => 'Консоль аудита',
    'Menu:AuditConsole+' => 'Инструменты интеграции с системой аудита',

    'Menu:SyncJobsMenu' => 'Синхронизация организаций',
    'Menu:SyncJobsMenu+' => 'Создание заданий на синхронизацию организаций с системой аудита',

    'Menu:UserSyncJobsMenu' => 'Синхронизация пользователей',
    'Menu:UserSyncJobsMenu+' => 'Создание заданий на синхронизацию внешних пользователей с системой аудита',

    'Class:AuditOrgSyncJob' => 'Синхронизация организаций',
    'Class:AuditOrgSyncJob+' => 'Ручной запуск синхронизации организаций в систему аудита',
    'Class:AuditOrgSyncJob/Attribute:name' => 'Название',
    'Class:AuditOrgSyncJob/Attribute:name+' => 'Произвольное название задания синхронизации',

    'Class:AuditUserSyncJob' => 'Синхронизация пользователей',
    'Class:AuditUserSyncJob+' => 'Ручной запуск синхронизации внешних пользователей в систему аудита',
    'Class:AuditUserSyncJob/Attribute:name' => 'Название',
    'Class:AuditUserSyncJob/Attribute:name+' => 'Произвольное название задания синхронизации',
    'Class:AuditUserSyncJob/Attribute:user' => 'Пользователь',
    'Class:AuditUserSyncJob/Attribute:user+' => 'Внешний пользователь iTop, для которого будет создан аккаунт в системе аудита',

    'Class:AuditAgentToken' => 'Регистрационный токен агента',
    'Class:AuditAgentToken+' => 'Токен регистрации для подключения аудиторских агентов',
    'Class:AuditAgentToken/Attribute:friendly_name' => 'Название токена',
    'Class:AuditAgentToken/Attribute:friendly_name+' => 'Удобочитаемое название токена регистрации',
    'Class:AuditAgentToken/Attribute:ttl_minutes' => 'Время жизни (минуты)',
    'Class:AuditAgentToken/Attribute:ttl_minutes+' => 'Сколько минут действителен токен регистрации',
    'Class:AuditAgentToken/Attribute:expires_at' => 'Истекает',
    'Class:AuditAgentToken/Attribute:expires_at+' => 'Момент истечения срока действия токена',
));