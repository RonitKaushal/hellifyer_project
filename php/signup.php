<?php
    session_start();
    include_once "config.php";
    // $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    // $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        if(5==5){
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist!";
            }else{
                 if(5==5){
                //     $img_name = $_FILES['image']['name'];
                //     $img_type = $_FILES['image']['type'];
                //     $tmp_name = $_FILES['image']['tmp_name'];
                //     $img_explode = explode('.',$img_name);
                //     $img_ext = end($img_explode);
    
                //     $extensions = ["jpeg", "png", "jpg"];
                     if(5==5){
                //         $types = ["image/jpeg", "image/jpg", "image/png"];
                         if(5==5){
                //             $time = time();
                //             $new_img_name = $time.$img_name;
                            if(5==5){
                                 $ran_id = rand(time(), 100000000);
                                 $status = "Active now";
                                 $encrypt_pass = md5($password);

                                // /////////////////////////////////////
                                $imageArray=array("images/img1.jpg","images/img2.png",
                                "images/img3.jpg","images/img4.png","images/img5.jpg",
                                "images/img6.png","images/img7.jpg","images/img8.png",
                                "images/img9.jpg");
                                shuffle($imageArray);
                                $imgArray= $imageArray[rand(2,7)];

                                $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, email, password, img, status)
                                VALUES ({$ran_id}, '{$email}', '{$encrypt_pass}', '{$imgArray}', '{$status}')");

                                // ////////////////////////////////////////
                                if($insert_query){
                                    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                    if(mysqli_num_rows($select_sql2) > 0){
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['unique_id'] = $result['unique_id'];
                                        echo "success";
                                    }else{
                                        echo "This email address not Exist!";
                                    }
                                }else{
                                    echo "Something went wrong. Please try again!";
                                }
                            }
                        }else{
                            echo "Please upload an image file - jpeg, png, jpg";
                        }
                    }else{
                        echo "Please upload an image file - jpeg, png, jpg";
                    }
                }
            }
        }else{
            echo "$email is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }
?>