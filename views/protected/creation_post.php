<link rel="stylesheet" href="<?= basePath('/assets/css/creation_post.css') ?>">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@1" />

<main class="main">
	<div class="create-post-header border-b border-gray-300 h-16 flex items-center px-6">
		<a href="<?= basePath('/feed') ?>" class="back-button">
			<span class="material-symbols-outlined">arrow_back_ios</span>
		</a>
		<h2 class="text-2xl font-bold">Create Post</h2>
	</div>
	<form method="POST" action="<?= basePath('/creation-post') ?>" class="content">
		<div class="upload-area relative overflow-hidden" ondrop="dropHandler(event)"
			ondragover="dragOverHandler(event)">
			<label class="drop-zone relative overflow-hidden" for="fileInput">
				<div id="preview" class="absolute w-full h-full overflow-hidden"></div>
				<input type="file" id="fileInput" accept=".jpg,.jpeg,.png" hidden />
				<span class="material-symbols-outlined upload-icon">cloud_upload</span>
				<p class="upload-text">Choose a file or drag and drop<br>it here</p>
				<p class="upload-note">We recommend using high quality .jpeg or .png files less than 20MB</p>
			</label>
			<button class="change-photo" onclick="document.getElementById('fileInput').click()">Change
				photo</button>
		</div>

		<div class="form-area">
			<label for="title">Title</label>
			<input id="title" type="text" placeholder="Add title..">
			<label for="desc">Description</label>
			<textarea id="desc" placeholder="Add a short detailed description"></textarea>
			<label for="tags">Tags / categories (0)</label>
			<input id="tags" type="text" placeholder="Search for a tag or category">
			<button class="publish" type="submit">Publish</button>
		</div>
	</form>
</main>
<script>
	function dropHandler(ev) {
		console.log("File(s) dropped");
		ev.preventDefault();

		const preview = document.getElementById('preview');
		preview.innerHTML = ''; // Clear previous preview

		const files = ev.dataTransfer.items
			? [...ev.dataTransfer.items].filter(item => item.kind === "file").map(item => item.getAsFile())
			: [...ev.dataTransfer.files];

		files.forEach(file => {
			if (file.type.startsWith("image/")) {
				const reader = new FileReader();
				reader.onload = function (e) {
					const img = document.createElement("img");
					img.src = e.target.result;
					img.style.maxWidth = "100%";
					// img.style.maxHeight = "100%";
					img.style.objectFit = "cover";
					preview.appendChild(img);
				};
				reader.readAsDataURL(file);
			} else {
				preview.innerHTML = "<p>Only image files are supported.</p>";
			}
		});
	}

	function dragOverHandler(ev) {
		ev.preventDefault();
		console.log("File(s) in drop zone");
	}

	// Handle manual file selection
	function handleFileInput(input) {
		const file = input.files[0];
		const preview = document.getElementById('preview');
		preview.innerHTML = '';

		if (file && file.type.startsWith("image/")) {
			const reader = new FileReader();
			reader.onload = function (e) {
				const img = document.createElement("img");
				img.src = e.target.result;
				img.style.width = "100%";
				img.style.height = "100%";
				img.style.objectFit = "cover";
				preview.appendChild(img);
			};
			reader.readAsDataURL(file);
		}
	}
</script>