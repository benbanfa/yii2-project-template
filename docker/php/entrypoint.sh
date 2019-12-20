#!/bin/sh
set -e

crontab -u dev /code/docker/php/crontab

exec "$@"
