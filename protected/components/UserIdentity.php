<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users=array(
			// username => password
			//'demo'=>'demo',
			'admin'=>'b!nc0m@dm!n',
           'Cynthia_Onwumah'=>'wtfkb',
            'Yetunde_Taiwo'=>'asdfg',
            'Bukola_Taiwo'=>'zxcvb',
           'Tobi_Aroyewun'=>'poiuy',
            'Blessing_Adebanjo'=>'lkjhg',
            'Isaac_Fasoyin'=>'mnbvc',
            'Rosemary_Omiwale'=>'qazxc',
            'Susan_Amadi'=>'plmnb',
            'office_test'=>'@3b!sp@ss',
			//'Kalu_Ifeanyi'=>'n3wp@ss',
			'Felix_Ogbonna'=>'b0lix',
			'Peace_Nyah'=>'M3P@$$',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}