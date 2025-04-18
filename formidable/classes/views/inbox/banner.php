<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}
?>
<div id="frm_banner" data-key="<?php echo esc_attr( $message['key'] ); ?>">
	<?php if ( ! empty( $message['emoji'] ) ) { ?>
		<span class="frm-banner-emoji"><?php echo esc_html( $message['emoji'] ); ?></span>
	<?php } ?>
	<strong class="frm-banner-title"><?php echo esc_html( $message['subject'] ); ?></strong>
	<span class="frm-banner-content"><?php echo esc_html( $message['banner'] ); ?></span>
	<span class="frm-banner-cta"><?php FrmAppHelper::kses_echo( $cta, 'all' ); ?></span>
	<span class="frm-banner-dismiss frmsvg"><?php FrmAppHelper::icon_by_class( 'frmfont frm_close_icon', array( 'aria-label' => 'Dismiss' ) ); ?></span>
</div>
