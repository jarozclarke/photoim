<?php

require_once __DIR__ . '/../core/Database.php';

class PostModel
{
	private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function create($user_id, $tag_id, $title, $description, $image_path)
	{
		$query = $this->pdo->prepare('INSERT INTO posts (user_id, tag_id, title, description, image_path) VALUES (?, ?, ?, ?, ?)');
		$query->execute([$user_id, $tag_id, $title, $description, $image_path]);
	}
}

