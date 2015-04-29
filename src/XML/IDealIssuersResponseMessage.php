<?php

/**
 * Title: MultiSafepay Connect XML iDEAL issuers response message
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.1.0
 * @since 1.1.0
 */
class Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_XML_IDealIssuersResponseMessage {
	/**
	 * Parse the specified XML element into an iDEAL transaction object
	 *
	 * @param SimpleXMLElement $xml
	 * @param Pronamic_Gateways_IDealAdvanced_Transaction $transaction
	 */
	public static function parse( SimpleXMLElement $xml ) {
		$message = new Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_XML_IDealIssuersResponseMessage();

		// @todo

		return $message;
	}
}
