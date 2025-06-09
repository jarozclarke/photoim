<?php

require_once __DIR__ . '/../core/Database.php';
require_once __DIR__ . '/../models/PostModel.php';

class PostController
{
	private $pdo;
	private $postModel;

	public function __construct()
	{
		$this->pdo = new Database();
		$this->postModel = new PostModel($this->pdo->connection);
	}

	public function handlePost()
	{
		$user_id = $_SESSION['user_id'];
		$tag_id = $_POST['tag_id'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		$image_path = $_FILES['image']['tmp_name'];
		if (isset($_FILES['image']['error']) && $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
			header('Location: ' . basePath('/creation-post?error=Image upload error'));
			exit;
		}

		if (!$user_id || !$tag_id || !$title || !$image_path) {
			header('Location: ' . basePath('/creation-post?error=Missing required fields'));
			exit;
		}

		if (!move_uploaded_file($image_path, 'uploads/' . basename($_FILES['image']['name']))) {
			header('Location: ' . basePath('/creation-post?error=Failed to upload image'));
			exit;
		}

		$this->postModel->create($user_id, $tag_id, $title, $description, 'uploads/' . basename($_FILES['image']['name']));

		header('Location: ' . basePath('/feed?post_created=true'));
		exit;
	}
}
