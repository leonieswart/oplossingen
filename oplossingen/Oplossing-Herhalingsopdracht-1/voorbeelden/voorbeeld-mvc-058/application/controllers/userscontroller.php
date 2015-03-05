<?php

class UsersController extends Controller {

	function view($id = null,$name = null) {

		$this->set('title',$name.' - PHP-uitdieping CMS');
		$this->set('users',$this->User->select($id));

	}

	function viewall() {

		$this->set('title','Alle gebruikers - PHP-uitdieping CMS');
		$this->set('users',$this->User->selectAll());
	}

	function add() {
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string(md5($_POST['password']));

		$this->set('users',$this->User->query('INSERT INTO users (email, 
																	password) 
												VALUES ("' . $email . '", 
														"' . $password . '")'), 1);

		
		header('location: ' . BASEPATH_HARDCODED . 'users/viewall/');
	}

	function delete($id = null) {
		$id = mysql_real_escape_string($id);
		$this->set('title','Gebruiker verwijderd - PHP-uitdieping CMS');
		$this->set('users',$this->User->query('DELETE FROM users 
												WHERE id = \'' . $id . '\''));
		
		echo 'joe';
		header('location: ' . BASEPATH_HARDCODED . 'users/viewall/');
	}

}