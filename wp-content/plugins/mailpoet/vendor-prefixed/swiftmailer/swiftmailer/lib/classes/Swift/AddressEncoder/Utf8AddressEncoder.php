<?php
 namespace MailPoetVendor; if (!defined('ABSPATH')) exit; class Swift_AddressEncoder_Utf8AddressEncoder implements \MailPoetVendor\Swift_AddressEncoder { public function encodeString(string $address) : string { return $address; } } 