<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>-CCGR-</title>
  <link rel="stylesheet" href="stylee.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CCGR</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="data.php">
                  Learning
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="../log.php">
                  Logout
                </a>
              </li>
            
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

<main class="bmain">
<div class="leftcont">
</div>
<div class="centercont">
<div class="headcentercont">
<div class="avatar">
  <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
</div>
<div class="start_new_post">
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">New Post</button>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">New Post</h1>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="message-text" class="col-form-label"> Discription: </label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
            <form action="/action_page.php">
              <label for="img">Select image:</label>
              <input type="file" id="img" name="img" accept="image/*">
            </form>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Post</button>
        </div>
      </div>
    </div>
  </div>
</div>

</div>



<hr class="borderborder-primary border-2 opacity-50">
<div class="bodycentercont">  
  <div class="postcont">
    <div class="post">
      <div class="divpost">
        <div>
          <img class="fpost" src="OIP.jpeg" alt="">
        </div>
        <div>
          <h8>#india  .following<br>3d • Post from Amit kumar Agrawal</h8>
        </div>
      </div>
      <hr class="borderborder">
      <p>Change your self before life changes...</p>
      <img class="pppost" src="Screenshot 2023-04-26 235853.png" alt="">
      <div class="bg-white">
        <div class="d-flex flex-row fs-12">
            <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
            <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
            <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
        </div>
    </div>
    <div class="bg-light p-2">
        <div class="d-flex flex-row align-items-start"><textarea class="form-control ml-1 shadow-none textarea"></textarea></div>
        <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="button">Post comment</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button></div>
    </div>
    </div>
    
  </div>
</div>



<hr class="borderborder-primary border-2 opacity-50">
<div class="bodycentercont">  
  <div class="postcont">
    <div class="post">
      <div class="divpost">
        <div>
          <img class="fpost" src="IMG20210621191045.jpg" alt="">
        </div>
        <div>
          <h8>#india  .following<br>3d • Post from Rahul Gupta</h8>
        </div>
      </div>
      <hr class="borderborder">
      <p>Stoks...</p>
      <img class="pppost" src="Screenshot 2023-04-27 132356.png" alt="">
      <div class="bg-white">
        <div class="d-flex flex-row fs-12">
            <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
            <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
            <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
        </div>
    </div>
    <div class="bg-light p-2">
        <div class="d-flex flex-row align-items-start"><textarea class="form-control ml-1 shadow-none textarea"></textarea></div>
        <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="button">Post comment</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button></div>
    </div>
    </div>
    
  </div>
</div>



<hr class="borderborder-primary border-2 opacity-50">
<div class="bodycentercont">  
  <div class="postcont">
    <div class="post">
      <div class="divpost">
        <div>
          <img class="fpost" src="I am Hacker.jpg" alt="">
        </div>
        <div>
          <h8>#india  .following<br>3d • Post from Raja</h8>
        </div>
      </div>
      <hr class="borderborder">
      <p>SQLInjection...</p>
      <img class="pppost" src="SQLInjection.jpg" alt="">
      <div class="bg-white">
        <div class="d-flex flex-row fs-12">
            <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
            <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
            <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
        </div>
    </div>
    <div class="bg-light p-2">
        <div class="d-flex flex-row align-items-start"><textarea class="form-control ml-1 shadow-none textarea"></textarea></div>
        <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="button">Post comment</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button></div>
    </div>
    </div>
    
  </div>
</div>



<hr class="borderborder-primary border-2 opacity-50">

</div>

<div class="rightcont">

</div>
  </main>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>About Us</h3>
          <p>CCGR is a platform for learning and teaching online. We provide a wide range of courses for students of all
            ages. We also provide a platform for teachers to teach online and earn money.</p>
        </div>
        <div class="col-md-3">
          <h3>Links</h3>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>Follow Us</h3>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">LinkedIn</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>