<?php

class Pronamic_Pay_Gateways_MultiSafepay_Connect_IDealIssuersParserTest extends WP_UnitTestCase {
	function test_init() {
		$filename = __DIR__ . '/Mock/ideal-issuers-response.xml';

		$simplexml = simplexml_load_file( $filename );

		$this->assertInstanceOf( 'SimpleXMLElement', $simplexml );

		return $simplexml;
	}

	/**
	 * @depends test_init
	 */
	function test_parser( $simplexml ) {
		$message = Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_XML_IDealIssuersResponseMessage::parse( $simplexml );

		$this->assertInstanceOf( 'Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_XML_IDealIssuersResponseMessage', $message );

		return $message;
	}

	/**
	 * @depends test_parser
	 */
	function test_values( $message ) {
		$expected = new Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_XML_IDealIssuersResponseMessage();

		$this->assertEquals( $expected, $message );
	}
}
