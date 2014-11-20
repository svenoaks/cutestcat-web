<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 11/19/14
 * Time: 9:32 PM
 */

class UserController extends BaseController {
    public function postLogin()
    {
        $user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );

        if (Auth::attempt($user))
        {
            return array("success" => "true");
        }
        return array("success" => "false");
    }
} 