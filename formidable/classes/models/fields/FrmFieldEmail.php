<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}

/**
 * @since 3.0
 */
class FrmFieldEmail extends FrmFieldType {

	/**
	 * @var string
	 * @since 3.0
	 */
	protected $type = 'email';

	/**
	 * @var bool
	 * @since 3.0
	 */
	protected $holds_email_values = true;

	/**
	 * @var bool
	 */
	protected $array_allowed = false;

	/**
	 * @return bool[]
	 */
	protected function field_settings_for_type() {
		return array(
			'size'           => true,
			'clear_on_focus' => true,
			'invalid'        => true,
		);
	}

	/**
	 * Validate the email format
	 *
	 * @param array $args
	 *
	 * @return array
	 */
	public function validate( $args ) {
		if ( ! $args['value'] ) {
			return array();
		}
		$errors = array();
		if ( false !== strpos( $args['value'], '.@' ) || ! is_email( $args['value'] ) ) {
			$errors[ 'field' . $args['id'] ] = FrmFieldsHelper::get_error_msg( $this->field, 'invalid' );
		}
		return $errors;
	}

	/**
	 * @since 4.0.04
	 *
	 * @return void
	 */
	public function sanitize_value( &$value ) {
		FrmAppHelper::sanitize_value( 'sanitize_email', $value );
	}
}
