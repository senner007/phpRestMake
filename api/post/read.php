<?php 
  // Headers
  header('Access-Control-Allow-Origin: http://localhost:3000');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Credentials: true');

  include_once '../../config/Database.php';
  include_once '../../models/Post.php';

  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Blog post query
  // Get all posts if get parameter not set
  $result = isset($_GET['p']) && filter_input(INPUT_GET, 'p', FILTER_VALIDATE_INT) ? $post->read($_GET['p']) : $post->read();

  // Get row count
  $num = $result->rowCount();

  // Check if any posts
  if($num > 0) {
    // Post array
    $posts_arr = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {

      array_push($posts_arr, $row);
    }

    // Turn to JSON & output
    echo json_encode($posts_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Posts Found')
    );
  }
