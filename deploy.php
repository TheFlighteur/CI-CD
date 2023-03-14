<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:TheFlighteur/CI-CD.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('dev-vps.aasp30s.fr')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/CI-CD');

// Hooks

after('deploy:failed', 'deploy:unlock');
