# Define the PHP and Artisan command
PHP = php
ARTISAN = $(PHP) artisan

# Default target
all: help

# Command to install dependencies
install:
    composer install
    npm install
    npm run dev
    $(ARTISAN) key:generate
    $(ARTISAN) migrate --seed

# Start Laravel development server
serve:
    $(ARTISAN) serve

# Run database migrations
migrate:
    $(ARTISAN) migrate

# Rollback migrations
rollback:
    $(ARTISAN) migrate:rollback

# Clear cache
clear:
    $(ARTISAN) cache:clear
    $(ARTISAN) config:clear
    $(ARTISAN) route:clear
    $(ARTISAN) view:clear

# Show available commands
help:
    @echo "Available commands:"
    @echo "  make install   - Install dependencies and setup Laravel"
    @echo "  make serve     - Start the Laravel development server"
    @echo "  make migrate   - Run migrations"
    @echo "  make rollback  - Rollback the last migration"
    @echo "  make clear     - Clear application cache"

