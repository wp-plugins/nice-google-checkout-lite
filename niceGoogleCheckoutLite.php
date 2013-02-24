<?php
/**
 * @package Nice Google Checkout Lite
 */
/*
Plugin Name: Nice Google Checkout Lite
Plugin URI: http://trinitronic.com/index.php/Downloads/downloads.html
Description: The Nice Google Checkout Lite plugin provides you with an easy Google Checkout payment solution. Simply add a Nice Google Checkout Lite shortcode to your post or page and a Google Checkout Buy Now button will be published in place of the shortcode. To change the plugin's settings visit the <a href="./options-general.php?page=niceGoogleCheckoutLite.php" target="_self" >settings page.</a>
Version: 1.01
Author: TriniTronic
Author URI: http://trinitronic.com
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

if (!class_exists("NiceGoogleCheckoutLite")) {

  class NiceGoogleCheckoutLite {

    var $adminOptionsName = "NiceGoogleCheckoutLiteAdminOptions";
    var $buttonCount = 0;

    function NiceGoogleCheckoutLite() { //constructor



    }

    // Admin Panel page --------------------------------------

    // Returns an array of admin options
    function getAdminOptions() {

      $niceGoogleCheckoutLiteAdminOpts = array(

        'google_merchant_id'       => '',
        'google_test_merchant_id'  => '',
        'google_testmode'          => 0,
        'currency_code'            => 'USD',
        'ship_price'               => '',
        'ship_method'              => '',
        'tax_rate'                 => '',
        'tax_state'                => '',
        'google_btnsize'           => 'm',
        'google_btnback'           => 'trans',
        'google_location'          => 'en_US',
        'google_target'            => '_self'

      );


      $niceOptions = get_option( $this->adminOptionsName );

      if ( !empty( $niceOptions ) ) {

          foreach ( $niceOptions as $k => $v )

              $niceGoogleCheckoutLiteAdminOpts[$k] = $v;

      }

      update_option($this->adminOptionsName, $niceGoogleCheckoutLiteAdminOpts);

      return $niceGoogleCheckoutLiteAdminOpts;

    }

    function init() {

      $this->getAdminOptions();

    }

    //Prints out the admin page
    function printAdminPage() {

      $niceOptions = $this->getAdminOptions();

      if (isset($_POST['update_niceGoogleCheckoutLiteSettings'])) {

        if (isset($_POST['google_merchant_id'])) {

          $niceOptions['google_merchant_id'] = $_POST['google_merchant_id'];

        }

        if (isset($_POST['google_test_merchant_id'])) {

          $niceOptions['google_test_merchant_id'] = $_POST['google_test_merchant_id'];

        }

        if (isset($_POST['google_testmode'])) {

          $niceOptions['google_testmode'] = $_POST['google_testmode'];

        }

        if (isset($_POST['currency_code'])) {

          $niceOptions['currency_code'] = $_POST['currency_code'];

        }

        if (isset($_POST['ship_price'])) {

          $niceOptions['ship_price'] = $_POST['ship_price'];

        }

        if (isset($_POST['ship_method'])) {

          $niceOptions['ship_method'] = $_POST['ship_method'];

        }

        if (isset($_POST['tax_rate'])) {

          $niceOptions['tax_rate'] = $_POST['tax_rate'];

        }

        if (isset($_POST['tax_state'])) {

          $niceOptions['tax_state'] = $_POST['tax_state'];

        }

        if (isset($_POST['google_btnsize'])) {

          $niceOptions['google_btnsize'] = $_POST['google_btnsize'];

        }

        if (isset($_POST['google_btnback'])) {

          $niceOptions['google_btnback'] = $_POST['google_btnback'];

        }

        if (isset($_POST['google_location'])) {

          $niceOptions['google_location'] = $_POST['google_location'];

        }

        update_option($this->adminOptionsName, $niceOptions);

        ?>

        <div class="updated"><p><strong><?php _e("Settings Updated.", "niceGoogleCheckoutLite");?></strong></p></div>

      <?php
      } ?>

      <div class=wrap>
        <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
        <h2>Nice Google Checkout Lite</h2>
          <h3>Google Merchant ID</h3>
          <p>Enter your valid Google Checkout account merchant id. Payments will be made to the Google Checkout account associated with this specified merchant id.
          </p>
          <input type="text" size="25" name="google_merchant_id" id="google_merchant_id" value="<?php _e(apply_filters('format_to_edit',$niceOptions['google_merchant_id']), 'niceGoogleCheckoutLite'); ?>" />
          <h3>Google Test Merchant ID</h3>
          <p>Enter your valid Google Checkout sandbox test seller merchant id. This attribute is optional. Test payments will be made to the sandbox account associated with this specified merchant id. To use this feature you must have a Google Checkout developer account.
          </p>
          <input type="text" size="25" name="google_test_merchant_id" id="google_test_merchant_id" value="<?php _e(apply_filters('format_to_edit',$niceOptions['google_test_merchant_id']), 'niceGoogleCheckoutLite'); ?>" />
          <h3>Google Checkout Test Mode</h3>
          <p>Select on or off to put all Google Checkout buttons in and out of test mode. When true is specified all transactions are sent to the Google Checkout sandbox. To use this feature you must have a Google Checkout developer account.</p>
          <p>
            <input type="radio" id="google_testmode0" name="google_testmode" value="0" <?php if ($niceOptions['google_testmode'] == 0) { _e('checked="checked"', "niceGoogleCheckoutLite"); }?> />off&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="google_testmode1" name="google_testmode" value="1" <?php if ($niceOptions['google_testmode'] == 1) { _e('checked="checked"', "niceGoogleCheckoutLite"); }?> />on</label>
          </p>
          <h3>Location</h3>
          <p>Select your location. United States: US, United Kingdom: UK.</p>
          <p>
            <input type="radio" id="google_location_us" name="google_location" value="en_US" <?php if ($niceOptions['google_location'] == "en_US") { _e('checked="checked"', "niceGoogleCheckoutLite"); }?> />US&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="google_location_uk" name="google_location" value="en_UK" <?php if ($niceOptions['google_location'] == "en_UK") { _e('checked="checked"', "niceGoogleCheckoutLite"); }?> />UK</label>
          </p>
          <h3>Currency Code</h3>
          <p>Valid Google Checkout 3-letter currency codes: Pounds Sterling: GBP, U.S. Dollars: USD</p>
          <select name="currency_code" id="currency_code">
            <option value="USD" <?php if ($niceOptions['currency_code'] == "USD") { _e('selected="selected"', "niceGoogleCheckoutLite"); }?>>USD</option>
            <option value="GBP" <?php if ($niceOptions['currency_code'] == "GBP") { _e('selected="selected"', "niceGoogleCheckoutLite"); }?>>GBP</option>
          </select>
          <h3>Default Shipping Price</h3>
          <p>Enter your default shipping price. Leave blank for no default shipping price.
          </p>
          <input type="text" size="20" name="ship_price" id="ship_price" value="<?php _e(apply_filters('format_to_edit',$niceOptions['ship_price']), 'niceGoogleCheckoutLite'); ?>" />
          <h3>Default Shipping Method</h3>
          <p>Enter your default shipping method.
          </p>
          <input type="text" size="20" name="ship_method" id="ship_method" value="<?php _e(apply_filters('format_to_edit',$niceOptions['ship_method']), 'niceGoogleCheckoutLite'); ?>" />
          <h3>Default Tax Rate</h3>
          <p>Enter your default tax rate. Leave blank for no default tax. To specify a tax rate you need to express it as a decimal value. So, if the tax to be charged is 7.5% you would enter .075 in the parameter field.
          </p>
          <input type="text" size="10" name="tax_rate" id="tax_rate" value="<?php _e(apply_filters('format_to_edit',$niceOptions['tax_rate']), 'niceGoogleCheckoutLite'); ?>" />
          <h3>Default Tax State</h3>
          <p>Enter your default tax state. Leave blank for no default tax state. This is an optional attribute for US merchants. You may specify the US state where you wish to charge tax by entering the states 2 letter abbreviation, e.g. for California enter CA.
          </p>
          <input type="text" size="2" maxlength="2" name="tax_state" id="tax_state" value="<?php _e(apply_filters('format_to_edit',$niceOptions['tax_state']), 'niceGoogleCheckoutLite'); ?>" />
          <h3>Default Button Size</h3>
          <p>Select the default button size.</p>
          <select name="google_btnsize" id="google_btnsize">
            <option value="s" <?php if ($niceOptions['google_btnsize'] == "s") { _e('selected="selected"', "niceGoogleCheckoutLite"); }?>>Small</option>
            <option value="m" <?php if ($niceOptions['google_btnsize'] == "m") { _e('selected="selected"', "niceGoogleCheckoutLite"); }?>>Medium</option>
            <option value="l" <?php if ($niceOptions['google_btnsize'] == "l") { _e('selected="selected"', "niceGoogleCheckoutLite"); }?>>Large</option>
          </select>
          <h3>Default Button Background</h3>
          <p>Select the default button background.</p>
          <select name="google_btnsize" id="google_btnsize">
            <option value="trans" <?php if ($niceOptions['google_btnsize'] == "trans") { _e('selected="selected"', "niceGoogleCheckoutLite"); }?>>Transparent</option>
            <option value="white" <?php if ($niceOptions['google_btnsize'] == "white") { _e('selected="selected"', "niceGoogleCheckoutLite"); }?>>White</option>
          </select>
          <h3>Button Target</h3>
          <p>Select your button target. The button target will determine the window that is used, to navigate to Google, when the buyer clicks a payment button.</p>
          <select name="google_target" id="google_target">
            <option value="_blank" <?php if ($niceOptions['google_target'] == "_blank") { _e('selected="selected"', "niceGoogleCheckoutLite"); }?>>New window</option>
            <option value="_self" <?php if ($niceOptions['google_target'] == "_self") { _e('selected="selected"', "niceGoogleCheckoutLite"); }?>>Current window.</option>
          </select>
          <div class="submit">
          <input type="submit" name="update_niceGoogleCheckoutLiteSettings" value="<?php _e('Update Settings', 'niceGoogleCheckoutLite') ?>" /></div>
        </form>
      </div>

    <?php
    }//End function printAdminPage()


    // -------------------------------------- End Admin Panel page


    // Plugin functionality --------------------------------------

    function getNiceGoogleCheckoutLite ( $atts = '' ){

      extract( shortcode_atts(

      array(

        'price'	      => '',
        'name'	      => '',
        'description'	=> '',
        'quantity'	  => '',
        'shipping'	  => '',
        'tax'	        => ''

      ), $atts ));

      $opts = $this->getAdminOptions();

      $atts['google_testmode']          = $opts['google_testmode'];
      $atts['currency_code']            = $opts['currency_code'];
      $atts['google_btnsize']           = $opts['google_btnsize'];
      $atts['google_btnback']           = $opts['google_btnback'];
      $atts['google_location']          = $opts['google_location'];
      $atts['google_target']            = $opts['google_target'];
      $atts['bw']                       = $opts['bw'];
      $atts['bh']                       = $opts['bh'];
      $atts['ship_price']               = $opts['ship_price'];
      $atts['ship_method']              = $opts['ship_method'];
      $atts['tax_rate']                 = $opts['tax_rate'];
      $atts['tax_state']                = $opts['tax_state'];

      if ( $atts['shipping'] != '' ) {

        $p = strpos( $atts['shipping'], ';' );

        if ( $p ) {

          $v = explode( ';', $atts['shipping'] );
          $atts['ship_price']  = $v[0];
          $atts['ship_method'] = $v[1];

        }else {

          $atts['ship_price'] = $atts['shipping'];

        }

      }

      if ( $atts['tax'] != '' ) {

        $p = strpos( $atts['tax'], ';' );

        if ( $p ) {

          $v = explode( ';', $atts['tax'] );
          $atts['tax_rate']  = $v[0];
          $atts['tax_state'] = $v[1];

        }else {

          $atts['tax_rate'] = $atts['tax'];

        }

      }



      if ( $atts['google_testmode'] == 1 ) {

        $atts['google_merchant_id']  = $opts['google_test_merchant_id'];
        $atts['google_url']          = 'https://sandbox.google.com/checkout/api/checkout/v2/checkoutForm/Merchant/'.$opts['google_test_merchant_id'];

      }else {

        $atts['google_merchant_id']  = $opts['google_merchant_id'];
        $atts['google_url']          = 'https://checkout.google.com/api/checkout/v2/checkoutForm/Merchant/'.$opts['google_merchant_id'];

      }


      switch ($atts['google_btnsize'])
      {

        case 's':

          $atts['bw'] = '160';
          $atts['bh'] = '43';
          break;

        case 'l':

          $atts['bw'] = '180';
          $atts['bh'] = '46';
          break;

        default:

          $atts['bw'] = '168';
          $atts['bh'] = '44';

      }

      $insert = $this->niceGoogleCheckoutLiteLiteBuildForm( $atts );

      return $insert;

    }

    function niceGoogleCheckoutLiteLiteBuildForm( $a )
    {

      $this->buttonCount++;

      $f = '';

      if ( $a['google_url'] != '' && $a['price'] != '' && $a['name'] != '' ){

        $f .= '<form method="POST" action="'.$a['google_url'].'" accept-charset="utf-8"  target="'.$a['google_target'].'">';

        $f .= $a['name']        != ''  ? '<input type="hidden" name="item_name_'.$this->buttonCount.'" value="'.$a['name'].'"/>'                     : '';

        $f .= $a['price']       != ''  ? '<input type="hidden" name="item_price_'.$this->buttonCount.'" value="'.$a['price'].'"/>'                   : '';

        $f .= $a['description'] != ''  ? '<input type="hidden" name="item_description_'.$this->buttonCount.'" value="'.$a['description'].'"/>'       : '';

        $f .= $a['quantity']    != ''  ? '<input type="hidden" name="item_quantity_'.$this->buttonCount.'" value="'.$a['quantity'].'"/>'             : '';

        $f .= $a['ship_price']  != ''  ? '<input type="hidden" name="ship_method_price_'.$this->buttonCount.'" value="'.$a['ship_price'].'"/>'       : '';

        $f .= $a['ship_price']  != '' && $a['ship_method'] != '' ? '<input type="hidden" name="ship_method_name_'.$this->buttonCount.'" value="'.$a['ship_method'].'"/>' : '';

        $f .= $a['ship_price']  != ''  ? '<input type="hidden" name="ship_method_currency_'.$this->buttonCount.'" value="'.$a['currency_code'].'"/>' : '';

        $f .= $a['tax_rate']    != ''  ? '<input type="hidden" name="tax_rate" value="'.$a['tax_rate'].'"/>'                    : '';

        $f .= $a['tax_rate']    != '' && $a['tax_state']   != '' ? '<input type="hidden" name="tax_us_state" value="'.$a['tax_state'].'"/>' : '';

        $f .= '<input type="hidden" name="item_currency_'.$this->buttonCount.'"" value="'.$a['currency_code'].'"/>';

        $f .= '<input type="image" name="Google Checkout" alt="Fast checkout through Google" src="http://checkout.google.com/buttons/checkout.gif?merchant_id='.$a['google_merchant_id'].'&w='.$a['bw'].'&h='.$a['bh'].'&style='.$a['google_btnback'].'&variant=text&loc='.$a['google_location'].'" height="'.$a['bh'].'" width="'.$a['bw'].'" />';

        $f .= '</form>';

      }else {

        $f .= '<div style="color: red;" >ERROR: Incomplete Nice PayPal Button Lite data!</div>';

      }

      return $f;

    }

  }

} //End Class NiceGoogleCheckoutLite

if (class_exists("NiceGoogleCheckoutLite")) {
    $nice_googleCheckoutLite = new NiceGoogleCheckoutLite();
}

//Initialize the admin panel
if ( !function_exists("niceGoogleCheckoutLite_ap") ) {

    function niceGoogleCheckoutLite_ap() {

        global $nice_googleCheckoutLite;

        if ( !isset($nice_googleCheckoutLite) ) {

          return;

        }

        if ( function_exists('add_options_page') ) {

          add_options_page('Nice Google Checkout Lite', 'Nice Google Checkout Lite', 9, basename(__FILE__), array(&$nice_googleCheckoutLite, 'printAdminPage'));

        }
    }
}

//Actions and Filters
if (isset($nice_googleCheckoutLite)) {

    // Init admin panel
    add_action('admin_menu', 'niceGoogleCheckoutLite_ap');

    // Retrieve admin options
    add_action('activate_niceGoogleCheckoutLite/niceGoogleCheckoutLite.php',  array(&$nice_googleCheckoutLite, 'init'));

    // Adds shortcode
    add_shortcode('nicecheckoutlite', array(&$nice_googleCheckoutLite, 'getNiceGoogleCheckoutLite'), 1);

}

?>