<?php 
  require('connection.php');
  session_start();
  function cek_user($u,$p)
  {
    $query = "SELECT * FROM users WHERE username='$u' AND password='$p'";
    $result = mysqli_query(conn(), $query);
    $data = array();
    if (mysqli_num_rows($result)<=0) {
      return 0;
    } else {
      while ($row = mysqli_fetch_assoc($result)) {
        $data[]=$row;
      }
      return $data;
    }
  }

  if (isset($_POST['login'])) {
    // var_dump($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $data = cek_user($username,$password);
    // var_dump($data);
    if($data==0){
      header('Location:'.base_url());      
    } else if ($data>0) {
      $_SESSION['login'] = true;
      $_SESSION['id'] = $data[0]['id'];
      $_SESSION['username'] = $data[0]['username'];
      $_SESSION['role'] = $data[0]['role'];
      // var_dump($_SESSION);die;
      header("Location:".base_url().'beranda');
    }

  }
?>