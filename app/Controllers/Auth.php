<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('login', $data);
    }
    
    public function doLogin()
    {
        $session = session();
        $model = new UserModel();
        
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $user = $model->getUserByEmail($email);
        
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $ses_data = [
                    'user_id' => $user['id'],
                    'user_name' => $user['name'],
                    'user_email' => $user['email'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Password Salah.');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email Tidak Ada.');
            return redirect()->to('/login');
        }
         if ($user && password_verify($password, $user['password'])) {
        $ses_data = [];
        $session->set($ses_data);
        print_r(session()->get());
        die();
        
        return redirect()->to('/dashboard');
    }
    }
    
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}