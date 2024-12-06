<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:yusifk88/polls2024.git');
set("branch", "main");

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('138.68.180.185')
    ->set('remote_user', 'root')
    ->set('deploy_path', '/var/www/polls');

// Hooks

after('deploy:failed', 'deploy:unlock');
