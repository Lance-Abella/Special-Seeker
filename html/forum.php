<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forum</title>
<style>
  @import url('fonts.css');

  * {
    font-family: 'DMSans', sans-serif;
    color: #8EA681;
  }        

  .navbar {
    background-color: #333;
    overflow: hidden;
  }

  .navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  .navbar a:hover {
    background-color: #ddd;
    color: black;
  }
  
  .container {
    max-width: 1000px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow-y: auto;
    max-height: 550px; /* Set maximum height for scrollable area */
  }
  
  .card {
    background-color: #fff;
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 15px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .header {
    text-align: center;
    margin-bottom: 20px;
  }

  .reply-btn {
    background-color: rgba(105, 121, 96, 1);
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 8px 16px;
    cursor: pointer;
    font-size: 14px;
    margin-top: 10px;
  }

  .reply-btn:hover {
    background-color: #0056b3;
  }

  .post{
    font-size: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 5px;
    padding-bottom: 5px;
    border: 1.5px solid rgba(105, 121, 96, 1);
  }

  .post:hover {
    background-color: rgba(105, 121, 96, 1);
    color: white;
  }
</style>
</head>
<body>

<div class="navbar">
  <a href="#">Home</a>
  <a href="#">About</a>
  <a href="#">Contact</a>
</div>

<h1 class="header">Forum</h1>

<div class="container" id="forumContainer">
  <button type="button" class="post">Post</button>
  <?php
    // Sample data - array of objects representing forum posts
    $forumPosts = [
        [
        'user' => 'User123',
        'experience' => "As someone with autism spectrum disorder, I face challenges with social interaction and communication. However, with support and understanding from my family and friends, I've been able to navigate through life and pursue my passions."
        ],
        [
        'user' => 'Anonymous User',
        'experience' => "I have a physical disability that affects my mobility, but it hasn't stopped me from living a fulfilling life. Through determination and access to assistive technology, I've been able to overcome many obstacles and achieve my goals."
        ],
        [
        'user' => 'BraveHeart23',
        'experience' => "Living with cerebral palsy has taught me resilience and perseverance. Despite the physical challenges, I've learned to adapt and thrive, pursuing my dreams with unwavering determination."
        ],
        [
            'user' => 'Sunshine22',
            'experience' => "Dealing with blindness has its obstacles, but it hasn't dimmed my optimism. With the support of my community and the aid of technology, I've embraced life's adventures and discovered new ways to experience the world."
        ],
        [
            'user' => 'GracefulGamer',
            'experience' => "Having dyslexia posed academic challenges, but it ignited my creativity and problem-solving skills. Through innovative learning strategies and a supportive environment, I've excelled in areas beyond the classroom."
        ]
    // Add more forum posts as needed
    ];

    // Loop through the forum posts array and output each post
    foreach ($forumPosts as $post) {
        echo '<div class="card">';
        echo '<h3>' . $post['user'] . '</h3>';
        echo '<p>' . $post['experience'] . '</p>';
        echo '<button class="reply-btn">Reply</button>';
        echo '</div>';
      }
  ?>
</div>

</body>
</html>
