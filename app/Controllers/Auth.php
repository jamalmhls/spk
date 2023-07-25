<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct() 
    {
        helper('form');
    }
    
    public function register () 
    {
        $data = array(
            'title' => 'Register',
        );
        return view('v_register', $data);
    }

    public function save_register()
    {
        if($this->validate([
            'nama_lengkap'=>[
                'label'=>'Nama Lengkap',
                'rules'=>'required',
                'errors'=>[
                    'required'=>'{field} Wajib diisi dan tidak boleh kosong!!!'
                ]
            ],
            'email'=>[
                'label'=>'E-mail',
                'rules'=>'required',
                'errors'=>[
                    'required'=>'{field} Wajib diisi dan tidak boleh kosong!!!'
                ]
            ],
            'no_hp'=>[
                'label'=>'No Handphone',
                'rules'=>'required',
                'errors'=>[
                    'required'=>'{field} Wajib diisi dan tidak boleh kosong!!!'
                ]
            ]
        ])){
            //jika valid
        } else {
        //jika tidak valid
        session()->setFlashdata('errors', \Config\Services::validaton()->getErrors());
        return redirect()->to(base_url('Auth/register'));
    }

    }
}