Provides integration with Ebay Trading API for your Symfony2 Project.

Features
========

This bundle allows you to easily use the Trading API in your Symfony2 project.

Configuration
-------------

- In your config.yml add the credentials needed to access eBay API.
- You also need to set your token and live or sandbox mode parameter.
::
    d4m_ebay:
        session_credentials:
            name:   NAME_OF_APP
            devId:  EBAY_DEV_ID
            appId:  EBAY_APP_ID
            certId: EBAY_CERT_ID
        session_token:  EBAY_AUTH_TOKEN
        session_mode:   live
        #session_mode:  sandbox

D4mEbayBundle's features
------------------------

- This extension lets you execute EBay Trading API Calls very simple:
::
    $tradingManager = $this->get('d4m_ebay.trading');
    $response = $tradingManager->executeService('GetCategories', [
            'category_site_ID' => 0,
            'detail_level' => DetailLevelCode::RETURN_ALL
        ]
    );