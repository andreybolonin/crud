FROM php:8.3

# Install MariaDB client
# Install necessary extensions
RUN apt-get update && apt-get install -y libpq-dev mariadb-client
RUN docker-php-ext-install pdo pdo_pgsql pdo_mysql

# [Optional] Uncomment this section to install additional OS packages.
# RUN apt-get update && export DEBIAN_FRONTEND=noninteractive \
#     && apt-get -y install --no-install-recommends <your-package-list-here>

# [Optional] Uncomment this line to install global node packages.
# RUN su vscode -c "source /usr/local/share/nvm/nvm.sh && npm install -g <your-package-here>" 2>&1

