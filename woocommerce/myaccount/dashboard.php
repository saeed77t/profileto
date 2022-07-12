
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


<div class="infoForm">
<div class="rico-credits">
    <h2 class="text-center mb-3">فرم نمایش اطالاعات </h2>
</div>

<div role="form" class="wpcf7 userIform" id="wpcf7-f11-p126-o1" lang="en-US" dir="ltr">
    <div class="screen-reader-response"></div>
    <form action="" method="post">
        <div style="display: none;">
<!--            <input class="userformIn" type="hidden" name="_wpcf7" value="11">-->
            <input class="userformIn" type="hidden" name="ID" value="<?php echo get_current_user_id(); ?>">
<!--            <input class="userformIn" type="hidden" name="_wpcf7_version" value="5.1.6">-->
<!--            <input class="userformIn" type="hidden" name="_wpcf7_locale" value="en_US">-->
<!--            <input  class="userformIn"type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f11-p126-o1">-->
<!--            <input class="userformIn" type="hidden" name="_wpcf7_container_post" value="126">-->
        </div>
        <div class="row form-contact-us">
            <div class="col-12 col-md-6">
                <span class="userformIn"><input class="userformIn" type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="input-name-first" aria-required="true" aria-invalid="false" placeholder="نام" pattern="\S+.*"></span>
            </div>
            <div class="col-12 col-md-6">
                <span class="wpcf7-form-control-wrap last-name"><input  class="userformIn"type="text" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="input-name-last" aria-required="true" aria-invalid="false" placeholder="نام خانوادگی" pattern="\S+.*"></span>
            </div>
            <div class="col-12 col-md-6">
                <span class="wpcf7-form-control-wrap user-phone"><input  class="userformIn" type="tel" name="user-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" id="input-phone" aria-required="true" aria-invalid="false" placeholder="شماره تلفن" pattern="[0-9]{4}[0-9]{3}[0-9]{2}[0-9]{2}"></span>
            </div>
            <div class="col-12 col-md-6">
                <span class="wpcf7-form-control-wrap user-email"><input class="userformIn" type="email" name="user-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="input-email" aria-required="true" aria-invalid="false" placeholder="آدرس ایمیل" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"></span>
            </div>
            <div class="col-12 col-md-6">
                <span class="userformIn"><input class="userformIn" type="text" name="occupation" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="input-ocupation" aria-required="true" aria-invalid="false" placeholder="شغل" pattern="\S+.*"></span>
            </div>
            <div class="col-12 col-md-6">
                <span class=""><input  class="userformIn"type="number" name="age" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="input-age" aria-required="true" aria-invalid="false" placeholder="سن" pattern="[0-9]{3}"></span>
            </div>
            <div class="col-12 col-md-12">
                <span class=""><input  class="userformIn"type="text" name="address" value="" size="312" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="input-age" aria-required="true" aria-invalid="false" placeholder="آدرس" pattern="\S+.*"></span>
            </div>
            <div class="col-1"></div>
            <div class="col-10">
                <span class="wpcf7-form-control-wrap additional-comments"><textarea  class="userformIn" name="about" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" id="input-comments" aria-invalid="false" placeholder="   درباره من ..... "></textarea></span>
            </div>
            <div class="col-1"></div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6">
            <span class="wpcf7-form-control-wrap services">
              <span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required" id="input-services">
                <span class="wpcf7-list-item first">
                  <label class="userformIn">
                    <input class="userformIn" type="checkbox" name="services[]" value="Resume Writing">
                    <span class="checkbox-custom-outer"></span>
                    <span class="wpcf7-list-item-label">Resume Writing</span></label>
                </span>
                <br>
                <span class="wpcf7-list-item">
                  <label class="userformIn">
                    <input  class="userformIn" type="checkbox" name="services[]" value="Interview Training">
                    <span  class="checkbox-custom-outer"></span>
                    <span class="wpcf7-list-item-label">Interview Training</span></label>
                </span>
                <br>
                <span class="wpcf7-list-item">
                  <label class="userformIn">
                    <input class="userformIn" type="checkbox" name="services[]" value="Relationship Skills">
                    <span class="checkbox-custom-outer"></span>
                    <span class="wpcf7-list-item-label">Relationship Skills</span></label>
                </span>
                <br>
              </span>
            </span>
                    </div>
                    <div class="col-12 col-md-6">
            <span class="wpcf7-form-control-wrap services">
              <span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required" id="input-services-2">
                <span class="wpcf7-list-item">
                  <label  class="userformIn" >
                    <input  class="userformIn" type="checkbox" name="services[]" value="Online Application Education">
                    <span class="checkbox-custom-outer"></span>
                    <span class="wpcf7-list-item-label">Online Application Education</span></label>
                </span>
                <br>
                <span class="wpcf7-list-item">
                  <label  class="userformIn" >
                    <input  class="userformIn" type="checkbox" name="services[]" value="LinkedIn Development">
                    <span class="checkbox-custom-outer"></span>
                    <span class="wpcf7-list-item-label">LinkedIn Development</span></label>
                </span>
                <br>
                <span class="wpcf7-list-item last">
                  <label  class="userformIn">
                    <input   class="userformIn" type="checkbox" name="services[]" value="Securing the Job">
                    <span class="checkbox-custom-outer"></span>
                    <span class="wpcf7-list-item-label">Securing the Job</span></label>
                </span>
              </span>
            </span>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <input  class="userformIn" type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" id="input-submit"><span class="ajax-loader"></span>
            </div>
        </div>
        <div class="wpcf7-response-output wpcf7-display-none"></div>
    </form>
</div>

</div>
<p>
    <?php
    /* translators: 1: Orders URL 2: Address URL 3: Account URL. */
    $dashboard_desc = __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">billing address</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' );
    if ( wc_shipping_enabled() ) {
        /* translators: 1: Orders URL 2: Addresses URL 3: Account URL. */
        $dashboard_desc = __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' );
    }
    printf(
        wp_kses( $dashboard_desc, $allowed_html ),
        esc_url( wc_get_endpoint_url( 'orders' ) ),
        esc_url( wc_get_endpoint_url( 'edit-address' ) ),
        esc_url( wc_get_endpoint_url( 'edit-account' ) )
    );
    ?>
</p>

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

