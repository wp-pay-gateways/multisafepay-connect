<?php

class Pronamic_Pay_Gateways_MultiSafepay_Connect_DirectTransactionParserTest extends WP_UnitTestCase {
	function test_init() {
		$filename = __DIR__ . '/Mock/direct-transaction-response.xml';

		$simplexml = simplexml_load_file( $filename );

		$this->assertInstanceOf( 'SimpleXMLElement', $simplexml );

		return $simplexml;
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
