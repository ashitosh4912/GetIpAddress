#How-to-Get-IP-Address-browser-OS-of-User-in-PHP
Getting The Client Information (Client's IP Address,Operating System,Browser Name,Device Type) in PHP


user's Information
Getting The Client Information (Client's IP Address,Operating System,Browser Name,Device Type) in PHP
Initialize
include('UserInformation.php');
//Or Use Require function
require('UserInformation.php');
Methods
get_ip()
get_os()
get_browser()
get_device()
get_ip()

If you want to get the client IP Address, Use this Method, This Method will return Client IP Address
Example
require('user_info.php');
echo UserInfo::get_ip()
get_OS()

If you want to get the client Operating System Name, Use this Method, This Method will return Client Operating System
Example
require('user_info.php');
echo UserInfo::get_os();
get_Browser()

If you want to get the client's Browser Name, Use this Method, This Method will return Client's Browser Name
Example
require('user_info.php');
echo UserInfo::get_browser();

get_Device()
If you want to get the client's Device Type Then Use this Method, This Method will return Client's Device Type Name Such as Mobile,Tablet,Computer
Example
require('user_info.php');
echo UserInfo::get_device();
