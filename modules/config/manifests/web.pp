class config::web {
  
  class { 'apache':
    default_vhost => true,
	docroot => '/var/www/aon-demo',
	mpm_module    => 'prefork',
  }		
  
  package { 'php':
    ensure  => present,
  }
  
  package { 'php-pear':
    ensure  => present,
  }
  
  package { 'php-mysql':
    ensure  => present,
  }
  
  class { 'apache::mod::php': }
}