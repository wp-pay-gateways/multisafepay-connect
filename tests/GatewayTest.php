<?php

class Pronamic_Pay_Gateways_MultiSafepay_Connect_GatewayTest extends WP_UnitTestCase {
	function test_init() {
		$config = new Pronamic_WP_Pay_Gateways_MultiSafepay_Config();

		$config->mode       = getenv( 'MULTISAFEPAY_MODE' );
		$config->account_id = getenv( 'MULTISAFEPAY_ACCOUNT_ID' );
		$config->site_id    = getenv( 'MULTISAFEPAY_SITE_ID' );
		$config->site_code  = getenv( 'MULTISAFEPAY_SECURE_CODE' );

		if ( 'test' == $config->mode ) {
			$config->api_url = Pronamic_WP_Pay_Gateways_MultiSafepay_MultiSafepay::API_TEST_URL;
		} else {
			$config->api_url = Pronamic_WP_Pay_Gateways_MultiSafepay_MultiSafepay::API_PRODUCTION_URL;
		}

		$gateway = new Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_Gateway( $config );

		$issuers = $gateway->get_issuers();

		$expected = array(
			'3151' => 'Test bank',
		);

		$this->assertEquals( $expected, $issuers );
	}
}
