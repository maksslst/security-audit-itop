<?php

class AuditAgent extends DBObject
{
    public static function OnBeforeQuery(\Combodo\iTop\Service\Events\EventData $oEventData)
    {
        $oFilter = $oEventData->Get('filter');
        if ($oFilter->GetClass() === 'AuditAgent') {
            self::SyncMock();
        }
    }

    public static function SyncMock()
    {
        $agents = [
            ['public_id' => 'a1b2c3d4', 'os_type' => 'linux'],
            ['public_id' => 'e5f6g7h8', 'os_type' => 'windows']
        ];

        foreach ($agents as $agent) {
            $oSearch = DBObjectSearch::FromOQL(
                "SELECT AuditAgent WHERE public_id = :id"
            );

            $oSet = new DBObjectSet(
                $oSearch,
                [],
                ['id' => $agent['public_id']]
            );

            if ($oSet->Count() == 0) {
                $oAgent = MetaModel::NewObject("AuditAgent");
                $oAgent->Set('public_id', $agent['public_id']);
                $oAgent->Set('os_type', $agent['os_type']);
                $oAgent->DBInsert();
            }
        }
    }
}