## To run:

Web browsers don't understand PHP directly. It is needed to use a web server such as Apache or Nginx for it to interpret the code and send it to the browser.

In my case, I used XAMPP, which includes Apache and many other programs all together in the same bundle. I downloaded it from [here](https://www.apachefriends.org/download.html).

To be able to render it, move this repo as a folder inside the `htdocs` folder within the `/opt/lampp/` directory.

To see how it would go, there would be the steps.
First we clone the repository:

`git clone https://github.com/Bitcoinera/Mastermind.git`

and move it as I said to the `htdocs` folder:

`sudo mv Mastermind /opt/lampp/htdocs`

Then we start our XAMPP like this:

`sudo /opt/lampp/xampp start`

Now we should be able to render this game at this url: `http://localhost/Mastermind`

The URL is completely dependant on the name of our repo's directory. We can name it like we want, but then keep in mind that the URL will also change.
