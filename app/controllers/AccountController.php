<?php

use Boilerplate\Forms\AccountForm;
use Boilerplate\Users\UserUpdateAccountCommand;

class AccountController extends \BaseController {

	/**
	 * @var Boilerplate\Forms\AccountForm
	 */
	private $accountForm;

	/**
	 * @param AccountForm $accountForm
	 */
	function __construct(AccountForm $accountForm)
	{
		$this->accountForm = $accountForm;

		$this->beforeFilter('auth');
	}

	/**
	 * Show the account form
	 *
	 * @return mixed
	 */
	public function create()
	{
		return View::make('account.create');
	}

	/**
	 * TODO Updates a user
	 *
	 * @return mixed
	 */
	public function store()
	{
		// change rules for the unique field
		$this->accountForm->setRules([
			'name'      => 'required',
			'firstname' => 'required',
			'email'     => 'required|email|unique:users,email,' . Auth::user()->id
		]);

		$input = array_add(Input::all(), 'userId', Auth::id());

		// validate form
		// errors are returned through the Application Error Handler in start/global/
		$this->accountForm->validate($input);

		// if valid, user must be updated to the database through the RegisterUserCommand, RegisterUserCommandHandler
		// this line is possible thanks to the CommanderTrait in BaseController
		$user = $this->execute(UserUpdateAccountCommand::class, $input);

		// once user is added
		Flash::message(trans('account.updated'));

		return Redirect::back();
	}
}