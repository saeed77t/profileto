
<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$allowed_html = array(
    'a' => array(
        'href' => array(),
    ),
);



  require get_template_directory() . '/inc/userform-action.php';

?>

<p>
    <?php
    printf(
    /* translators: 1: user display name 2: logout url */
        wp_kses( __( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ), $allowed_html ),
        '<strong>' . esc_html( $current_user->display_name ) . '</strong>',
        esc_url( wc_logout_url() )
    );
    ?>
</p>

<?php
//get user id
$CuserID = get_current_user_id();
$UserData =  get_userdata($CuserID);

//get user meta data
$cuserFirstname= get_user_meta(  $CuserID,   'userFirstname' );
$cuserLastname= get_user_meta(  $CuserID,   'userLastname' );
$cuserEmail= get_user_meta(  $CuserID,   'userEmail' );
$cuserPhoneNumber= get_user_meta(  $CuserID,   'userPhoneNumber' );
$cuserOccupation= get_user_meta(  $CuserID,   'userOccupation' );
$cuserAge= get_user_meta(  $CuserID,   'userAge' );
$cuserAdress= get_user_meta(  $CuserID,   'userAdress' );
$cuserAbout= get_user_meta(  $CuserID,   'userAbout' );
$cuserImage= get_user_meta(  $CuserID,   'userImage' );
$cuserSocialLink1= get_user_meta(  $CuserID,   'userSocialLink1' );
$cuserSocialLink2= get_user_meta(  $CuserID,   'userSocialLink2' );
$cuserSocialLink3= get_user_meta(  $CuserID,   'userSocialLink3' );
$cuserSocialLink4= get_user_meta(  $CuserID,   'userSocialLink4' );
$cuserSocialLink5= get_user_meta(  $CuserID,   'userSocialLink5' );
$cuserSocialLink6= get_user_meta(  $CuserID,   'userSocialLink6' );
$cuserSocialImage1= get_user_meta(  $CuserID,   'userSocialImage1' );
$cuserSocialImage2= get_user_meta(  $CuserID,   'userSocialImage2' );
$cuserSocialImage3= get_user_meta(  $CuserID,   'userSocialImage3' );
$cuserSocialImage4= get_user_meta(  $CuserID,   'userSocialImage4' );
$cuserSocialImage5= get_user_meta(  $CuserID,   'userSocialImage5' );
$cuserSocialImage6= get_user_meta(  $CuserID,   'userSocialImage6' );
$cuserResume= get_user_meta(  $CuserID,   'userResume' );






?>

    <?php

    $userurl = $UserData ->user_url;

    ?>

<button class="btn btn-lg btn-info"><a style="text-decoration: none; color: white;"  href="<?php echo 'profile'.DIRECTORY_SEPARATOR.'?userid='.$CuserID?>">  مشاهده صفحه پروفایل</a></button>
<div class="infoForm">
<div class="rico-credits">
    <h2 class="text-center mb-3">فرم نمایش اطالاعات </h2>
</div>

<div role="form" class="wpcf7 userIform" id="wpcf7-f11-p126-o1" lang="en-US" dir="ltr">
    <div class="screen-reader-response"></div>
    <form method="post"  enctype="multipart/form-data">
        <div style="display: none;">
<!--            <input class="userformIn" type="hidden" name="_wpcf7" value="11">-->
            <input class="userformIn" id="userIdInput" type="hidden" name="ID" value="<?php echo $CuserID;  ?>">
<!--            <input class="userformIn" type="hidden" name="_wpcf7_version" value="5.1.6">-->
<!--            <input class="userformIn" type="hidden" name="_wpcf7_locale" value="en_US">-->
<!--            <input  class="userformIn"type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f11-p126-o1">-->
<!--            <input class="userformIn" type="hidden" name="_wpcf7_container_post" value="126">-->
        </div>
        <div class="row form-contact-us">
            <div class="col-12 col-md-6">
                <span class="userformIn"><input class="userformIn" type="text" name="first-name" value="<?php
                    if (isset($cuserFirstname[0]) && !empty($cuserFirstname[0])){
                        echo $cuserFirstname[0];
                    }
                    ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="input-name-first" aria-required="true" aria-invalid="false" placeholder="نام" pattern="\S+.*"></span>
            </div>
            <div class="col-12 col-md-6">
                <span class="wpcf7-form-control-wrap last-name"><input  class="userformIn"type="text" name="last-name" value="<?php
                    if (isset($cuserLastname[0]) && !empty($cuserLastname[0])){
                        echo $cuserLastname[0];
                    }
                    ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="input-name-last" aria-required="true" aria-invalid="false" placeholder="نام خانوادگی" pattern="\S+.*"></span>
            </div>
            <div class="col-12 col-md-6">
                <span class="wpcf7-form-control-wrap user-phone"><input  class="userformIn" type="tel" name="user-phone" value="<?php
                    if (isset($cuserPhoneNumber[0]) && !empty($cuserPhoneNumber[0])){
                        echo $cuserPhoneNumber[0];
                    }
                    ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" id="input-phone" aria-required="true" aria-invalid="false" placeholder="شماره تلفن" pattern="[0-9]{4}[0-9]{3}[0-9]{2}[0-9]{2}"></span>
            </div>
            <div class="col-12 col-md-6">
                <span class="wpcf7-form-control-wrap user-email"><input class="userformIn" type="email" name="user-email" value="<?php
                    if (isset($cuserEmail[0]) && !empty($cuserEmail[0])){
                        echo $cuserEmail[0];
                    }
                    ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="input-email" aria-required="true" aria-invalid="false" placeholder="آدرس ایمیل" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"></span>
            </div>
            <div class="col-12 col-md-6">
                <span class="userformIn"><input class="userformIn" type="text" name="occupation" value="<?php
                    if (isset($cuserOccupation[0]) && !empty($cuserOccupation[0])){
                        echo $cuserOccupation[0];
                    }
                    ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="input-ocupation" aria-required="true" aria-invalid="false" placeholder="شغل" pattern="\S+.*"></span>
            </div>
            <div class="col-12 col-md-6">
                <span class=""><input  class="userformIn"type="number" name="age" value="<?php
                    if (isset($cuserAge[0]) && !empty($cuserAge[0])){
                        echo $cuserAge[0];
                    }
                    ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="input-age" aria-required="true" aria-invalid="false" placeholder="سن" pattern="[0-9]{3}"></span>
            </div>
            <div class="col-12 col-md-12">
                <span class=""><input  class="userformIn"type="text" name="address" value="<?php
                    if (isset($cuserAdress[0]) && !empty($cuserAdress[0])){
                        echo $cuserAdress[0];
                    }
                    ?>" size="312" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="input-age" aria-required="true" aria-invalid="false" placeholder="آدرس" pattern="\S+.*"></span>
            </div>
            <div class="col-1"></div>
            <div class="col-10">
                <span class="wpcf7-form-control-wrap additional-comments"><textarea  class="userformIn"   name="about" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" id="input-comments" aria-invalid="false" placeholder="  درباره من ....">
                        <?php
                        if (isset($cuserAbout[0]) && !empty($cuserAbout[0])){
                            echo $cuserAbout[0];
                        }
                        ?>
                    </textarea></span>
            </div>
            <div class="col-1"></div>
<!--            <div class="col-12">-->
<!--                <div class="row">-->
<!--                    <div class="col-12 col-md-6">-->
<!--            <span class="wpcf7-form-control-wrap services">-->
<!--              <span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required" id="input-services">-->
<!--                <span class="wpcf7-list-item first">-->
<!--                  <label class="userformIn">-->
<!--                    <input class="userformIn" type="checkbox" name="services[]" value="Resume Writing">-->
<!--                    <span class="checkbox-custom-outer"></span>-->
<!--                    <span class="wpcf7-list-item-label">Resume Writing</span></label>-->
<!--                </span>-->
<!--                <br>-->
<!--                <span class="wpcf7-list-item">-->
<!--                  <label class="userformIn">-->
<!--                    <input  class="userformIn" type="checkbox" name="services[]" value="Interview Training">-->
<!--                    <span  class="checkbox-custom-outer"></span>-->
<!--                    <span class="wpcf7-list-item-label">Interview Training</span></label>-->
<!--                </span>-->
<!--                <br>-->
<!--                <span class="wpcf7-list-item">-->
<!--                  <label class="userformIn">-->
<!--                    <input class="userformIn" type="checkbox" name="services[]" value="Relationship Skills">-->
<!--                    <span class="checkbox-custom-outer"></span>-->
<!--                    <span class="wpcf7-list-item-label">Relationship Skills</span></label>-->
<!--                </span>-->
<!--                <br>-->
<!--              </span>-->
<!--            </span>-->
<!--                    </div>-->
<!--                    <div class="col-12 col-md-6">-->
<!--            <span class="wpcf7-form-control-wrap services">-->
<!--              <span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required" id="input-services-2">-->
<!--                <span class="wpcf7-list-item">-->
<!--                  <label  class="userformIn" >-->
<!--                    <input  class="userformIn" type="checkbox" name="services[]" value="Online Application Education">-->
<!--                    <span class="checkbox-custom-outer"></span>-->
<!--                    <span class="wpcf7-list-item-label">Online Application Education</span></label>-->
<!--                </span>-->
<!--                <br>-->
<!--                <span class="wpcf7-list-item">-->
<!--                  <label  class="userformIn" >-->
<!--                    <input  class="userformIn" type="checkbox" name="services[]" value="LinkedIn Development">-->
<!--                    <span class="checkbox-custom-outer"></span>-->
<!--                    <span class="wpcf7-list-item-label">LinkedIn Development</span></label>-->
<!--                </span>-->
<!--                <br>-->
<!--                <span class="wpcf7-list-item last">-->
<!--                  <label  class="userformIn">-->
<!--                    <input   class="userformIn" type="checkbox" name="services[]" value="Securing the Job">-->
<!--                    <span class="checkbox-custom-outer"></span>-->
<!--                    <span class="wpcf7-list-item-label">Securing the Job</span></label>-->
<!--                </span>-->
<!--              </span>-->
<!--            </span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="col-4 col-md-4"></div>
            <div class="col-4 col-md-4">
                <span class="added">


                            <div class="  <?php if (isset($cuserImage[0]) &&strlen($cuserImage[0]) > 5  && !empty($cuserImage[0])){ echo 'show';} else{echo 'hide';}?>">
                        <img src="<?php  echo $cuserImage[0];?>" alt="user image" style="width: 100px;">
                                  <button type="button" class="btnAjax btn btn-danger" name="userImage"  value="<?php echo $cuserImage[0] ; ?>"><i class="fa      icon  icon-trash" aria-hidden="true"></i></button>
                        <br>

                                </div>
                        <div class=" <?php if (strlen($cuserImage[0]) >5  ){ echo 'hide';}?>">
                        <label class="userformIn" for="input-image">عکس یا لوگو</label>  <input  class="" type="file"   accept="image/png, image/jpeg" name="image" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="input-image" aria-required="true" aria-invalid="false" placeholder="عکس یا لوگو" alt="عکس یا لوگو">
                            </div>

<!--                        <label class="userformIn" for="input-image">عکس یا لوگو</label>  <input  class="" type="file"   accept="image/png, image/jpeg" name="image" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="input-image" aria-required="true" aria-invalid="false" placeholder="عکس یا لوگو" alt="عکس یا لوگو">-->

                </span>
            </div>
            <div class="col-4 col-md-4"></div>
            <div class="col-4 col-md-4" >
                <span class="added">
                    <div class="  <?php if (isset($cuserSocialImage1[0]) && strlen($cuserSocialImage1[0]) > 5  && !empty($cuserSocialImage1[0])){ echo 'show';} else{echo 'hide';}?>">
                        <img src="<?php  echo $cuserSocialImage1[0];?>" alt="user image" style="width: 100px;">
                        <p><?php echo $cuserSocialLink1[0] ;?></p>
                                  <button type="button" class="btnAjax btn btn-danger" name="userSocialImage1" textkey="userSocialLink1"  value="<?php echo $cuserSocialImage1[0] ; ?>"><i class="fa     icon  icon-trash" aria-hidden="true"></i></button>

                    </div>
                    <div class=" <?php if (strlen($cuserSocialImage1[0]) >5  ){ echo 'hide';}?>">
                    <input type="text" id="socialLink1" class="userformIn" name="socialLink1" value="" placeholder="لینک شبکه اجتماعی">
                   <label class="userformIn" for="socialimage1">انتخاب لوگوی شبکه اجتماعی</label> <input type="file"  accept="image/png, image/jpeg" id="socialimage1" name="socialimage1">
                </div>
                </span>
            </div>
            <div class="col-4 col-md-4" >
                <span class="added">
                    <div class="  <?php if (isset($cuserSocialImage2[0]) && strlen($cuserSocialImage2[0]) > 5  && !empty($cuserSocialImage2[0])){ echo 'show';} else{echo 'hide';}?>">
                        <img src="<?php  echo $cuserSocialImage2[0];?>" alt="user image" style="width: 100px;">
                        <p><?php echo $cuserSocialLink2[0] ;?></p>
                                  <button type="button" class="btnAjax btn btn-danger" name="userSocialImage2" textkey="userSocialLink2"  value="<?php echo $cuserSocialImage2[0] ; ?>"><i class="fa      icon  icon-trash" aria-hidden="true"></i></button>

                    </div>
                    <div class=" <?php if (strlen($cuserSocialImage2[0]) >5  ){ echo 'hide';}?>">
                    <input type="text" id="socialLink2" class="userformIn" name="socialLink2" value="" placeholder="لینک شبکه اجتماعی">
                   <label class="userformIn" for="socialimage2">انتخاب لوگوی شبکه اجتماعی</label> <input type="file"  accept="image/png, image/jpeg" id="socialimage2" name="socialimage2">
                    </div>
                </span>
            </div>
            <div class="col-4 col-md-4" >
                <span class="added">
                    <div class="  <?php if (isset($cuserSocialImage3[0]) && strlen($cuserSocialImage3[0]) > 5  && !empty($cuserSocialImage3[0])){ echo 'show';} else{echo 'hide';}?>">
                        <img src="<?php  echo $cuserSocialImage3[0];?>" alt="user image" style="width: 100px;">
                        <p><?php echo $cuserSocialLink3[0] ;?></p>
                                  <button type="button" class="btnAjax btn btn-danger" name="userSocialImage3" textkey="userSocialLink3"  value="<?php echo $cuserSocialImage3[0] ; ?>"><i class="fa      icon  icon-trash" aria-hidden="true"></i></button>

                    </div>

                     <div class=" <?php if (strlen($cuserSocialImage3[0]) >5  ){ echo 'hide';}?>">
                    <input type="text" id="socialLink3" class="userformIn" name="socialLink3" value="" placeholder="لینک شبکه اجتماعی">
                   <label class="userformIn" for="socialimage3">انتخاب لوگوی شبکه اجتماعی</label> <input type="file"  accept="image/png, image/jpeg" id="socialimage3" name="socialimage3">
                     </div>
                </span>
            </div>
            <div class="col-4 col-md-4" >
                <span class="added">
                    <div class="  <?php if (isset($cuserSocialImage4[0]) && strlen($cuserSocialImage4[0]) > 5  && !empty($cuserSocialImage4[0])){ echo 'show';} else{echo 'hide';}?>">
                        <img src="<?php  echo $cuserSocialImage4[0];?>" alt="user image" style="width: 100px;">
                        <p><?php echo $cuserSocialLink4[0] ;?></p>
                                  <button type="button" class="btnAjax btn btn-danger" name="userSocialImage4" textkey="userSocialLink4"  value="<?php echo $cuserSocialImage4[0] ; ?>"><i class="fa      icon  icon-trash" aria-hidden="true"></i></button>

                    </div>

                     <div class=" <?php if (strlen($cuserSocialImage4[0]) >5  ){ echo 'hide';}?>">
                    <input type="text" id="socialLink4" class="userformIn" name="socialLink4" value="" placeholder="لینک شبکه اجتماعی">
                   <label class="userformIn" for="socialimage4">انتخاب لوگوی شبکه اجتماعی</label> <input type="file"  accept="image/png, image/jpeg" id="socialimage4" name="socialimage4">
                     </div>
                </span>
            </div>
            <div class="col-4 col-md-4" >
                <span class="added">

                      <div class="  <?php if (isset($cuserSocialImage5[0]) && strlen($cuserSocialImage5[0]) > 5  && !empty($cuserSocialImage5[0])){ echo 'show';} else{echo 'hide';}?>">
                        <img src="<?php  echo $cuserSocialImage5[0];?>" alt="user image" style="width: 100px;">
                        <p><?php echo $cuserSocialLink5[0] ;?></p>
                                  <button type="button" class="btnAjax btn btn-danger" name="userSocialImage5" textkey="userSocialLink5"  value="<?php echo $cuserSocialImage5[0] ; ?>"><i class="fa      icon  icon-trash" aria-hidden="true"></i></button>

                    </div>

                      <div class=" <?php if (strlen($cuserSocialImage5[0]) >5  ){ echo 'hide';}?>">
                    <input type="text" id="socialLink5" class="userformIn" name="socialLink5" value="" placeholder="لینک شبکه اجتماعی">
                   <label class="userformIn" for="socialimage5">انتخاب لوگوی شبکه اجتماعی</label> <input type="file"  accept="image/png, image/jpeg" id="socialimage5" name="socialimage5">
                      </div>
                </span>
            </div>
            <div class="col-4 col-md-4" >
                <span class="added">

                     <div class="  <?php if (isset($cuserSocialImage6[0]) && strlen($cuserSocialImage6[0]) > 5  && !empty($cuserSocialImage6[0])){ echo 'show';} else{echo 'hide';}?>">
                        <img src="<?php  echo $cuserSocialImage6[0];?>" alt="user image" style="width: 100px;">
                        <p><?php echo $cuserSocialLink6[0] ;?></p>
                                  <button type="button" class="btnAjax btn btn-danger" name="userSocialImage6" textkey="userSocialLink6"  value="<?php echo $cuserSocialImage6[0] ; ?>"><i class="fa    icon  icon-trash" aria-hidden="true"></i></button>

                    </div>
                      <div class=" <?php if (strlen($cuserSocialImage6[0]) >5  ){ echo 'hide';}?>">
                    <input type="text" id="socialLink6" class="userformIn" name="socialLink6" value="" placeholder="لینک شبکه اجتماعی">
                   <label class="userformIn" for="socialimage6">انتخاب لوگوی شبکه اجتماعی</label> <input type="file"  accept="image/png, image/jpeg" id="socialimage6" name="socialimage6">
                      </div>
                </span>
            </div>

            <div class="col-3 col-md-3"></div>
            <div class="col-6 col-md-6" >
                <span class="added">
                     <div class="  <?php if (isset($cuserResume[0]) && strlen($cuserResume[0]) > 5  && !empty($cuserResume[0])){ echo 'show';} else{echo 'hide';}?>">
                        <p><?php echo basename($cuserResume[0] , 'pdf'); ?></p>
                                  <button type="button" class="btnAjax btn btn-danger" name="userResume"   value="<?php echo $cuserResume[0] ; ?>"><i class="fa      icon  icon-trash" aria-hidden="true"></i></button>

                    </div>
                     <div class=" <?php if (strlen($cuserResume[0]) >5  ){ echo 'hide';}?>">
                   <label class="userformIn" for="resume">فایل رزومه * فقط pdf * </label> <input type="file" accept=".pdf,.doc" id="resume" name="resume">
                     </div>
                </span>
            </div>
            <div class="col-3 col-md-3"></div>

            <div class="col-12">
                <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit userformIn" id="input-submit"><span class="ajax-loader"></span>
            </div>
        </div>
        <div class="wpcf7-response-output wpcf7-display-none"></div>
    </form>
</div>

</div>

<?php
/**
 * My Account dashboard.
 *
 * @since 2.6.0
 */
do_action( 'woocommerce_account_dashboard' );

/**
 * Deprecated woocommerce_before_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action( 'woocommerce_before_my_account' );

/**
 * Deprecated woocommerce_after_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>

