<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Auth0IndexController extends Controller
{
  /**
    * Redirect to the Auth0 hosted login page
    *
    * @return mixed
    */
  public function login()
  {
    $authorize_params = [
      'scope' => 'openid profile email',
      // Use the key below to get an access token for your API.
      // 'audience' => config('laravel-auth0.api_identifier'),
    ];
    return \App::make('auth0')->login(null, null, $authorize_params);
  }

  /**
    * Log out of Auth0
    *
    * @return mixed
    */
  public function logout()
  {
    \Auth::logout();
    $logoutUrl = sprintf(
      'https://%s/v2/logout?client_id=%s&returnTo=%s',
      env('AUTH0_DOMAIN'),
      env('AUTH0_CLIENT_ID'),
      env('APP_URL'));
    return  \Redirect::intended($logoutUrl);
  }
}