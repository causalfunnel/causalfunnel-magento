Installing a plugin in Magento 2.4 involves the following steps:

Download the plugin: You can download the plugin from the Magento Marketplace or the vendor's website.

Create a folder: Create a new folder under the 'app/code' directory in your Magento installation. The folder name should match the vendor name and plugin name.

Extract the plugin files: Extract the downloaded plugin files into the newly created folder.

Run the command line: Open the command line and navigate to your Magento installation directory.

Enable the plugin: Run the following command to enable the plugin:
php bin/magento module:enable Causalfunnel_Persona

Upgrade the Magento database: Run the following command to upgrade the Magento database: 
php bin/magento setup:upgrade

Flush the cache: Run the following command to flush the cache:
php bin/magento cache:flush

Verify the installation: Log in to the Magento Admin Panel and navigate to the 'Stores' section. Then, select 'Configuration' and verify that the plugin is installed and enabled.