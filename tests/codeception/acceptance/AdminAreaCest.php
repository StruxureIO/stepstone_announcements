<?php

namespace humhub\modules\stepstone_announcements\codeceptionTest\acceptance;

use humhub\modules\stepstone_announcements\codeceptionTest\AcceptanceTester;

class AdminAreaCest
{

    public function testAdminInfoPage(AcceptanceTester $I)
    {
        $I->wantTo('see admin info page');
        $I->amAdmin();
        $I->amOnRoute(['/stepstone_announcements/admin/index']);
        $I->waitForText('Welcome to the admin only area.');
    }

}
