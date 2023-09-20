<?php
$CONFIG = array (
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'filelocking.enabled' => true,
  'memcache.locking' => '\OC\Memcache\Redis',
  'redis' => array(
     'host' => '/var/run/redis/redis.sock',
     'port' => 6379,
     'timeout' => 0.0,
      ),
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'ocsw3xjw3ui5',
  'passwordsalt' => 'ZFu/2VcK/wcZ+dnBuusDxkEbBxnHFi',
  'secret' => 'CV7iV7EeuLgvgIfS1SdFA/feeU53YXg+jpc7trsjbnH0v6yV',
  'trusted_domains' => 
  array (
    0 => 'nextcloud',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '27.0.2.1',
  'dbname' => 'solanteq',
  'dbhost' => 'postgresql',
  'dbport' => '5432',
  'dbpassword' => 'SomePass123@',
  'installed' => true,
  'overwritehost' => 'nextcloud',
  'overwrite.cli.url' => 'nextcloud',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'oc_solanteq_user',
  'installed' => true,
  'config_is_read_only' => true,
  'default_phone_region' => 'RU',
  'mail_from_address' => 'no-reply',
  'mail_smtpmode' => 'smtp',
  'mail_sendmailmode' => 'smtp',
  'mail_domain' => 'example.com',
  'mail_smtphost' => 'mailhog',
  'mail_smtpport' => '1025',
);
