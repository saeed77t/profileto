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
    $userAbout = $_POST['address'];
    $userImage = $_FILES['image'];
    $userSocialLink1 = $_POST['socialLink1'];
    $userSocialLink2 = $_POST['socialLink2'];
    $userSocialLink3 = $_POST['socialLink3'];
    $userSocialLink4 = $_POST['socialLink4'];
    $userSocialLink5 = $_POST['socialLink5'];
    $userSocialLink6 = $_POST['socialLink6'];
    $userSocialImage1 = $_POST['socialimage1'];
    $userSocialImage2 = $_POST['socialimage2'];
    $userSocialImage3 = $_POST['socialimage3'];
    $userSocialImage4 = $_POST['socialimage4'];
    $userSocialImage5 = $_POST['socialimage5'];
    $userSocialImage6 = $_POST['socialimage6'];
    $userResume = $_POST['resume'];


//    if (isset($userFirstName) && !empty($userFirstName)):
//        update_user_meta($userId, 'userFirstname', $userFirstName);
//    endif;
//
//    if (isset($userLasttName) && !empty($userLasttName)):
//        update_user_meta($userId, 'userLastname', $userLasttName);
//    endif;
//
//    if (isset($userEmail) && !empty($userEmail)):
//        update_user_meta($userId, 'userEmail', $userEmail);
//    endif;
//
//    if (isset($userPhoneNumber) && !empty($userPhoneNumber)):
//        update_user_meta($userId, 'userPhoneNumber', $userPhoneNumber);
//    endif;
//
//    if (isset($userOccupation) && !empty($userOccupation)):
//        update_user_meta($userId, 'userOccupation', $userOccupation);
//    endif;
//
//    if (isset($userAge) && !empty($userAge)):
//        update_user_meta($userId, 'userAge', $userAge);
//    endif;
//
//    if (isset($userAdress) && !empty($userAdress)):
//        update_user_meta($userId, 'userAdress', $userAdress);
//    endif;
//
//    if (isset($userAbout) && !empty($userAbout)):
//        update_user_meta($userId, 'userAbout', $userAbout);
//    endif;

    if (isset($userImage) && !empty($userImage)):

        profiletoSaveImage($userId,$userImage,'userImage');
    endif;
endif;

?>


    </pre>
