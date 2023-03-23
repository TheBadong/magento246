FROM php:8.1-fpm
RUN apt-get update && apt-get install -y \
    cron \
    default-mysql-client \
    git \
    gnupg \
    gzip \
    wget \
    libbz2-dev \
    libfreetype6-dev \
    libicu-dev \
    libjpeg62-turbo-dev \
    libmagickwand-dev \
    libmcrypt-dev \
    libonig-dev \
    libpng-dev \
    libsodium-dev \
    libssh2-1-dev \
    libwebp-dev \
    libxslt1-dev \
    libzip-dev \
    lsof \
    mailutils \
    msmtp \
    procps \
    vim \
    zip \
    default-jdk \
    default-jre \
    net-tools \
    vim \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure \
    gd --with-freetype --with-jpeg --with-webp \
  && docker-php-ext-install \
    bcmath \
    calendar \
    exif \
    gd \
    gettext \
    intl \
    mbstring \
    mysqli \
    opcache \
    pcntl \
    pdo_mysql \
    soap \
    sockets \
    sodium \
    sysvmsg \
    sysvsem \
    sysvshm \
    xsl \
    zip

RUN pecl channel-update pecl.php.net && pecl install \
    imagick \
    redis \
    ssh2-1.3.1 \
    xdebug \
  && pecl clear-cache \
  && rm -rf /tmp/pear \
  && docker-php-ext-enable \
      imagick \
      redis \
      ssh2 \
      xdebug \
  && sed -i -e 's/^zend_extension/\;zend_extension/g' /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini


RUN curl -sS https://getcomposer.org/installer | \
  php -- --install-dir=/usr/local/bin --filename=composer


RUN wget https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64 \
    && chmod +x mhsendmail_linux_amd64 \
    &&  mv mhsendmail_linux_amd64 /usr/local/bin/mhsendmail

COPY conf/php.ini /usr/local/etc/php/



WORKDIR /var/www/magento