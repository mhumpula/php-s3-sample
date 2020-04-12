FROM ubuntu:bionic-20200311

COPY php/suryphp.bionic.list /etc/apt/sources.list.d/suryphp.list
COPY php/suryphp.bionic.gpg /etc/apt/trusted.gpg.d/suryphp.gpg

RUN apt-get update \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y \
       git \
       openssh-client \
       php7.4-cli \
       php7.4-xml \
       unzip \
    && apt-get clean

COPY php/install_composer.php /tmp/install_composer.php
RUN php /tmp/install_composer.php && rm /tmp/install_composer.php

WORKDIR /app

COPY composer.json /app
RUN composer install
