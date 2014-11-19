{"filter":false,"title":"form-checkout.php","tooltip":"/woocommerce/checkout/form-checkout.php","undoManager":{"mark":20,"position":20,"stack":[[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":0,"column":0},"end":{"row":0,"column":5}},"text":"<?php"},{"action":"insertText","range":{"start":{"row":0,"column":5},"end":{"row":1,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":1,"column":0},"end":{"row":58,"column":0}},"lines":["/**"," * Checkout Form"," *"," * @author \t\tWooThemes"," * @package \tWooCommerce/Templates"," * @version     2.0.0"," */","","if ( ! defined( 'ABSPATH' ) ) {","\texit; // Exit if accessed directly","}","","wc_print_notices();","","do_action( 'woocommerce_before_checkout_form', $checkout );","","// If checkout registration is disabled and not logged in, the user cannot checkout","if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {","\techo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );","\treturn;","}","","// filter hook for include new pages inside the payment method","$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>","","<form name=\"checkout\" method=\"post\" class=\"checkout\" action=\"<?php echo esc_url( $get_checkout_url ); ?>\" enctype=\"multipart/form-data\">","","\t<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>","","\t\t<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>","","\t\t<div class=\"col2-set\" id=\"customer_details\">","","\t\t\t<div class=\"col-1\">","","\t\t\t\t<?php do_action( 'woocommerce_checkout_billing' ); ?>","","\t\t\t</div>","","\t\t\t<div class=\"col-2\">","","\t\t\t\t<?php do_action( 'woocommerce_checkout_shipping' ); ?>","","\t\t\t</div>","","\t\t</div>","","\t\t<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>","","\t\t<h3 id=\"order_review_heading\"><?php _e( 'Your order', 'woocommerce' ); ?></h3>","","\t<?php endif; ?>","","\t<?php do_action( 'woocommerce_checkout_order_review' ); ?>","","</form>",""]},{"action":"insertText","range":{"start":{"row":58,"column":0},"end":{"row":58,"column":67}},"text":"<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":12,"column":0},"end":{"row":13,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":13,"column":0},"end":{"row":14,"column":0}},"text":"\n"},{"action":"insertText","range":{"start":{"row":14,"column":0},"end":{"row":14,"column":60}},"text":"<div id=\"woopage\" style=\"background: #0A0000\" width=\"100%\"> "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":14,"column":60},"end":{"row":15,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":61,"column":67},"end":{"row":62,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":62,"column":0},"end":{"row":63,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":63,"column":0},"end":{"row":63,"column":1}},"text":"<"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":63,"column":1},"end":{"row":63,"column":2}},"text":"/"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":63,"column":2},"end":{"row":63,"column":3}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":63,"column":3},"end":{"row":63,"column":4}},"text":"i"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":63,"column":4},"end":{"row":63,"column":5}},"text":"v"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":63,"column":5},"end":{"row":63,"column":6}},"text":">"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":13,"column":0},"end":{"row":13,"column":1}},"text":"?"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":13,"column":1},"end":{"row":13,"column":2}},"text":">"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":13,"column":2},"end":{"row":14,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":0},"end":{"row":16,"column":1}},"text":"<"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":1},"end":{"row":16,"column":2}},"text":"?"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":2},"end":{"row":16,"column":3}},"text":"p"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":3},"end":{"row":16,"column":4}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":4},"end":{"row":16,"column":5}},"text":"p"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":16,"column":5},"end":{"row":17,"column":0}},"text":"\n"}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":0},"end":{"row":17,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1416408764832,"hash":"7bfeae73cbce6bd313f0646cc1a6fb84ce005b7b"}