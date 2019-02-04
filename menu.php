<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
$rootFolder    = 'PHP-HAOTIAN-ZHANG';
$indexClass    = ($_SERVER['SCRIPT_NAME'] == '/PHP-HAOTIAN-ZHANG/index.php') ? 'class="active"' : '';
$newAgentClass = ($_SERVER['SCRIPT_NAME'] == '/PHP-HAOTIAN-ZHANG/agentPage/newAgentInsert.php') ? 'class="active"' : '';
$linksClass    = ($_SERVER['SCRIPT_NAME'] == '/PHP-HAOTIAN-ZHANG/linksPage/links.php') ? 'class="active"' : '';
$registerClass = ($_SERVER['SCRIPT_NAME'] == '/PHP-HAOTIAN-ZHANG/registerPage/register.php') ? 'class="active"' : '';
$contactClass  = ($_SERVER['SCRIPT_NAME'] == '/PHP-HAOTIAN-ZHANG/contactPage/contact.php') ? 'class="active"' : '';

echo ("
<nav class='nav'>
    <ul>
        <li>
            <a $indexClass href='/PHP-HAOTIAN-ZHANG/index.php'>Home</a>
        </li>
        <li>
            <a $linksClass href='/PHP-HAOTIAN-ZHANG/linksPage/links.php'>Links</a>
        </li>
        <li>
            <a $registerClass href='/PHP-HAOTIAN-ZHANG/registerPage/register.php'>Registration</a>
        </li>
        <li>
            <a $newAgentClass href='/PHP-HAOTIAN-ZHANG/agentPage/newAgentInsert.php'>newAgent</a>
        </li>
        <li>
            <a $contactClass href='/PHP-HAOTIAN-ZHANG/contactPage/contact.php'>Contact Us</a>
        </li>");
        
// show login/logout button
if (isset($_SESSION['login'])) {
    echo ("
        <li class='ultity'>
        <a href='/PHP-HAOTIAN-ZHANG/Functions/logoutFunction.php'>Logout</a>
        </li>");
} else {
    echo ("
        <li class='ultity'>
            <a href='/PHP-HAOTIAN-ZHANG/loginPage/login.php'>Login</a>
        </li>");
}
echo ("</ul></nav>")
?>
