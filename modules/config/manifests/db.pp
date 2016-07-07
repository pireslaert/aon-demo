class config::db {

 class { '::mysql::server':
  root_password           => 'root',
  remove_default_accounts => false,
  override_options        => $override_options
 } 
  
}