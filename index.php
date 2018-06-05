<?php
$oauthToken = $_GET['oauth_token'];
$oauthVerifier = $_GET['oauth_verifier'];
$url	= "tweetfeed://userAuth";
if ($oauthToken && $oauthVerifier)
{
	$url .= "?oauth_token=" . $oauthToken;
	$url .= "&oauth_verifier=" . $oauthVerifier;
}
else
{
	$url .= "?no";
}
header("Location: " . $url);
?>
