<?php

function requireAuth(){
	session_start();
	if(!isset($_SESSION['user'])){
		header('Location: ' . basePath('/login'));
		exit;
	}
}

function redirectIfAuthenticated(){
	session_start();
	if(isset($_session['user'])){
		header('location: ' . basepath('/feed'));
		exit;
	}
}