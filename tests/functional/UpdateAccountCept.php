<?php 
$I = new FunctionalTester($scenario);

// setup
$I->am('member');
$I->wantTo('log in on the site');

$I->SignIn();
$I->amOnPage('/account');

// actions
$I->fillField('firstname', 'John');
$I->fillField('email', 'johndoe@example.com');
$I->click('submit');

// results
$I->seeCurrentUrlEquals('/account');
$I->see('Your account has been updated');
$I->seeRecord('users', [
	'firstname' => 'John',
	'name'      => 'Bar',
	'email'     => 'johndoe@example.com'
]);

