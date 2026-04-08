<?php
SetupWebPage::AddModule(
    __FILE__,
    'audit-console/1.0.0',
    array(
        'label' => 'Audit Console',
        'category' => 'business',
        'dependencies' => array(
            'itop-config-mgmt/3.0.0',
            'itop-attachments/3.0.0',
        ),
        'mandatory' => false,
        'visible' => true,
        'installer' => 'AuditSystemInstaller',
        'datamodel' => array(
            'datamodel.audit-console.xml'
        ),
        'model' => array(),
        'data.struct' => array(),
        'data.sample' => array(),
        'doc.manual_setup' => '',
        'doc.more_information' => ''
    )
);

if (!class_exists('AuditSystemInstaller')) {
    class AuditSystemInstaller extends ModuleInstallerAPI
    {
        public static function BeforeWritingConfig(Config $oConfiguration)
        {
            $aAllowed = $oConfiguration->GetModuleSetting('itop-attachments', 'allowed_classes', array('Ticket'));
            if (!is_array($aAllowed)) {
                $aAllowed = array('Ticket');
            }
            if (!in_array('CustomAudit', $aAllowed, true)) {
                $aAllowed[] = 'CustomAudit';
                $oConfiguration->SetModuleSetting('itop-attachments', 'allowed_classes', $aAllowed);
            }

            return $oConfiguration;
        }
    }
}