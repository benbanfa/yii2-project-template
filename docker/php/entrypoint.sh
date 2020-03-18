#!/bin/sh
set -e

crontab -u dev /usr/local/etc/cron/app

exec "$@"
