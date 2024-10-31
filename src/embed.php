<?php

namespace NFTNDX\Oembed;

class Embed {
	private static $providerPatterns = [
		'#https?://(www\.)?nftndx\.io/token/.*#i' => array( 'https://nftndx.io/oembed', true ),
	];

	public static function registerProviders(array $existing_providers = []): array {
		return array_merge($existing_providers, static::$providerPatterns);
	}

	public function processProviderUrls(string $provider_url): string {
		return $provider_url;
	}
}
