<pre>
<?php


if (isset($_POST) && !empty($_POST) && isset($_POST['ID']) && !empty($_POST['ID'])):
    // var_dump($_POST);


    $userId = $_POST['ID'];
    $userFirstName = $_POST['first-name'];
    $userLasttName = $_POST['last-name'];
    $userPhoneNumber = $_POST['user-phone'];
    $userEmail = $_POST['user-email'];
    $userOccupation = $_POST['occupation'];
    $userAge = $_POST['age'];
    $userAdress = $_POST['address'];
    $userAbout = $_POST['about'];
    $userImage = $_FILES['image'];
    $userSocialLink1 = $_POST['socialLink1'];
    $userSocialLink2 = $_POST['socialLink2'];
    $userSocialLink3 = $_POST['socialLink3'];
    $userSocialLink4 = $_POST['socialLink4'];
    $userSocialLink5 = $_POST['socialLink5'];
    $userSocialLink6 = $_POST['socialLink6'];
    $userSocialImage1 = $_FILES['socialimage1'];
    $userSocialImage2 = $_FILES['socialimage2'];
    $userSocialImage3 = $_FILES['socialimage3'];
    $userSocialImage4 = $_FILES['socialimage4'];
    $userSocialImage5 = $_FILES['socialimage5'];
    $userSocialImage6 = $_FILES['socialimage6'];
    $userResume = $_FILES['resume'];


    if (isset($userFirstName)  && !empty($userFirstName)):
        update_user_meta($userId, 'userFirstname', $userFirstName);
    endif;

    if (isset($userLasttName)  && !empty($userLasttName)):
        update_user_meta($userId, 'userLastname', $userLasttName);
    endif;

    if (isset($userEmail)  && !empty($userEmail)):
        update_user_meta($userId, 'userEmail', $userEmail);
    endif;

    if (isset($userPhoneNumber)  && !empty($userPhoneNumber)):
        update_user_meta($userId, 'userPhoneNumber', $userPhoneNumber);
    endif;

    if (isset($userOccupation)&& !empty($userOccupation)):
        update_user_meta($userId, 'userOccupation', $userOccupation);
    endif;

    if (isset($userAge)  && !empty($userAge)):
        update_user_meta($userId, 'userAge', $userAge);
    endif;

    if (isset($userAdress)  && !empty($userAdress)):
        update_user_meta($userId, 'userAdress', $userAdress);
    endif;

    if (isset($userAbout) && !empty($userAbout)):
        update_user_meta($userId, 'userAbout', $userAbout);
    endif;

    if (isset($userImage) && strlen($userImage['name'])>1 && !empty($userImage)):

        profiletoSaveImage($userId, $userImage, 'userImage');
    endif;

    if (isset($userSocialLink1)  && !empty($userSocialLink1)):

        update_user_meta($userId, 'userSocialLink1', $userSocialLink1);
    endif;

    if (isset($userSocialLink2) && !empty($userSocialLink2)):

        update_user_meta($userId, 'userSocialLink2', $userSocialLink2);
    endif;

    if (isset($userSocialLink3)  && !empty($userSocialLink3)):

        update_user_meta($userId, 'userSocialLink3', $userSocialLink3);
    endif;

    if (isset($userSocialLink4) && !empty($userSocialLink4)):

        update_user_meta($userId, 'userSocialLink4', $userSocialLink4);
    endif;

    if (isset($userSocialLink5)  && !empty($userSocialLink5)):

        update_user_meta($userId, 'userSocialLink5', $userSocialLink5);
    endif;

    if (isset($userSocialLink6) && !empty($userSocialLink6)):

        update_user_meta($userId, 'userSocialLink6', $userSocialLink6);
    endif;

    if (isset($userSocialImage1)&& strlen($userSocialImage1['name'])>10 && !empty($userSocialImage1)):

        profiletoSaveImage($userId, $userSocialImage1, 'userSocialImage1');
    endif;

    if (isset($userSocialImage2) &&strlen($userSocialImage2['name'])>10 && !empty($userSocialImage2)):

        profiletoSaveImage($userId, $userSocialImage2, 'userSocialImage2');
    endif;

    if (isset($userSocialImage3)&& strlen($userSocialImage3['name'])>10 && !empty($userSocialImage3)):

        profiletoSaveImage($userId, $userSocialImage3, 'userSocialImage3');
    endif;

    if (isset($userSocialImage4)&& strlen($userSocialImage4['name'])>10 && !empty($userSocialImage4)):

        profiletoSaveImage($userId, $userSocialImage4, 'userSocialImage4');
    endif;

    if (isset($userSocialImage5)&& strlen($userSocialImage5['name'])>10 && !empty($userSocialImage5)):

        profiletoSaveImage($userId, $userSocialImage5, 'userSocialImage5');
    endif;

    if (isset($userSocialImage6) &&strlen($userSocialImage6['name'])>10 && !empty($userSocialImage6)):

        profiletoSaveImage($userId, $userSocialImage6, 'userSocialImage6');
    endif;


    if (isset($userResume)&& strlen($userResume['name'])>10 && !empty($userResume)):


        $target_dir = wp_upload_dir();

        $target_file = $target_dir['path'] . DIRECTORY_SEPARATOR .$userId.basename($userResume["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is pdf or not


        $file_type = $_FILES['file']['type'];


// Check if file already exists
        if (file_exists($target_file)) {
            echo "فایل وجود دارد";
            $uploadOk = 0;
        }

// Check file size
        if ($userResume["size"] > 20000000) {
            echo "خجم فایل عکس زیاد است";
            $uploadOk = 0;
        }

// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "متاسفیم فایل آپلود نشد";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($userResume["tmp_name"], $target_file)) {

                // echo "The file ". htmlspecialchars( basename( $Image["name"])). " has been uploaded.";
            } else {
                echo "مشکلی در هنگام آپلود فایل پیش آمده است";
            }
        }

        $file_url = $target_dir['url'] . '/' .$userId.basename($userResume["name"]);
        update_user_meta($userId, 'userResume', $file_url);

    endif;


endif;

?>


    </pre>
