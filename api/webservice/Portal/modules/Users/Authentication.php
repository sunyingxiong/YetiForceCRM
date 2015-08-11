<?php

/**
 * Users authentication action class
 * @package YetiForce.WebserviceAction
 * @license licenses/License.html
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class API_Users_Authentication extends BaseAction
{

	protected $requestMethod = 'POST';

	public function authentication($email, $password)
	{
		//throw new APIException('Błedne dane dostępowe');

		return [
			'logged' => false,
			'id' => 111,
			'fullName' => 'Mariusz Krzaczkowski',
			'email' => 'm.krzaczkowski@yetiforce.com',
			'lastLoginTime' => 'xx',
			'supportStartDate' => 'xx',
			'supportEndDate' => 'xx',
		];
	}
}
