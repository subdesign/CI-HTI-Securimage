# Codeigniter "How-to-implement" series part 1 - *SECURIMAGE*

*This series objective is to demonstrate how to implement several libraries into Codeigniter*

***

#### Securimage is a PHP library that allows you to generate complex captcha code for your forms.

## 1. Requirements

Download SecurImage PHP library from [http://www.phpcaptcha.org/download/](http://www.phpcaptcha.org/download/) or use the one that included.  
JQuery - latest version 

## 2. Installation

Copy the files into the corresponding folders

## 3. Setup

Open the config file, and modify as you want the settings. I've created three level of difficuly pre-sets: easy, medium, hard, the first is the easiet to guess, the last is the hardest. 

If you comment out line #54 in the Secureimagetest controller, you'll have a math captcha like 5 + 4 or similar, and the user has to solve this simple equation.

    //$img->captcha_type = Securimage::SI_CAPTCHA_MATHEMATIC;

If you want to change the captcha's background, check out the securimage/background folder, and replace the filename on line #56.
    
    $img->show(APPPATH . 'libraries/securimage/backgrounds/bg6.png');

## 4. Usage

Clicking on the Reload link will generate a new code.

## 5. Notes

It doesn't implement audio, only visual captcha.

## 6. Author

The solution provided by Barna Szalai <b.sz@devartpro.com>