# aimee.today.bw

### Requirements

* If you're on OS X or Linux you probably already have **Ruby** installed; test with `ruby -v` in Terminal.
* When you've confirmed you have Ruby installed, run `sudo gem install sass` to install **Sass**.
* If it doesn't work, you probably need to install the XCode command line tools: `xcode-select --install` (see https://forum.freecodecamp.org/t/solved-sass-install-issue-mac-os-sierra/140706/8), then try `sudo gem install sass` again

### Compiling CSS

1. Open the `grunt` folder in Terminal, and run `npm install`
2. Run `grunt` to wake up Grunt, which will watch the `_sass` folder for changes and compile a new version of `main.css` into the `css` folder
