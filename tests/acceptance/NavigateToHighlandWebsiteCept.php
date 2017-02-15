<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Ensure User can navigate to Highland website');
$I->amOnPage('/');
$I->see('HIGHLAND SOLUTIONS');
$I->see('Platform');
?>
