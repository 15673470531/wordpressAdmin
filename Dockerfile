# 使用官方的PHP镜像作为基础镜像
FROM php:7.4-apache

# 设置工作目录
WORKDIR /var/www/html

# 将项目文件复制到容器中
COPY . .

# 安装项目所需的依赖
RUN apt-get update && apt-get install -y \
        git \
        curl \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        zip \
        unzip \
        vim \
        bash \
        iputils-ping \
    && docker-php-ext-install mysqli pdo pdo_mysql mbstring exif pcntl bcmath gd

# 暴露端口
EXPOSE 80

# 启动Apache服务
CMD ["apache2-foreground"]
