<?php

declare(strict_types=1);

namespace CausalfunnelDatascience\Persona\Setup\Patch\Data;

use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class CallApiOnInstall implements DataPatchInterface
{
    private $moduleDataSetup;

    
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        \Magento\Framework\UrlInterface $urlBuilder,
        \Magento\User\Model\UserFactory $userFactory)
    {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->urlBuilder = $urlBuilder;
        $this->_userFactory = $userFactory;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function apply()
    {
        $baseUrl = $this->urlBuilder->getBaseUrl();
        $urlData = parse_url($baseUrl);
        $causalf_shop_name = str_replace(".", "-", $urlData['host']);

        $causalf_url = "https://www.scripts.causalfunnel.com/assets/cfCKYv1_".$causalf_shop_name."_ProdV1.js";
        
        $causalf_store_url = $urlData['scheme'] . '://' . str_replace(".", "-", $urlData['host']);
        
        
        $causalf_plugin_status = "Installed";
        $causalf_api_url = 'https://us-central1-causalfunnel-21.cloudfunctions.net/WordPressPluginWebHook/';

        
        $causalf_date = gmdate('Y-m-d H:i:s');

        
        $userId = 1; // The user id
        $user = $this->_userFactory->create()->load($userId);
        $causalf_user_name = $user->getUsername();
        $causalf_user_email = $user->getEmail();

        $platform = 'Magento';

        $data = ["platform" => $platform, "plugin_status" => $causalf_plugin_status, "shop_name" => $causalf_shop_name, "date" => $causalf_date, "plugin_script_url" => $causalf_url, "store_username" => $causalf_user_name, "store_email" => $causalf_user_email,"store_url" => $causalf_store_url];

        $curl = new Curl();
        $curl->post($causalf_api_url, $data);
        $response = $curl->getBody();
        $statusCode = $curl->getStatus();

        return $this;
    }

    public function getAliases()
    {
        return [];
    }
}