[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?style=flat)](https://github.com/ellerbrock/open-source-badges/)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg?logo=github&color=%23F7DF1E)](https://github.com/devancakra/Cryptodax-Bot)
![GitHub last commit](https://img.shields.io/github/last-commit/devancakra/Cryptodax-Bot)
![PHP](https://img.shields.io/badge/-PHP-grey.svg?&logo=PHP&logoColor=white)

# Cryptodax-Bot
<strong>API Programming Assignment</strong><br>
Indodax Cryptocurrency Reading Through PHP-Based Telegram Bot

<br><br>

## Project Requirements
| Part | Description |
| --- | --- |
| Features | Read, Error Handling |
| Code | PHP |
| Framework | Botman |
| Tools | XAMPP (PHP Version 7.4) & Ngrok |

<br><br>

## Download & Install
1. XAMPP with PHP version 7.4

   <table><tr><td width="810">

   ```
   https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.30/xampp-windows-x64-7.4.30-1-VC15-installer.exe/download
   ```

   </td></tr></table><br>

2. Ngrok

   <table><tr><td width="810">
      
   ```
   https://bin.equinox.io/c/bNyj1mQVY4c/ngrok-v3-stable-windows-amd64.zip
   ```

   </td></tr></table><br>

3. Composer

   <table><tr><td width="810">
      
   ```
   https://getcomposer.org/Composer-Setup.exe
   ```

   </td></tr></table><br>

4. Git 

   <table><tr><td width="810">
      
   ```
   https://git-scm.com/download/win
   ```

   </td></tr></table>
    
<br><br>

## Get Started
1. Download this repository and extract it.<br><br>

2. Move the ``` Cryptodax-Bot ``` directory into the ``` htdocs ``` directory, whose details you can find out as follows: ``` C:\xampp\htdocs ```.<br><br>
   
3. Open ``` XAMPP ```, then start the ``` Apache ``` section.<br><br>

4. Create an Ngrok account first on the following page: <strong>https://dashboard.ngrok.com/login</strong>.<br><br>

5. Connect the ngrok account in the following way:

   <table><tr><td width="810">

   ```bash
   ngrok config add-authtoken [YOUR NGROK AUTHTOKEN]
   ```

   </td></tr></table><br>

6. Open the ``` ngrok.yml ``` file in the ``` C:\Users\[User Name]\AppData\Local\ngrok ``` directory, then set the tunnels to be used for multiple ports in one go by writing this command in it:

   <table><tr><td width="810">

   ```bash
   version: "2"
   authtoken: [YOUR NGROK AUTHTOKEN]
   tunnels:
     tunnel-1:
       proto: http
       addr: 80
       schemes: ["https"]
     tunnel-2:
       proto: http
       addr: 80
       schemes: ["http", "https"]
   ```

   </td></tr></table><br>
   
7. Type the following command into ``` NGROK.exe ``` and press enter:

   <table><tr><td width="810">

   ```bash
   ngrok start --all
   ```

   </td></tr></table><br>

8. Copy your ``` Telegram Bot API ``` from ``` @BotFather ``` and paste it into the following folder (directory): ``` Cryptodax-Bot -> private -> token.txt ```.<br><br>

9. Open ``` CMD (Command Prompt) ``` and type the command with the following rules to run the bot:<br>``` curl -d url=[URL Https NGROK]/[Folders If Any]/bot.php -X POST https://api.telegram.org/bot[TOKEN]/setWebhook ```<br><br>

    • Writing example:

   <table><tr><td width="810">
      
    ```bash
    curl -d url=https://e6e5-2001-448a-5021-617-ecb0-7d4d-1d9e-27f2.ngrok-free.app/Cryptodax-Bot/bot.php -X POST https://api.telegram.org/bot1496456979:AAE7MCBAeRznBN3G-E4J65GgVYzHo0oZmog/setWebhook 
    ```
    
    </td></tr></table><br>

    • The result will appear (Bot sign is already working / active):  ``` {"ok":true,"result":true,"description":"Webhook was set"} ```.<br><br>
    
10. If you want to complete the running ``` webhook session ```, then please open the ``` browser ``` by typing the following command:

    <table><tr><td width="810">

    ```bash
    https://api.telegram.org/bot[TOKEN]/setWebhook
    ```

    </td></tr></table>

<br><br>

## Issues that frequently arise
1. The problem that usually occurs with Botman-based telegram bots is when the user has left the bot for a long period of time, this can cause the ``` API Token to expire ```. This problem is usually characterized by an ``` abnormal state of the telegram bot ```, for example when the user gives the command ``` /start ``` or other commands, this bot still does not respond. The solution to this problem is that you ``` only need to create a new telegram bot again ``` (automatically get a new API Token), then for the program code, please set it based on your own needs.
<br>

2. If the problem in point 1 is not resolved, then you should :
   
   • Delete 3 files in the ``` C:\xampp\htdocs\Cryptodax-Bot ``` directory, namely ``` composer.json ```, ``` composer.lock ```, and ``` vendor ```.

   • Install the ``` Botman ``` depedency via ``` GitBash ``` by giving the following command:

   <table><tr><td width="810">

   ```bash
   composer require "botman/driver-telegram"
   ```

   </td></tr></table>

<br><br>

## Highlight
<table>
<tr>
<th colspan="4">Telegram Bot</th>
</tr>
<tr>
<td width="210"><img src="https://github.com/devancakra/Cryptodax-Bot/assets/54527592/a8aa403d-aae6-4fe9-9c6c-6f217ed599a5" alt="TGbot-1"></td>
<td width="210"><img src="https://github.com/devancakra/Cryptodax-Bot/assets/54527592/7bffc607-0692-4b7a-9fd7-8ec2ce848e5d" alt="TGbot-2"></td>
<td width="210"><img src="https://github.com/devancakra/Cryptodax-Bot/assets/54527592/b0dc2f06-5abc-46a1-9fac-68e7432c0225" alt="TGbot-3"></td>
<td width="210"><img src="https://github.com/devancakra/Cryptodax-Bot/assets/54527592/2435cdd7-86b5-4a4e-9935-08d6410a93ea" alt="TGbot-4"></td>
</tr>
<tr>
<td width="210"><img src="https://github.com/devancakra/Cryptodax-Bot/assets/54527592/b3fe335d-e733-4fa2-b626-5fbe13dd754d" alt="TGbot-5"></td>
<td width="210"><img src="https://github.com/devancakra/Cryptodax-Bot/assets/54527592/8a961333-602e-4329-a447-922b45a8b4cf" alt="TGbot-6"></td>
<td width="210"><img src="https://github.com/devancakra/Cryptodax-Bot/assets/54527592/bd00baa9-f206-4aa8-b596-58ac9427368f" alt="TGbot-7"></td>
<td width="210"><img src="https://github.com/devancakra/Cryptodax-Bot/assets/54527592/da6a2b20-cef6-47af-8d0c-e3f82cdaf24b" alt="TGbot-8"></td>
</tr>
<tr>
<td width="210"><img src="https://github.com/devancakra/Cryptodax-Bot/assets/54527592/11320b99-8ea1-4930-9f60-82f83e4647e0" alt="TGbot-9"></td>
<td width="210"><img src="https://github.com/devancakra/Cryptodax-Bot/assets/54527592/f889ff7a-45cf-407c-9d71-bb3511802f4b" alt="TGbot-10"></td>
<td width="210"><img src="https://github.com/devancakra/Cryptodax-Bot/assets/54527592/c845b3ea-7638-4b44-a5be-699a18fd5ab2" alt="TGbot-11"></td>
<td width="210"><img src="https://github.com/devancakra/Cryptodax-Bot/assets/54527592/60eff8ad-5fd8-4865-a113-af107e5edb23" alt="TGbot-12"></td>
</tr>
</table>

<br><br>

## Demonstration of Application
Via Telegram: <a href="http://t.me/cryptodax_bot">@cryptodax_bot</a>

<br><br>

## Appreciation
If this work is useful to you, then support this work as a form of appreciation to the author by clicking the ``` ⭐Star ``` button at the top of the repository.

<br><br>

## Disclaimer
This application has been created by including third-party sources. Third parties here are service providers, whose services are in the form of libraries, frameworks, and others. I thank you very much for the service. It has proven to be very helpful and implementable.

<br><br>

## LICENSE
MIT License - Copyright © 2020 - Devan Cakra Mudra Wijaya

Permission is hereby granted without charge to any person obtaining a copy of this software and the software-related documentation files to deal in them without restriction, including without limitation the right to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons receiving the Software to be furnished therewith on the following terms:

The above copyright notice and this permission notice must accompany all copies or substantial portions of the Software.

IN ANY EVENT, THE AUTHOR OR COPYRIGHT HOLDER HEREIN RETAINS FULL OWNERSHIP RIGHTS. THE SOFTWARE IS PROVIDED AS IS, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, THEREFORE IF ANY DAMAGE, LOSS, OR OTHERWISE ARISES FROM THE USE OR OTHER DEALINGS IN THE SOFTWARE, THE AUTHOR OR COPYRIGHT HOLDER SHALL NOT BE LIABLE, AS THE USE OF THE SOFTWARE IS NOT COMPELLED AT ALL, SO THE RISK IS YOUR OWN.
