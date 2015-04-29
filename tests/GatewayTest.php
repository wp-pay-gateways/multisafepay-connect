<?php

class Pronamic_Pay_Gateways_MultiSafepay_Connect_GatewayTest extends WP_UnitTestCase {
	function test_init() {
		$config = new Pronamic_WP_Pay_Gateways_MultiSafepay_Config();

		$config->mode       = getenv( 'MULTISAFEPAY_MODE' );
		$config->account_id = getenv( 'MULTISAFEPAY_ACCOUNT_ID' );
		$config->site_id    = getenv( 'MULTISAFEPAY_SITE_ID' );
		$config->site_code  = getenv( 'MULTISAFEPAY_SECURE_CODE' );

		if ( $config->mode == Pronamic_IDeal_IDeal::MODE_TEST ) {
			$config->api_url = Pronamic_WP_Pay_Gateways_MultiSafepay_MultiSafepay::API_TEST_URL;
		} else {
			$config->api_url = Pronamic_WP_Pay_Gateways_MultiSafepay_MultiSafepay::API_PRODUCTION_URL;
		}
	}

	/**
	 * @depends test_init
	 */
	function test_parser( $simplexml ) {
		$message = Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_XML_DirectTransactionResponseMessage::parse( $simplexml );

		$this->assertInstanceOf( 'Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_XML_DirectTransactionResponseMessage', $message );

		return $message;
	}

	/**
	 * @depends test_parser
	 */
	function test_values( $message ) {
		$expected = new Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_XML_DirectTransactionResponseMessage();
		$expected->result = 'ok';

		$transaction = new Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_Transaction();
		$transaction->id = 'ABCD1234';
		$transaction->payment_url = 'http://www.multisafepay.com/pay/...&lang=en';

		$expected->transaction = $transaction;

		$this->assertEquals( $expected, $message );
	}
}
