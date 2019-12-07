<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct() //method default yang selalu dijalankan
    {
        parent::__construct(); //memanggil method construct yg ada di CI_Controller
        $this->load->library('form_validation'); /*memanggil library form validation */
        $this->load->model('My_model');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        /*rules form validation*/
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) { //memanggil method run
            $data['title'] = 'KKP User Login';
            $this->load->view('templates/header', $data); //memanggil templates header
            $this->load->view('auth/login', $data); //memanggil view login
            $this->load->view('templates/auth_footer'); //memanggil templates header
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        // $data = array(
        //     'username' => $this->input->post('username', TRUE),
        //     'password' => md5($this->input->post('password', TRUE))
        // );
        // $hasil = $this->My_model->masuk($data);
        // if ($hasil->num_rows() == 1) {
        //     foreach ($hasil->result() as $sess) {
        //         $sess_data['logged_in'] = 'Sudah Login';
        //         $sess_data['id_admin'] = $sess->id_admin;
        //         $sess_data['nama_admin'] = $sess->nama_admin;
        //         $this->session->set_userdata($sess_data);
        //     }
        //     $data = array(
        //         'last_login' => date('d/m/Y - h:i:s'),
        //     );
        //     $this->db->update('admin', $data, array('id_admin' => $sess->id_admin));
        //     $sess_data2['last_login'] = $sess->last_login;
        //     $this->session->set_userdata($sess_data2);
        //     redirect('user');
        // }
        // $this->session->set_flashdata(
        //     'message',
        //     '<div class="alert alert-danger text-center"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Username & Password Salah</div>'
        // );
        // redirect('auth');

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        //jika user ada
        if ($user) {
            //jika user aktif
            if ($user['aktif'] == 1) {
                //cek passwordnya
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'username' => $user['username'],
                        // 'nama_user' => $user['nama_user']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }

    public function daftar()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tglLahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('nohp', 'Nomor Hp', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'This username has already registered!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Buat Akun';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/daftar');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email', true);
            $username = $this->input->post('username', true);
            $data = [
                'nama_user' => htmlspecialchars($this->input->post('nama', true)), //true u/ menghindari cross side scripting/xxs
                'username' => htmlspecialchars($username),
                'email' => htmlspecialchars($email), //htmlspecialchars untuk mensanitasi
                'foto' => 'foto.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jk', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempatLahir', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tglLahir', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'no_hp' => htmlspecialchars($this->input->post('nohp', true)),
                'aktif' => 0,
                'tanggal_daftar' => time()
            ];

            //siapkan token
            $token = base64_encode(random_bytes(32)); //encode utk konversi karakter. 
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user', $data); //menginsert $data ke database
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been created. Please check your email to activated your account!</div>');
            redirect('auth');
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'novinurkhaeni.1@gmail.com',
            'smtp_pass' => 'aduhlupanih',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        // $this->load->library('email', $config);
        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('novinurkhaeni.1@gmail.com', 'Satelit Imagery Catalog');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('Click this link to verify your account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            // $this->load->model('Menu_model', 'menu');

            // $user_token[] = $this->menu->getToken();

            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('aktif', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' has been activated! Please login</div>');
                    redirect('auth');
                } else {

                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Token expired.</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong token.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong email.</div>');
            redirect('auth');
        }
    }

    public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Lupa Password';
            $this->load->view('templates/header', $data); //memanggil templates header
            $this->load->view('auth/lupa_password'); //memanggil view login
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email, 'aktif' => 1])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Please check your email to reset your password!</div>');
                redirect('auth/forgotpassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered or activated!</div>');
                redirect('auth/forgotpassword');
            }
        }
    }

    public function resetPassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->ubahPassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong token.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong email.</div>');
            redirect('auth');
        }
    }

    public function ubahPassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('auth');
        }

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Ubah Password';
            $this->load->view('templates/header', $data); //memanggil templates header
            $this->load->view('auth/ubah_password'); //memanggil view login
            $this->load->view('templates/auth_footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your password has been changed. Please login!</div>');
            redirect('auth');
        }
    }

    // public function recaptcha()
    // {
    //     // load from spark tool
    //     // $this->load->spark('recaptcha-library/1.0.1');
    //     // load from CI library
    //     $this->load->library('recaptcha');
    //     $recaptcha = $this->input->post('g-recaptcha-response');
    //     if (!empty($recaptcha)) {
    //         $response = $this->recaptcha->verifyResponse($recaptcha);
    //         if (isset($response['success']) and $response['success'] === true) {
    //             echo "You got it!";
    //         }
    //     }
    //     $data = array(
    //         'widget' => $this->recaptcha->getWidget(),
    //         'script' => $this->recaptcha->getScriptTag(),
    //     );
    //     $this->load->view('auth/recaptcha', $data);
    // }

    public function keluar()
    {
        $this->session->sess_destroy();
        redirect('welcome');
    }

    public function blocked()
    {
        $data['title'] = 'Access blocked';
        $this->load->view('templates/header', $data);
        $this->load->view('auth/blocked');
        $this->load->view('templates/auth_footer');
    }

    public function lupapassword()
    {
        $data['title'] = 'Lupa Password';
        $this->load->view('templates/header', $data); //memanggil templates header
        $this->load->view('auth/lupapassword', $data); //memanggil view daftar
        $this->load->view('templates/auth_footer'); //memanggil templates footer
    }
}
