<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
        
        $data = [
            'title' => 'Dashboard',
            'user_name' => $session->get('user_name')
        ];
        
        return view('dashboard/index', $data);
    }
}