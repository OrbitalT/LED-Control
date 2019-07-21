# LED-Control

Control an LED Strip with a raspberry pi using IFTTT, Google assistant and a custom web UI.

## Before Notice

This build tutorial is for advanced users, things to know before starting are flashing a raspberry pi with a headless OS (Raspbian Buster Lite) usage of Linux and soldering.

## Things you need

1. Raspberry Pi Zero W (or any other pi but I will be using the zero in this example)
https://www.adafruit.com/product/3400

2. IRLZ34N MOSFET (I got a pack of 20 from amazon)
http://www.irf.com/product-info/datasheets/data/irlz34n.pdf

3. 12V DC power supply (for short LED strips a 3A supply will do but usage will vary for longer)

4. Power Jack (Must fit power supply)
https://www.amazon.com/5-5mm-2-1mm-Female-Connector-Camera/dp/B005CMP434/ref=as_li_ss_tl?ie=UTF8&linkCode=sl1&tag=dordnung08-20&linkId=42e6fe7fb2089e4379a3c25d8bf37971

5. A high gauge of wire (different colored wires make this easier)
https://www.amazon.com/Electrical-Wire/b?ie=UTF8&node=495310

6. LED Strip (This project uses standard 5050 SMD RGB LEDs this strip DOES NOT allow for individual addressable LEDs)
https://www.amazon.com/gp/product/B01MQSKVI2/ref=crt_ewc_title_ld_2?ie=UTF8&psc=1&smid=A3QAWKW1O2SEC3

Optionl

A case (I will be making a new case for 3D printing)

Breadboard

Jumper cables

## Setup (Hardware)

![Wire Guild](https://raw.githubusercontent.com/PROFESSOREGGMAN/LED-Control/master/img/wire.jpg)

## Setup (Software)

Make sure the Pi is updated and Rebooted

Install apache2
``
sudo apt install apache2 -y
``

Give file ownership
``
sudo usermod -a -G www-data pi
sudo chown -R -f www-data:www-data /var/www/html
``

Install PHP7
``
sudo apt install php7.3 php7.3-mbstring php7.3-mysql php7.3-curl php7.3-gd php7.3-curl php7.3-zip -y
``

Install PiGPIO
``
sudo apt install pigpio
``

Test to make sure it all works by running
``
sudo pigpiod //start

pigs p 17 255 //red
pigs p 22 255 //green
pigs p 24 255 //blue
``

cd to html folder
``
cd /var/www/html/
``

This next part can be done 2 ways, 1st way is to use Filezilla and add the files to the html folder (recommended) the 2nd way is to clone the repository and move all the files from the command line.

There are 2 folders 1v and 2v, 1v is a very compact way of controlling the LED strip with just 1 page of php but this didn't allow the use of IFTTT. 2v is a modified version but can be used with IFTTT.

1v is easy to set up, all you need to do is move all 5 files to the html folder get the pi's ip and push on

## Contributing

Pull requests are welcome. My code is not perfect and any updates that could improve it are welcome.

## License

MIT License

Copyright (c) 2019 NukeZ

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
