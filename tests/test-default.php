<?php

class DefaultTest extends WP_UnitTestCase
{
	public function test_indiveo_provider_registered()
    {
        /** @var WP_oEmbed $oembed */
        $oembed = _wp_oembed_get_object();

        /** @var array $providers */
        $providers = $oembed->providers;

        $this->assertArrayHasKey('https://indiveo.services/embed/*', $providers, 'Indiveo provider not registered.');
	}

    public function test_it_can_get_oembed_endpoint_by_providing_a_url()
    {
        /** @var WP_oEmbed $oembed */
        $oembed = _wp_oembed_get_object();

        /** @var string $provider */
        $provider = $oembed->get_provider('https://indiveo.services/embed/f1557bd7-1584-495a-aecd-827189d6a471');

        $this->assertSame('https://indiveo.services/oembed', $provider);
    }

    public function test_it_can_get_info_from_oembed_provider_endpoint()
    {
        add_filter('pre_oembed_result', [$this, 'mock_oembed_result'], 10, 3);

        /** @var string $embed */
        $embed = wp_oembed_get('https://indiveo.services/embed/f1557bd7-1584-495a-aecd-827189d6a471');

        remove_filter('pre_oembed_result', [$this, 'mock_oembed_result'], 10);

        $this->assertSame('mock-oembed', $embed);
    }

    public function mock_oembed_result($result, $url, $args)
    {
        return 'mock-oembed';
    }
}
