<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.4.201';

// Database
$Configuration['Database']['Name'] = 'vanilla';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'vanilla';
$Configuration['Database']['Password'] = 'BeTWa965!$';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['recaptcha'] = true;
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['stubcontent'] = true;
$Configuration['EnabledPlugins']['swagger-ui'] = true;
$Configuration['EnabledPlugins']['Quotes'] = true;
$Configuration['EnabledPlugins']['ProfileExtender'] = true;
$Configuration['EnabledPlugins']['Flagging'] = true;
$Configuration['EnabledPlugins']['GooglePlus'] = false;
$Configuration['EnabledPlugins']['IndexPhotos'] = true;
$Configuration['EnabledPlugins']['ButtonBar'] = true;
$Configuration['EnabledPlugins']['editor'] = true;
$Configuration['EnabledPlugins']['RoleTitle'] = true;

// Garden
$Configuration['Garden']['Title'] = 'Lost Instinct Forums';
$Configuration['Garden']['Cookie']['Salt'] = 'SpnalsuVTaXLf2MZ';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Basic';
$Configuration['Garden']['Registration']['InviteExpiration'] = '1 week';
$Configuration['Garden']['Registration']['InviteRoles'][3] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][4] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][8] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][32] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][16] = '0';
$Configuration['Garden']['Email']['SupportName'] = 'Lost Instinct Forums';
$Configuration['Garden']['Email']['Format'] = 'text';
$Configuration['Garden']['Email']['SupportAddress'] = 'no-reply@lostinstinct.net';
$Configuration['Garden']['Email']['UseSmtp'] = '1';
$Configuration['Garden']['Email']['SmtpHost'] = 'smtp.sendgrid.net';
$Configuration['Garden']['Email']['SmtpUser'] = 'apikey';
$Configuration['Garden']['Email']['SmtpPassword'] = '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';
$Configuration['Garden']['Email']['SmtpPort'] = '465';
$Configuration['Garden']['Email']['SmtpSecurity'] = 'ssl';
$Configuration['Garden']['Email']['OmitToName'] = false;
$Configuration['Garden']['SystemUserID'] = '1';
$Configuration['Garden']['InputFormatter'] = 'BBCode';
$Configuration['Garden']['Version'] = 'Undefined';
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['Installed'] = true;
$Configuration['Garden']['DefaultAvatar'] = 'defaultavatar/EY79KCI760F6.jpg';
$Configuration['Garden']['Thumbnail']['Size'] = '120';
$Configuration['Garden']['Profile']['MaxWidth'] = '560';
$Configuration['Garden']['Profile']['MaxHeight'] = '560';
$Configuration['Garden']['HomepageTitle'] = 'Lost Instinct';
$Configuration['Garden']['Description'] = 'This is the Official Forums for all game under Lost Instinct!';
$Configuration['Garden']['Logo'] = '';
$Configuration['Garden']['MobileLogo'] = '';
$Configuration['Garden']['FavIcon'] = '';
$Configuration['Garden']['TouchIcon'] = '';
$Configuration['Garden']['ShareImage'] = '';
$Configuration['Garden']['MobileAddressBarColor'] = '';
$Configuration['Garden']['Theme'] = 'basicdark';
$Configuration['Garden']['MobileInputFormatter'] = 'TextEx';
$Configuration['Garden']['AllowFileUploads'] = true;
$Configuration['Garden']['InstallationID'] = '3B5C-E45BF214-76B2F460';
$Configuration['Garden']['InstallationSecret'] = '2eb569dc81dab91eeb7c156e8a13fa9b2f898d13';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['GettingStarted']['Profile'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['editor']['ForceWysiwyg'] = '1';

// Recaptcha
$Configuration['Recaptcha']['PrivateKey'] = '6LcIJ4MUAAAAAJHTLF6dny_tNirB0JvSGeB3WsRD';
$Configuration['Recaptcha']['PublicKey'] = '6LcIJ4MUAAAAAOjNCVv-hKDdTe7PbZPuyjGd7403';

// Routes
$Configuration['Routes']['YXBwbGUtdG91Y2gtaWNvbi5wbmc='] = array (
  0 => 'utility/showtouchicon',
  1 => 'Internal',
);
$Configuration['Routes']['DefaultController'] = array (
  0 => 'categories',
  1 => 'Internal',
);

// Tagging
$Configuration['Tagging']['Discussions']['Enabled'] = true;

// Vanilla
$Configuration['Vanilla']['Version'] = '2.4.201';
$Configuration['Vanilla']['Discussions']['Layout'] = 'modern';
$Configuration['Vanilla']['Categories']['Layout'] = 'modern';

// Last edited by Unknown (131.156.156.239) 2019-03-29 15:21:25