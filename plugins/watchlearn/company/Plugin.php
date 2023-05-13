<?php namespace Watchlearn\Company;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Watchlearn\Company\Components\BranchForm' => 'branchform',
            'Watchlearn\Company\Components\CompanyForm' => 'companyform',
            'Watchlearn\Company\Components\ClerkForm' => 'clerkform',
            'Watchlearn\Company\Components\LedgerForm' => 'ledgerform'
        ];

    }

    public function registerSettings()
    {
    }
}
