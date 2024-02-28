<?php

namespace App\Controllers;

    class UserController extends BaseController
    {
        public function index()
        {
            return view('welcome_message');
        }
        public function addUser()
        {
            return view('users/add');
        }
        public function deleteUser()
        {
            return view('users/delete');
        }
        public function editUser()
        {
            return view('users/edit');
        }
        public function listUser()
        {
            return view('users/list');
        }
        public function viewUser()
        {
            return view('users/view');
        }
}