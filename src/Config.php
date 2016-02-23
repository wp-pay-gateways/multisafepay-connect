<?php

/**
 * Title: MultiSafepay connect config
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_Config extends Pronamic_WP_Pay_Gateways_MultiSafepay_Config {
	public $account_id;

	public $site_id;

	public $site_code;

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_Gateway';
	}
}
