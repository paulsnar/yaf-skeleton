# yaf-skeleton

A skeleton that can be used via [Composer][] to create a new [Yaf][]-backed
project.

[Composer]: https://getcomposer.org/
[Yaf]: https://github.com/paulsnar/yaf

Currently neither Yaf nor this skeleton is published to Packagist, so instead
the Github repo is used as a Composer repository reference for both Yaf and the
skeleton.

## Usage

    $ composer create-project \
        --repository='{"type":"vcs","url":"https://github.com/paulsnar/yaf-skeleton.git"} \
        paulsnar/yaf-skeleton . '~0.1.0'

This will clone the project skeleton unto the current directory, as well as
install all the dependencies.

Afterwards, the `src` directory is yours to explore!

To run a local server, from the project directory run:

    $ php -S 127.0.0.1:8081 -t public public/index.php

Then visit `localhost:8081` in your browser.

## License

[BSD 0-clause](./LICENSE.txt)

This code can be used and/or modified without the copyright notice being
attached.
