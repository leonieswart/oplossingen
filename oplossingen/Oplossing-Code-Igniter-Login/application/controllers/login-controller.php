<?php 

    class Login extends CI_Controller {

        public function inloggen () {

            $date['title'] = "login-formulier";
            $this->input->post();

                $this->load->library('form_validation');

                $this->form_validation->set_rules('email', 'Email', 'required', 'valid_email');
                $this->form_validation->set_rules('password', 'Password', 'required');

                $this->form_validation->run();
            }

                            }
}




?>