[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?style=flat)](https://github.com/ellerbrock/open-source-badges/)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg?logo=github&color=%23F7DF1E)](https://opensource.org/licenses/MIT)
![GitHub last commit](https://img.shields.io/github/last-commit/devancakra/Cryptodax-Bot?logo=Codeforces&logoColor=white&color=%23F7DF1E)
![Project](https://img.shields.io/badge/Project-Multi-%2DPlatform-light.svg?style=flat&logo=googlechrome&logoColor=white&color=%23F7DF1E)
![Type](https://img.shields.io/badge/Type-Campus%20Assignment-light.svg?style=flat&logo=gitbook&logoColor=white&color=%23F7DF1E)

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
   https://bit.ly/XAMPP_PHP7_Installer
   ```

   </td></tr></table><br>

2. Ngrok

   <table><tr><td width="810">
      
   ```
   https://bit.ly/NGROK_Installer
   ```

   </td></tr></table><br>

3. Composer

   <table><tr><td width="810">
      
   ```
   https://bit.ly/Composer_Installer
   ```

   </td></tr></table><br>

4. Git 

   <table><tr><td width="810">
      
   ```
   https://bit.ly/GIT_Installer
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
<td width="210"><img src="documentation/Telegram Bot View-1.jpg" alt="telegram-bot-1"></td>
<td width="210"><img src="documentation/Telegram Bot View-2.jpg" alt="telegram-bot-2"></td>
<td width="210"><img src="documentation/Telegram Bot View-3.jpg" alt="telegram-bot-3"></td>
<td width="210"><img src="documentation/Telegram Bot View-4.jpg" alt="telegram-bot-4"></td>
</tr>
<tr>
<td width="210"><img src="documentation/Telegram Bot View-5.jpg" alt="telegram-bot-5"></td>
<td width="210"><img src="documentation/Telegram Bot View-6.jpg" alt="telegram-bot-6"></td>
<td width="210"><img src="documentation/Telegram Bot View-7.jpg" alt="telegram-bot-7"></td>
<td width="210"><img src="documentation/Telegram Bot View-8.jpg" alt="telegram-bot-8"></td>
</tr>
<tr>
<td width="210"><img src="documentation/Telegram Bot View-9.jpg" alt="telegram-bot-9"></td>
<td width="210"><img src="documentation/Telegram Bot View-10.jpg" alt="telegram-bot-10"></td>
<td width="210"><img src="documentation/Telegram Bot View-11.jpg" alt="telegram-bot-11"></td>
<td width="210"><img src="documentation/Telegram Bot View-12.jpg" alt="telegram-bot-12"></td>
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
This application is my own work and is not the result of plagiarism from other people's research or work, except those related to third party services which include: libraries, frameworks, and so on.

<br><br>

## LICENSE
MIT License - Copyright © 2020 - Devan C. M. Wijaya

Permission is hereby granted without charge to any person obtaining a copy of this software and the software-related documentation files to deal in them without restriction, including without limitation the right to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons receiving the Software to be furnished therewith on the following terms:

The above copyright notice and this permission notice must accompany all copies or substantial portions of the Software.

IN ANY EVENT, THE AUTHOR OR COPYRIGHT HOLDER HEREIN RETAINS FULL OWNERSHIP RIGHTS. THE SOFTWARE IS PROVIDED AS IS, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, THEREFORE IF ANY DAMAGE, LOSS, OR OTHERWISE ARISES FROM THE USE OR OTHER DEALINGS IN THE SOFTWARE, THE AUTHOR OR COPYRIGHT HOLDER SHALL NOT BE LIABLE, AS THE USE OF THE SOFTWARE IS NOT COMPELLED AT ALL, SO THE RISK IS YOUR OWN.
