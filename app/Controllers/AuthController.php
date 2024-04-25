<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    #fungsi __construct yang isinya adalah pemanggilan helper form. 
    #Pada helper form terdapat fungsi-fungsi yang dapat membantu dalam pembuatan form.
    function __construct()
    {
        helper('form');
    }

    #tambahkan fungsi baru bernama login, untuk memproses data username dan password yang dikirim melalui form login. 
    #Sementara masih pakai data sample statis pada variable $dataUser (belum ambil dari database).
    public function login()
    {
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $dataUser = ['username' => 'divan', 'password' => '18c981cba2b1829a7a4ead836502c9ca', 'role' => 'admin'];

            if ($username == $dataUser['username']) {
                if (md5($password) == $dataUser['password']) {
                    session()->set([
                        'username' => $dataUser['username'],
                        'role' => $dataUser['role'],
                        'isLoggedin' => true
                    ]);

                    return redirect()->to(base_url('/'));
                } else {
                    session()->setFlashdata('failed', 'Username & Password Salah!');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->back();
            }
        } else {
            return view('auth/v_login');
        }
    }
    #note 
    #alurnya, ketika ada data yang dikirim lakukan pengecekan apakah data username yang dikirim dari form cocok dengan data username yang ada. 
    #Jika tidak, arahkan kembali ke form login dan tampilkan pesan 'Username Tidak Ditemukan'. 
    #Jika cocok, lanjutkan dengan pengecekan password. Jika password tidak cocok, arahkan kembali ke form login dan tampilkan pesan 'Username & Password Salah'. 
    #Jika password cocok, set variable session yang sedang berlangsung dengan isi username, password, dan role dari user yang berhasil login, 
    #lalu arahkan tampilan ke halaman utama

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
