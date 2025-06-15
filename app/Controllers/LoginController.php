<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login/index');
    }

    public function login()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'user_id'       => $user['id'],
                    'username'      => $user['username'],
                    'nama_lengkap'  => $user['nama_lengkap'],
                    'role'          => $user['role'],
                    'logged_in'     => true,
                ]);
                return redirect()->to(base_url(''));
            } else {
                return redirect()->back()->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}