<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<title>
		<?= $title ?? 'Photoim' ?>		
	</title>
</head>
<body class="min-h-screen bg-[#1e1e1e] text-gray-200">
	<div class="navbar bg-transparent shadow-sm p-5">
	  <div class="flex-1">
	    <a class="btn btn-ghost text-xl">SnapIT</a>
	  </div>
	  <div class="flex gap-2">
	    <input type="text" placeholder="Search" class="input input-bordered w-24 bg-transparent md:w-auto" />
	    <a
	    	href="<?= basePath('/login') ?>"
	    	class="btn btn-default shadow-none border-none"
	    	>
	    		Sign In
	    </a>
	    <a
	    	href="<?= basePath('/register') ?>"
	    	class="btn btn-primary shadow-none border-none">
	    		Sign Up
	    </a>
	  </div>
	</div>
	<?= $content ?> 
</body>
</html>