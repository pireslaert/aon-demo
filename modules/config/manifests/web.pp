class config::web {
  
  class { 'apache':
    default_vhost => true,
	mpm_module    => 'prefork',
  }		
  
  package { 'php':
    ensure  => present,
  }
  
  package { 'php-pear':
    ensure  => present,
  }
  
  class { 'apache::mod::php': }
}