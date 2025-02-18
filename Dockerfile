# Dockerfile
ARG PHP_VERSION=8.2
FROM php:${PHP_VERSION}

# Install necessary tools
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Command to keep the container running for CLI development
CMD ["php", "-a"]
