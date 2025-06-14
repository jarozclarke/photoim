<!-- <header class="header">
    <div class="logo"><img src="design/photos/Logo.png" alt="" class="logo"></div>
    <div class="title">Snappit</div>
    <div class="new-post-button">
        <div class="icon"><span class="material-symbols-outlined icon-small">add</span></div>
        <div class="text">New Post</div>
    </div>
    <div class="user-info">
        <div class="menu-icon"><span class="material-symbols-outlined icon-big">notifications</span></div>
        <div class="username">Lhanz Hubilla</div>
        <img class="profile-pic-small" src="design/photos/user_profile.jpg" alt="Profile Pic Small">
    </div>
</header> -->
<div class="cover-photo-container">
    <img class="cover-photo" src="design/photos/cover2.webp" alt="Cover Photo">
</div>
<main class="profile-content">
    <div class="profile-picture-wrapper">
     
        <img class="profile-picture" src="design/photos/user_profile.jpg" alt="Profile Picture">
    </div>

    <div class="profile-details">
        <div class="profile-view">
            <h1>Rainiel H. Maranan</h1>
            <p>Currently studying BSIT</p>
            <p>Living in Cavite</p>
        </div>
       
        <button class="edit-profile-button" class="btn" onclick="my_modal_2.showModal()"> 
            <div class="edit-icon"><span class="material-symbols-outlined">edit</span></div>
            <span>Edit Button</button>
            <dialog id="my_modal_2" class="modal">
            <div class="modal-box">
                <h3 class="text-lg font-bold">Hello!</h3>
                <p class="py-4">PANO NA YUNG SUNOD</p>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
            </dialog>
        </button>
    </div>

    <nav class="profile-nav">
        <div>Post</div>
        <div>Pins</div>
        <div>About</div>
    </nav>

    <hr class="divider">

    <section class="posts">
        <div class="post">
            <img src="design/photos/post1.webp" alt="Post Image">
            <div class="caption-details">
                <div class="caption-text">
                    <div class="caption">My brother died IJBOL</div>
                    <div class="tags">#Deadge #LOL #2Gether4Ever</div>
                </div>
                
                <div class="likes">
                    <div class="like-icon"><span class="material-symbols-outlined">favorite</span></div>
                    <span>4.3k</span>
                </div>
            </div>
        </div>

        <div class="post">
            <img src="design/photos/user_profile.jpg" alt="Post Image">
            <div class="caption-details">
                <div class="caption-text">
                    <div class="caption">New profile pic</div>
                    <div class="tags">#Pfp #pics</div>
                </div>
                
                <div class="likes">
                    <div class="like-icon"><span class="material-symbols-outlined">favorite</span></div>
                    <span>4.3k</span>
                </div>
            </div>
        </div>
    </section>
</main>