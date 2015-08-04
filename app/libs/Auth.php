<?php

namespace Libs;

use \Phalcon\Di\Injectable as Injector;
class Auth extends Injector
{

    /**
     * Indicates if the logout method has been called.
     *
     * @var bool
     */
     protected $user;
	protected $loggedOut = false;
	/**
	 * Auth::user() will check the session to see if user is alive on the session if so grabs user id and retrieves user info from the database
	 * If session is not set null is returned.
	 * @parametre  değişklen açıklamaları
	 * @return return User object else null
	 */
	public function user()
	{
		if ($this->loggedOut) {
			return;
		}

          if (! is_null($this->user)) {
			return $this->user;
          }

		if($this->session->has($this->sessionKey()))
		{
			$id = $this->session->get($this->sessionKey());
		}
		else
		{
			$id = null;
		}

		if (! is_null($id)) {
			$this->user = $user = $this->retrieveById($id);
		}
		return $this->user;

	}
	/**
	 * If user is NOT logged into the system return true else false;
	 * @return Guest is true, Loggedin is false
	 */	    
	public function guest()
	{
		return ! $this->check();
	}

	
	/**
	 * authenticate user
	 * @param  array Credentials
	 * @return [void]
	 */
	public function attempt(array $credentials = array())
	{

	}
	/**
	 * Determine if user is authenticated
	 * @return [type]
	 */
	public function check()
	{
		return ! is_null($this->user());
	}

	/**
	 * Log out of the application
	 * @return [type]
	 */
	public function logout()
	{
        $this->user = null;
        $this->loggedOut = true;

        $this->session->destroy();
	}
	/**
	 * Get currently logged user's id
	 * @return id;
	 */
	public function id()
	{
		if($this->session->has($this->sessionKey()))
		{
			return $this->session->get($this->sessionKey());
		} 
		else
		{
			return null;
		}
	}
	/**
	 * log a user into the application
	 * @return [type]
	 */
	private function login($user)
	{
		if($user === false)
			return false;
		$this->regenerateSessionId();
		$this->session->set($this->sessionKey(), $user->id);
	}
	/**
	 * log a user into the application using id
	 * @return [type]
	 */
	public function loginUsingId($id)
	{
		$this->login( $user = $this->retrieveById($id) );

		return $user;
	}

	private function sessionKey()
	{
		return $this->config->session->id;
	}

	public function retrieveById($id)
	{
		return \Kullanici::findFirst($id);
	}

	protected function regenerateSessionId()
	{
		session_regenerate_id(true);
	}
}