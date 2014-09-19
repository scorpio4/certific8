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
        private $_id;
        const ERROR_USERNAME_NOT_ACTIVE = 3;
	public function authenticate() {
            $user = User::model()->findByAttributes(array('email' => $this->username));
            if ($user === null) {
                $this->errorCode = self::ERROR_USERNAME_INVALID;
            } else if ($user && !CPasswordHelper::verifyPassword($this->password, $user->password_sha256)) {
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            } elseif ($user->is_registered == 0){
                $this->errorCode = self::ERROR_USERNAME_NOT_ACTIVE;
            } else {
                $this->errorCode = self::ERROR_NONE;
                $this->_id = $user->id;
                $role = '';
                $userRole = UserRole::model()->findByAttributes(array('user_id' => $user->id));
                if(isset($userRole->role)) {
                    $role = strtolower($userRole->role->name);
                }
                $this->setState('role', $role);  
            }
            return $this->errorCode;
        }
        
        public function getId() {
            return $this->_id;
        }
        public function setUser($user_id) {
          $this->_id=$user_id;
        }
}