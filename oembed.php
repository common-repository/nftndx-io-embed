<?php
/**
 * Plugin Name:  NFTNDX.IO Embed
 * Version:      1.0
 * Description:  Adds support for NFTs from NFTNDX.IO and helps your to display the NFTs minted on the different blockchain networks like ethereum.
 * Licence:      GPLv2 or later
 * Author:       nftndx
 * Author URI:   https://nftndx.io
 * Requires PHP: 7.1
 */

use NFTNDX\Oembed\Embed;

add_filter('oembed_providers', static function (array $providers): array {
	require_once __DIR__ . '/src/embed.php';
	return Embed::registerProviders($providers);
});

add_filter('oembed_fetch_url', static function ($provider_url): string {
	require_once __DIR__ . '/src/embed.php';
	return $provider_url;
	return $embed->processProviderUrls($provider_url);
});