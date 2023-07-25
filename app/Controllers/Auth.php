<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|valid_email',
                'password' => 'required|min_length[6]|validateUser[email,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password salah!'
                ],
            ];

            if (!$this->validate($rules, $errors)) {
                return view('v_login', [
                    'validation' => $this->validator,
                ]);
            } else {
                $model = new UserModel();
                $user = $model->where('email', $this->request->getVar('email'))->first();

                $this->setUserSession($user);

                // redirect if student
                if ($user['role'] == 'siswa') {
                    return redirect()->to(base_url('home'));
                } else {
                    return redirect()->to(base_url('dashboard'));
                }
            }
        }
        return view('v_login');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'role' => $user['role'],
            'isLoggedIn' => true
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('auth');
    }

    public function register()
    {
        $data = array(
            'title' => 'Register',
        );
        return view('v_register', $data);
    }

    public function save_register()
    {
        if ($this->validate([
            'nama_lengkap' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong!!!'
                ]
            ],
            'email' => [
                'label' => 'E-mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong!!!'
                ]
            ],
            'no_hp' => [
                'label' => 'No Handphone',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong!!!'
                ]
            ]
        ])) {
            //jika valid
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validaton()->getErrors());
            return redirect()->to(base_url('Auth/register'));
        }
    }
}
