<?php
# webhook for project deployment
if ($_GET['token'] === 'secret_key') {
$cmd = shell_exec("rm -rf github-cpanel-sample
&& git clone https://developerToken@github.com/QGeekDev/github-cpanel-sample.git
&& rm -rf github-cpanel-sample/.git
);
echo $cmd;
echo 'Deployment sucess';
} else {
echo 'Error';
}

?>