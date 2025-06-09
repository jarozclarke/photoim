<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Snappit - Create Post</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@1" />
  <link rel="stylesheet" href="post.css"/>
</head>
<body>
  <header class="header">
    <a href="index.html" class="left link-button">
      <img src="images/logo.png" class="logo" alt="Logo" />
      <h1 class="brand">Snappit</h1>
    </a>
    <div class="right">
      <span class="material-symbols-outlined filled notifications-icon">notifications</span>
      <a href="/home" class="left link-button">
        <span class="username">Lhanz Hubilla</span>
        <img src="images/avatar.png" class="avatar" alt="Avatar"/>
      </a>
    </div>
  </header>

    <main class="main">
      <div class="create-post-header">
        <a href="/home" class="back-button">
          <span class="material-symbols-outlined">arrow_back_ios</span>
        </a>
        <h2>Create Post</h2>
      </div>

    <section class="content">
      <div class="upload-area">
        <label class="drop-zone" for="fileInput">
          <input type="file" id="fileInput" accept=".jpg,.jpeg,.png" hidden />
          <span class="material-symbols-outlined upload-icon">cloud_upload</span>
          <p class="upload-text">Choose a file or drag and drop<br>it here</p>
          <p class="upload-note">We recommend using high quality .jpeg or .png files less than 20MB</p>
        </label>
        <button class="change-photo" onclick="document.getElementById('fileInput').click()">Change photo</button>
      </div>

      <div class="form-area">
        <label for="title">Title</label>
        <input id="title" type="text" placeholder="Add title..">
        <label for="desc">Description</label>
        <textarea id="desc" placeholder="Add a short detailed description"></textarea>
        <label for="tags">Tags / categories (0)</label>
        <input id="tags" type="text" placeholder="Search for a tag or category">
        <button class="publish">Publish</button>
      </div>
    </section>
  </main>

</body>
</html>
