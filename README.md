# Sen Yai API Guide
### <i>Here is how you set up the Sen Yai API on macOS:</i>
First, you must install Homebrew if you don't have it, like so:
```bash
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```
Next, you must install PHP 8.4 (we tested it with 8.4) like so from Homebrew:
```bash
brew install php@8.4
```
Or the latest build if you desire:
```bash
brew install php
```
Then, host the server with PHP (replace ```yourfolder``` with the actual folder name where you wish to place senyai.php):
```bash
cd yourfolder
php -S 127.0.0.1:8000 -t .
```
Once you do that, test it with this Scratch code (you can use Windows if you're a masochist, but this PHP server is designed for *NIX systems, especially macOS, but you are free to fork the code and modify the Scratch example to your needs as long as you follow the API schema, but make sure to provide and/or change the sounds):

<img src="https://raw.githubusercontent.com/PearComputer/Sen-Yai-API/main/senyai-api-test.png" width="200" />
