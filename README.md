
Magento 2 CausalFunnel Datascience Extension Guide


We put together this integration guide for Magento 2.x merchants and developers looking to better understand CausalFunnel Datascience extension. 

Getting Started with CausalFunnel Datascience Extension

First install the Magento 2 CausalFunnel Datascience. The easiest way is to use the Magento Marketplace (https://marketplace.magento.com/causalfunnel-datascience.html) and install it from your Magento admin panel.

Alternatively, you can access all of the code on GitHub (https://github.com/causalfunnel/causalfunnel-magento) and download the extension as a ZIP file by clicking Download ZIP. You can also install our module with Composer (https://getcomposer.org/) using the following command:


 composer require causalfunnel-datascience/persona


If you’re installing the extension manually, unzip the archive and upload the files to /app/code/ CausalfunnelDatascience/Persona. After uploading, run the following Magento CLI (http://devdocs.magento.com/guides/v2.0/config-guide/cli/config-cli-subcommands.html) commands:


bin/magento module:enable CausalfunnelDatascience_Persona

bin/magento setup:upgrade

bin/magento setup:di:compile

These commands will enable the CausalFunnel Datascience extension, perform necessary database updates, and re-compile your Magento store. If you decide to manually update the CausalFunnel Datascience extension later, run setup:upgrade and setup:di:compile again after installing the update.



	
Verify the installation: 
Log in to the Magento Admin Panel and navigate to the 'Stores' section. Then, select 'Configuration' and verify that the plugin is installed and enabled.



Verify the results on front-end:


When you will enable our extension, a script tag would be added to your website header which will integrate our feature into your website.

To check if a script tag has been injected into the header of a website, you can perform the following steps:

•	Right-click on the website and select "Inspect Element" or "View Page Source" (depending on your browser).
•	Look for the head section of the HTML code.
•	Search for the script tag by using the keyboard shortcut "CTRL + F" or "CMD + F" and typing "causalfunnel" into the search box.
•	Check if the script tag with the desired source URL is present in the head section.
•	Alternatively, you can also use browser developer tools to inspect the website's DOM and check if the script tag has been dynamically added to the head section. To do this, you can use the "Elements" or "Sources" panel of the developer tools, depending on your browser.

Uninstalling the Extension:
For a clean uninstallation, run the following command in your Magento root directory:

composer causalfunnel-uninstall

This command will cleanly uninstall the CausalFunnel Datascience extension from your Magento setup.

