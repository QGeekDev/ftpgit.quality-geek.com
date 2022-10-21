<?php
# webhook for project deployment
if ($_GET['token'] === 'secret_key') {
$cmd = shell_exec("rm -rf my-php-deploy
&& git clone https://developerToken@github.com/QGeekDev/github-cpanel-sample.git
&& rm -rf my-php-deploy/.git
);
echo $cmd;
echo 'Deployment sucess';
} else {
echo 'Error';
}

?>