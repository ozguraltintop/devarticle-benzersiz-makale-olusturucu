<?php
/*
$STORE_MODE   =   "mailchimp";  		=> for Mail Chimp
$STORE_MODE   =   "campaignmonitor";	=> for Campaign Monitor
$STORE_MODE   =   "getresponse";		=> for GetResponse
$STORE_MODE   =   "icontact";			=> for iContact
$STORE_MODE   =   "constantcontact";	=> for Constant Contact
$STORE_MODE   =   "file";				=> to save mail addresses in "subscription.txt" file.
$STORE_MODE   =   "custom_integration";	=> Use this option to write your own code in custom_integration.php file
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
$STORE_MODE = "file";


/*
MAILCHIMP SETTINGS
---------------
Where can I find my API key? 
http://kb.mailchimp.com/accounts/management/about-api-keys
---------------
Where can I find my List ID?
http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id

MailChimp API Key findable in your Mailchimp's dashboard
MailChimp List ID  findable in your Mailchimp's dashboard
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
$MC_API_KEY = "";
$MC_LIST_ID = "";


/*
CAMPAIGN MONITOR SETTINGS
---------------
Where can I find my API key? 
http://help.campaignmonitor.com/topic.aspx?t=206
---------------
Where can I find my List ID?
https://www.campaignmonitor.com/api/getting-started/?&_ga=1.69755664.1469494041.1451461361#listid
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
$CM_API_KEY = "";
$CM_LIST_ID = "";


/*
GET RESPONSE SETTINGS
---------------
Where can I find my API key? 
http://apidocs.getresponse.com/pl/article/api-key
---------------
Campaign name as List ID
https://app.getresponse.com/campaign_list.html
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
$GR_API_KEY       = "";
$GR_CAMPAIGN_NAME = "";


/*
iContact SETTINGS
---------------
https://www.icontact.com/developerportal/documentation/authenticate-requests/
---------------
How can I register my APP?
https://www.icontact.com/developerportal/documentation/register-your-app/
---------------
Where can I find my APP ID? 
https://app.icontact.com/icp/core/registerapp/

Obtained when you Register the API application.
This identifier is used to uniquely identify your application.
---------------
Where can I find my API USER?
https://www.icontact.com/developerportal/documentation/authenticate-requests/

The iContact username for logging into your iContact account. 
If you are using the sandbox for testing, this is your sandbox environment username.
---------------
Where can I find my API PASSWORD?
https://www.icontact.com/developerportal/documentation/authenticate-requests/
https://app.icontact.com/icp/core/externallogin
The API application password set when the application was registered. 
This API password is used as input when your application authenticates to the API. 
This password is not the same as the password you use to log in to iContact.
---------------
Where can I find my LIST NAME?
https://app.icontact.com/icp/core/mycontacts/lists
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
$IC_APP_ID    = "";
$IC_API_USER  = "";
$IC_API_PWD   = "";
$IC_LIST_NAME = "";


/*
CONSTANT CONTACT SETTINGS
---------------
Where can I find my API KEY & ACCESS TOKEN? 
http://developer.constantcontact.com/home/api-keys.html
https://constantcontact.mashery.com/page
---------------
Where can I find my list Name
https://ui.constantcontact.com/rnavmap/distui/contacts
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
$CC_API_KEY      = "";
$CC_ACCESS_TOKEN = "";
$CC_LIST_NAME    = "";


/* TEXT FILE SETTINGS
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
// After $_SERVER["DOCUMENT_ROOT"]." , write the path to your .txt to save the emails of the subscribers
$STORE_FILE = "subscription.txt";

