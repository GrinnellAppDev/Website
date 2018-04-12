# Website

The informational website for Grinnell AppDev

## Development Environment

The site is static generally static. It is intended to run on an Apache
server. To test the site, first build it with `yarn build --no-optimize`.
Then install [Docker](https://www.docker.com/get-docker), then run
`docker-compose up` in the project root, which will create an Apache
container with PHP support.

*   To automatically rebuild when files are changed, run `yarn start`. This skips
    optimizations because they are slow.
*   To build with production optimizations, run `yarn build`. Optimization is
    slow, so you generally only want to do this to make sure the optimization
    hasn't broken your code.

## Production Environment

Run `yarn build`, then configure your Apache server with `www` as the
document root. Be sure to add an `Include` directive for `conf/site.conf` in
your virtual host configuration. `conf/docker-apache.conf` is a good example
of a super basic virtual host config that does this.
