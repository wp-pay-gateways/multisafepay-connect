<?php

/**
 * Title: MultiSafepay Connect XML direct transaction response message
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.1.0
 * @since 1.1.0
 */
class Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_XML_DirectTransactionResponseMessage {
	/**
	 * Parse the specified XML element into an iDEAL transaction object
	 *
	 * @param SimpleXMLElement $xml
	 * @param Pronamic_Gateways_IDealAdvanced_Transaction $transaction
	 */
	public static function parse( SimpleXMLElement $xml ) {
		$message = new Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_XML_DirectTransactionResponseMessage();

		$message->result = Pronamic_WP_Pay_XML_Security::filter( $xml['result'] );
		$message->transaction = Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_XML_TransactionParser::parse( $xml->transaction );

		return $message;
	}
}
