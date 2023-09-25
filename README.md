<!--
SPDX-FileCopyrightText: carlos <idrisscarlosid1@gmail.com>
SPDX-License-Identifier: CC0-1.0
-->

# Stopwatch Widget
installation
1. Download docker desktop
2. create a file called docker-compose.yml
3. paste this in the file:

version: '3.8'

services:
  nextcloud:
    image: nextcloud:latest
    ports:
      - "8080:80"
  db:
    image: mariadb
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_USER: nextcloud
      MYSQL_PASSWORD: nextcloud
      MYSQL_DATABASE: nextcloud

4. run the command docker-compose up
5. download the file of this project
6. add them in a folder with the name stopwatchwidget
7. add the folder inside the folder Apps of docker  , you can find it in var/wwww/html
8. Enable the app
