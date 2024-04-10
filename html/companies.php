<?php
    $data = [
        [
            "title" => "Electronics",
            "description" => "Welcome to our electronics emporium, where innovation meets affordability! At our shop, you'll find a curated selection of the latest gadgets, devices, and accessories to elevate your digital lifestyle. From cutting-edge smartphones and sleek laptops to state-of-the-art audio equipment and smart home solutions, we've got everything you need to stay connected and entertained.",
            "image_url" => "../images/electronics.jpg",
            "image_alt" => "Image 1",
            "accept" => "Amputee"
        ],
        [
            "title" => "Beauty Salon",
            "description" => "Welcome to our boutique clothing store, where style meets comfort and sophistication! Step into a world of fashion-forward trends and timeless classics that cater to your individuality and sense of style. From casual chic to elegant formalwear, our collection features handpicked pieces that exude quality craftsmanship and attention to detail.",
            "image_url" => "../images/beautysalon.jpg",
            "image_alt" => "Image 2",
            "accept" => "Speech Disorders"
        ],
        [
            "title" => "Home Decor",
            "description" => "Welcome to our home decor haven, where every corner tells a story and every room reflects your unique personality! Step into a world of design inspiration and discover an eclectic array of furnishings, accents, and decor pieces that will transform your space into a sanctuary of style and comfort. From contemporary minimalist aesthetics to rustic charm and everything in between, our curated collection offers something for every taste and home decor preference.",
            "image_url" => "../images/clothings.jpeg",
            "image_alt" => "Image 3",
            "accept" => "Amputee"
        ],
        [
            "title" => "Sports Center",
            "description" => "Welcome to our sports center, where the pursuit of fitness and the thrill of competition come together to inspire greatness! Step into our state-of-the-art facility and embark on a journey to elevate your athleticism, improve your health, and unleash your inner champion.",
            "image_url" => "../images\sportscenter.jpg",
            "image_alt" => "Image 4",
            "accept" => "ADHD"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo-orig.png" type="image">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../css/companies.css" type="text/css">
    <script defer src="../bootstrap.bundle.min.js"></script>
    <title>Apply in a Company</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../images/logo-orig.png" alt="" id="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php" id="home">Home</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="">Forum</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="companies">Companies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="train-btn">Train Now</a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle drop" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="login.php">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="below-nav">
        <div class="search-container mb-4">
            <input class="searchbar" type="text" id="searchInput" placeholder="Search...">
            <button class="searchbutton">Search</button>
        </div>

        <div class="btns mb-5">
            <button type="button" class="btn btn-primary btn-lg btn1">List of Companies</button>
            <button type="button" class="btn btn-secondary btn-lg btn2">Bookmarks</button>
        </div>
        

        <div class="card-deck">
            <?php foreach ($data as $item): ?>
                <div class="card">
                    <img src="<?php echo $item['image_url']; ?>" class="card-img-top" alt="<?php echo $item['image_alt']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item['title']; ?></h5>
                        <p class="card-text"><?php echo strlen($item['description']) > 100 ? substr($item['description'], 0, 100) . '...' : $item['description']; ?></p>
                        <p>We accept: <b><?php echo $item['accept']?></b></p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#applyModal">Apply</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="modal" id="applyModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Apply</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <!-- Your form or content for applying can go here -->
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">*only accepts .pdf, .docx, .png</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>
                    </div>
                    
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Upload</button>
                        <!-- Add additional buttons if needed -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<script>
    function setModalTitle(title) {
        document.getElementById('modalTitle').innerText = title;
    }
</script>
</html>
