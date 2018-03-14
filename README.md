# JoshAdamBpyd

Wordpress theme with Docker

## Requirements

- Docker
- NPM
- Yarn

## Setup

```
$ yarn
```

## Running

Start Docker containers to test the theme

```
$ docker-compose up --build
```

Stop and remove the Docker containers

```
$ docker-compose down
```

## Assets

Build assets and watch for changes to recompile

```
$ gulp
```

Build assets but do not watch for changes

```
$ gulp build
```

## Contributing

1.  Fork it ([https://github.com/joshadamboyd/joshadamboyd/fork](https://github.com/joshadamboyd/joshadamboyd/fork))
2.  Create your feature branch (`git checkout -b my-new-feature`)
3.  Commit your changes (`git commit -am 'Add some feature'`)
4.  Push to the branch (`git push origin my-new-feature`)
5.  Create a new Pull Request
