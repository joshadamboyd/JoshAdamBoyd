# JoshAdamBpyd

Wordpress theme. Using Docker

## Requirements

* Docker
  * For Mac, download [Docker for Mac](https://www.docker.com/docker-mac)
* Yarn
  * For Mac, Install with [Homebrew](https://brew.sh/) with `brew install yarn`

## Setup

```shell
yarn
```

## Running

Start the Docker container

```shell
docker-compose up
```

Stop and remove the Docker containers

```shell
docker-compose down
```

## Assets

Build assets and watch for changes to recompile

```shell
gulp
```

Build assets but do not watch for changes

```shell
gulp build
```

## Contributing

1.  Fork it ([https://github.com/joshadamboyd/joshadamboyd/fork](https://github.com/joshadamboyd/joshadamboyd/fork))
2.  Create your feature branch (`git checkout -b my-new-feature`)
3.  Commit your changes (`git commit -am 'Add some feature'`)
4.  Push to the branch (`git push origin my-new-feature`)
5.  Create a new Pull Request
