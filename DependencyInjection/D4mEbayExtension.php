<?php

namespace D4m\Bundle\EbayBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class D4mEbayExtension extends Extension
{
    /**
     *  {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services/services.xml');

        $container->setParameter('d4m_ebay.session_credentials', $config['session_credentials']);
        $container->setParameter('d4m_ebay.session_token', $config['session_token']);
        $container->setParameter('d4m_ebay.session_mode', $config['session_mode']);
    }
}