=== Nice Google Checkout Lite ===
Contributors: mjetpax
Donate link: http://trinitronic.com/wordpress/nice-google-checkout-wordpress-plugin
Tags: google, button, buy now, ecommerce, shortcode, buy now button, google button, google buy now button, google checkout button, google checkout plugin, google checkout plugin for wordpress, google wallet

Requires at least: 3.0
Tested up to: 3.5.1
Stable tag: trunk

Nice Google Checkout Lite gives you the power to create Google Checkout Buy Now buttons wherever you choose, by simply adding shortcodes to your posts and pages.

== Description ==

[Get more when you upgrade to the full version of the Nice Google Checkout plugin.](http://trinitronic.com/wordpress/nice-google-checkout-wordpress-plugin "Nice Google Checkout Plugin Full Version")

The Nice Google Checkout Lite plugin provides you with an easy to use & flexible e-commerce solution.

This plugin empowers you with a hassle free way to add Google Checkout buy now buttons to any WordPress post or page, by simply adding shortcodes to your content. Stop dealing with the headache involved with larger, over-bloated e-commerce extensions and start selling. Nice Google Checkout Lite is lightweight, flexible and easy to use. It does not include a shopping cart like its big brother, the [Nice Google Checkout plugin](http://trinitronic.com/wordpress/nice-google-checkout-wordpress-plugin "Nice Google Checkout Plugin Full Version"). However, it still packs a big punch in respect to application of use and reliability.

Usage is simple, just add a shortcode in any article content, e.g [nicecheckoutlite price="12.50" name="Wordpress Coffee Mug"], and the Nice Google Checkout Lite plugin will replace your shortcode with a Google Checkout buy now button. It couldn't be simpler.

*Please note that Google currently only offers Google Checkout service to U.S. and U.K. merchants.

Example shortcode
`[nicecheckoutlite price="12.50" name="Wordpress Coffee Mug"]`

Some cool features that you get:

* Easily create Google Checkout buttons, in-line with any of your WordPress posts or pages.
* Specify item purchase price.
* Specify item name.
* Specify item description.
* Specify item quantity.
* Specify shipping amount & optional shipping method name.
* Specify tax rate & optional US state designation.
* Set the currency code, includes both Google supported currencies, USD & GBP.
* Set the plugin to test mode, point Nice Google Button to your Google Checkout sandbox account.
* Configurable button size (Small, Medium & large).
* Configurable button background fill (white & transparent).
* Configurable Location (US & UK).

== Installation ==

1. Unzip the Nice Google Checkout Lite plugin.
1. Upload the entire niceGoogleCheckoutLite folder to your wp-content/plugins/ directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Go to Settings>>Nice Google Checkout lite.
1. Configure the Nice Google Checkout Lite options, i.e. Google Merchant id, currency, locaiton, etc.
1. Click the "Updates Settings" button.
1. The nice Google Checkout Lite shortcodes in any post or page.
1. That's it! You are all ready to start making money!!

== Frequently Asked Questions ==

Does the nice Google Checkout Lite plugin come with a shopping cart?

THe Nice Google Checkout lite only supports Google Checkout buy now buttons. However, the full version of the [Nice Google Checkout plugin](http://trinitronic.com/wordpress/nice-google-checkout-wordpress-plugin "Nice Google Checkout Plugin Full Version") does include a shopping cart.

How many buttons can be placed on a post or page?

This is unlimited. You may place as many buttons as you like in a post or a page.

Where can I get technical support?

You can get support through our support forum [http://trinitronic.com/community](http://trinitronic.com/community "Nice Google Checkout Lite Support Forum").

Where can I find the Nice Google Checkout Lite documentation page?

You can find the Nice Google Checkout Lite documentation page here [http://trinitronic.com/wordpress-plugin-documentation/nice-google-checkout-lite-for-wordpress-documentation](http://trinitronic.com/wordpress-plugin-documentation/nice-google-checkout-lite-for-wordpress-documentation "Nice Google Checkout Lite Documentation")

== Changelog ==

= 1.01 =
* Compatible with WordPress 3.5.1

= 1.0 =
* First release of the plugin

== Upgrade Notice ==

= 1.01 =
* Compatible with WordPress 3.5.1

= 1.0 =
* First release of the plugin

== Screenshots ==

== Documentation ==

**Basic Usage**

Usage is simple. Create a new post or page add your content to it. Wherever you want a Google Checkout button to appear include a shortcode like the following example. When you view your published post or page the shortcode will be automatically replaced with a corresponding Google Checkout button.

*Shortcode Example*

[nicecheckoutlite name="WordPress Coffee Mug" price="12.50"]

*Shortcode Syntax*

[nicecheckoutlite attribute_name="attribute_value"]

**Shortcode Attributes**

The Nice Google Checkout Lite plugin provides a number of options through the inclusion of 6 shortcode attributes. These attributes are as follows.

* price
* name
* description
* quantity
* shipping
* tax

Each attribute can be set in the shortcode by including the attribute name followed by an equals sign and the attribute value in quotes.

*Attribute Example*

[nicecheckoutlite name="WordPress Coffee Mug" price="12.50" shipping="4.95"]

**Shortcode Attribute Definitions**

*name*

[nicecheckoutlite name="Item Name"]

The name of the item being sold. If omitted, payers enter their own name at the time of payment.

*price*

[nicecheckoutlite price="0.00"]

The price or amount of the product or service, not including shipping & handling, or tax. If omitted from Buy Now payers enter their own amount during checkout on the Google payment page.

*IMPORTANT:* Do not enter a currency symbol, just the numerical amount.

*description*

[nicecheckoutlite description="item description"]

Optionally, use the “description” attribute to specify a description of the item.

Example
[nicecheckoutlite description="10oz. coffee mug with WordPress logo."]

*shipping*

[nicecheckoutlite shipping="0.00"]

Shipping price is specified as a flat rate. Optionally you can specify the method that is to be used for shipping, e.g. USPS, UPS, FedEx. This can be done by specifing the shipping price, then enter a semi-colon, followed by the shipping method.

Example
[nicecheckoutlite shipping="0.00;USPS Priority"]

*tax*

[nicecheckoutlite tax=".000"]

To specify a tax rate you need to express it as a decimal value. So, if the tax to be charged is 7.5% you would enter .075 in the parameter field.

Optionally, you may specify the US state where you wish to charge tax by entering a semi-colon after the tax amount, followed by the states 2 letter abbreviation, e.g. for California enter “CA”.

Example
[nicecheckoutlite tax=".0825;CA"]

*quantity*

[nicecheckoutlite quantity="0"]

The number of items or item quantity included in the purchase. For example, if you wanted to sell 10 golf balls at once, you would set the item quantity to 10.


**Plugin Options**

The Nice Google Checkout Lite plugin allows you to configure the plugin's global settings. Configuration of the plugin is made quick and easy through the use of it's options page. You can find the options page at Admin>>Settings>>Nice Google Checkout Lite. The Global settings that are made available to you are as follows.

*Google Merchant ID*

Enter your valid Google Checkout account merchant id. Payments will be made to the Google Checkout account associated with this specified merchant id.

*Google Test Merchant ID*

Enter your valid Google Checkout sandbox test seller merchant id. This attribute is optional. Test payments will be made to the sandbox account associated with this specified merchant id. To use this feature you must have a Google Checkout developer account.

*Google Checkout Test Mode*

Select on or off to put all Google Checkout buttons in and out of test mode. When true is specified all transactions are sent to the Google Checkout sandbox. To use this feature you must have a Google Checkout developer account.

*Location*

Select your location. United States: US, United Kingdom: UK.

*Currency Code*

Valid Google Checkout 3-letter currency codes: Pounds Sterling: GBP, U.S. Dollars: USD

*Default Shipping Price*

Enter your default shipping price. Leave blank for no default shipping price.

*Default Shipping Method*

Enter your default shipping method.

*Default Tax Rate*

Enter your default tax rate. Leave blank for no default tax. To specify a tax rate you need to express it as a decimal value. So, if the tax to be charged is 7.5% you would enter .075 in the parameter field.

*Default Tax State*

Enter your default tax state. Leave blank for no default tax state. This is an optional attribute for US merchants. You may specify the US state where you wish to charge tax by entering the states 2 letter abbreviation, e.g. for California enter CA.

*Default Button Size*

Select the default button size.

*Default Button Background*

Select the default button background, white or transparent.

*Button Target*

Select your button target. The button target will determine the window that is used, to navigate to Google, when the buyer clicks a payment button.
