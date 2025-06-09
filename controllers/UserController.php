	<?php

	require_once __DIR__ . '/../models/UserModel.php';
	require_once __DIR__ . '/../core/Database.php';

	class UserController {
		private $pdo;
		private $userModel;

		public function __construct(){
			$this->pdo = new Database();
			$this->userModel = new UserModel($this->pdo->connection);
		}

		public function handleLogin(){
			$email = $_POST['email'];
			$password = $_POST['password'];

			$user = $this->userModel->findByEmail($email);

			if($user && password_verify($password, $user['password'])){
				session_start();
				$_SESSION['user'] = $user['email'];

				header('Location: ' . basePath('/feed'));
				exit;
			}else{
				header('Location: ' . basePath('/login?login_error=true'));
				exit;
			}
		}

		public function handleRegister(){
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];

			if($password !== $confirm_password){
				header("Location: " . basePath('/register?error_password=Password did not match'));
				exit;
			}

			if($this->userModel->findByEmail($email)){
				header("Location: " . basePath('/register?error_email=true'));
				exit;
			}

			if($this->userModel->findByUsername($username)){
				header("Location: " . basePath('/register?error_username=true'));
				exit;
			}

			$this->userModel->create($username, $email, $password);
			header("Location: " . basePath('/login?registered_success=true'));
			exit;
		}
	}