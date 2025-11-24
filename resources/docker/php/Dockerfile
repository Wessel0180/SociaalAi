# Stage 1: Composer
FROM composer:latest AS composer

# Stage 2: Node.js (latest stable-ish)
# You can pin this, e.g. node:22-alpine
FROM node:alpine AS node

# Stage 3: FrankenPHP base image
FROM dunglas/frankenphp:php8.2-alpine

ARG PUID=1000
ARG PGID=1000

# Copy Composer binary
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Copy Node.js + npm from the Node stage
COPY --from=node /usr/local/bin/node /usr/local/bin/node
COPY --from=node /usr/local/lib/node_modules /usr/local/lib/node_modules

# Make npm and npx available on PATH
RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm \
 && ln -s /usr/local/lib/node_modules/npm/bin/npx-cli.js /usr/local/bin/npx

# Install git and PHP extensions
RUN apk add --no-cache git \
 && install-php-extensions \
      opcache \
      intl \
      pdo_pgsql \
      pcov
