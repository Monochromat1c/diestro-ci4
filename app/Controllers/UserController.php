<?php

namespace App\Controllers;

use App\Models\GenderModel;
use App\Models\UserModel;

    class UserController extends BaseController
    {

        public function index()
        {
            return view('welcome_message');
        }
        public function addUser()
        {
            // Declare array for data variables
            // Declare helper form for set value in form
            $data = array();
            helper(['form']);

            //
            if($this->request->getMethod() == 'post'){
                //
                $post = $this->request->getPost(['first_name', 'middle_name', 'last_name', 'age', 'gender_id', 'email', 'password']);

                //
                $rules = [
                    'first_name'=> ['label' => 'first_name', 'rules' => 'required'],
                    'middle_name'=> ['label' => 'middle_name', 'rules' => 'permit_empty'],
                    'last_name'=> ['label' => 'last_name', 'rules' => 'required'],
                    'age'=> ['label' => 'age', 'rules' => 'required|numeric'],
                    'gender_id'=> ['label' => 'gender_id', 'rules' => 'required'],
                    'email'=> ['label' => 'email', 'rules' => 'required|valid_email|is_unique[users.email]'],
                    'password'=> ['label' => 'password', 'rules' => 'required'],
                    'confirm_password'=> ['label' => 'confirm_password', 'rules' => 'required_with[password]|matches[password]']
                ];

                //
                if(! $this->validate($rules)) {
                    $data['validation'] = $this->validator;
                }   else {
                    //
                    $post['password'] = sha1($post['password']);

                    //
                    $userModel = new UserModel();
                    $userModel->save($post);

                    $session = session();
                    $session->setFlashdata('success_save_user', 'User successfully saved!');

                    return redirect('/users/add');
                }
            }

            // Call model gender
            $genderModel = new GenderModel();

            // Fetch all genders value from genders table in database
            $data['genders'] = $genderModel->findAll();


            // Return to add user module with genders value from genders table in database
            return view('users/add', $data);
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