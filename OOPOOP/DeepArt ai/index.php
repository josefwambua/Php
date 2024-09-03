<!DOCTYPE html>
<html lang="en">
<head>
<title>Deep Art AI </title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<a>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DeepArt AI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#nature">Nature</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#Architecture">Architecture</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#Travel">Travel</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
    </div>
  </div>
</nav>
<!-- end of navbar -->

<!-- carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/nature3.jpg" class="d-block w-100" alt="Soul">
      <div class="carousel-caption d-none d-md-block">
        <h5>Soul</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img2.png" class="d-block w-100" alt="Architecture">
      <div class="carousel-caption d-none d-md-block">
        <h5>Architecture</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img4.png" class="d-block w-100" alt="Nature">
      <div class="carousel-caption d-none d-md-block">
        <h5>Travel</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End of carousel -->

<!-- Sections -->
<a id="nature">
<section class="my-4">
    <div class="container">
        <h2 class="text-center mb-4">Nature</h2>
        
        <div class="card-group">
            <div class="card border-0 p-0">
                <img src="Images/nature1.png" class="card-img-top img-cascade" alt="Nature Landscape">
                <div class="card-body">
                    <h5 class="card-title">Mountain Serenity</h5>
                    <p class="card-text">A tranquil mountain landscape captured through AI-generated art.</p>
                    <p class="card-text"><small class="text-muted">Created using Deep Art AI</small></p>
                </div>
            </div>
            
            <div class="card border-0 p-0">
                <img src="Images/nature2.png" class="card-img-top img-cascade" alt="Nature Wildlife">
                <div class="card-body">
                    <h5 class="card-title">Savannah Majesty</h5>
                    <p class="card-text">An AI-generated depiction of a majestic elephant roaming the savannah.</p>
                    <p class="card-text"><small class="text-muted">Inspired by African wildlife</small></p>
                </div>
            </div>
            
            <div class="card border-0 p-0">
                <img src="Images/nature3.png" class="card-img-top img-cascade" alt="Nature Botanical">
                <div class="card-body">
                    <h5 class="card-title">Orchid Bloom</h5>
                    <p class="card-text">A delicate orchid bloom captured in intricate AI-generated detail.</p>
                    <p class="card-text"><small class="text-muted">Botanical art meets AI technology</small></p>
                </div>
            </div>
        </div>
        
        <a href="#" class="btn btn-primary btn-lg mt-4 mx-auto d-block">Explore Nature Art</a>
    </div>
</section>
</a>



<a id="architecture">
<section class="my-4">
    <div class="container">
        <h2 class="text-center mb-4">Architecture</h2>
        
        <div class="card-group">
            <div class="card border-0 p-0">
                <img src="Images/city1.png" class="card-img-top img-cascade" alt="Cityscape">
                <div class="card-body">
                    <h5 class="card-title">Urban Marvel</h5>
                    <p class="card-text">A bustling metropolis captured through AI-generated art.</p>
                    <p class="card-text"><small class="text-muted">Created using Deep Art AI</small></p>
                </div>
            </div>
            
            <div class="card border-0 p-0">
                <img src="Images/arch2.png" class="card-img-top img-cascade" alt="Architectural Detail">
                <div class="card-body">
                    <h5 class="card-title">Architectural Detail</h5>
                    <p class="card-text">A close-up view of intricate architectural design.</p>
                    <p class="card-text"><small class="text-muted">Inspired by modern architecture</small></p>
                </div>
            </div>
            
            <div class="card border-0 p-0">
                <img src="Images/city1.png" class="card-img-top img-cascade" alt="Cityscape">
                <div class="card-body">
                    <h5 class="card-title">Skyscraper Landscape</h5>
                    <p class="card-text">A futuristic cityscape captured in AI-generated art.</p>
                    <p class="card-text"><small class="text-muted">Urban landscape meets AI technology</small></p>
                </div>
            </div>
        </div>
        
        <a href="#" class="btn btn-primary btn-lg mt-4 mx-auto d-block">Explore Architecture Art</a>
    </div>
</section>
</a>




<section id="travel" class="my-4">
    <div class="container">
        <h2 class="text-center mb-4">Travel</h2>
        
        <div class="card-group">
            <div class="card border-0 p-0">
                <img src="Images/travel1.jpg" class="card-img-top img-cascade" alt="Beach Landscape">
                <div class="card-body">
                    <h5 class="card-title">Beach Paradise</h5>
                    <p class="card-text">A serene beach landscape captured through AI-generated art.</p>
                    <p class="card-text"><small class="text-muted">Inspired by tropical destinations</small></p>
                </div>
            </div>
            
            <div class="card border-0 p-0">
                <img src="Images/travel2.jpg" class="card-img-top img-cascade" alt="Mountain Range">
                <div class="card-body">
                    <h5 class="card-title">Mountain Retreat</h5>
                    <p class="card-text">A majestic mountain range captured in AI-generated art.</p>
                    <p class="card-text"><small class="text-muted">Featuring dramatic landscapes</small></p>
                </div>
            </div>
            
            <div class="card border-0 p-0">
                <img src="Images/travel3.jpg" class="card-img-top img-cascade" alt="Cityscape at Night">
                <div class="card-body">
                    <h5 class="card-title">Urban Nightscape</h5>
                    <p class="card-text">A vibrant cityscape illuminated at night, captured through AI technology.</p>
                    <p class="card-text"><small class="text-muted">Combining architecture and urban life</small></p>
                </div>
            </div>
        </div>
        
        <a href="#" class="btn btn-primary btn-lg mt-4 mx-auto d-block">Explore Travel Art</a>
    </div>
</section>


<!-- 
<a id="Travel">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Travel</h2>
        <div>
            Placing the images in a row
            <div class="container-fluid">
                row div
                <div class="row">

        <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/@blackpoPe.png" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/img2.png" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/img3.png" class="img-fluid pb-3">
        </div>
        </div>
        </div>
    </div>
</section>
</a> -->
<!-- contact section -->

<a id="contact">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Contact Us</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="about.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name"/>

                    </div>
                    <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email"/>
                    
                    </div>
                    <div class="form-group">
                    <label>Number</label>
                    <input type="text" class="form-control" name="number"/>
                    
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
</section>
</a>
<!-- About section -->
<a id="about">
<section  class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">About Us</h2>
        
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-4">Our Journey in AI-Powered Image Creation</h3>
                <p>At bLackpOpE Inc, we specialize in harnessing the power of PHP and advanced prompt engineering techniques to create stunning, AI-generated images. Our mission is to push the boundaries of digital art while showcasing the versatility of AI technology.</p>
                
                <ul class="list-unstyled mt-4">
                    <li><i class="fas fa-check-circle mr-2"></i> PHP Expertise: We leverage PHP to connect seamlessly with AI image generation APIs.</li>
                    <li><i class="fas fa-check-circle mr-2"></i> Prompt Engineering: Our team excels in crafting precise prompts to achieve desired artistic outcomes.</li>
                    <li><i class="fas fa-check-circle mr-2"></i> Classic Image Generation: We specialize in producing timeless, high-quality images using cutting-edge AI techniques.</li>
                </ul>
            </div>
            
            <div class="col-lg-4">
                <div id="teamCarousel" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/soul.png" alt="Team Member 1" class="d-block w-100 team-image">
                            <div class="carousel-caption d-none d-md-block position-absolute bottom-0 start-50 translate-middle-x bg-dark text-light p-2">
                                <h5>Joseph Wambua</h5>
                                <p>Lead Developer & AI Image Specialist</p>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</a>

<!-- End of sections -->
<!--Footer -->
<footer class="bg-black text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <?php echo date('Y') ?> bLackpOpE Inc. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-end">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#Home">Home</a></li>
                    <li class="list-inline-item"><a href="#about">About</a></li>
                    <li class="list-inline-item"><a href="#">Services</a></li>
                    <li class="list-inline-item"><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>