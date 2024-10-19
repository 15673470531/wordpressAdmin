# 使用官方的PHP镜像作为基础镜像
FROM php:7.4-apache

# 设置工作目录
WORKDIR /var/www/html

# 将项目文件复制到容器中
COPY . .

RUN #mv /etc/apt/sources.list /etc/apt/sources.list.bak
#RUN echo "deb https://mirrors.tuna.tsinghua.edu.cn/ubuntu/ bionic main restricted universe multiverse" >> /etc/apt/sources.list
#RUN echo "deb https://mirrors.tuna.tsinghua.edu.cn/ubuntu/ bionic-updates main restricted universe multiverse" >>/etc/apt/sources.list
#RUN echo "deb https://mirrors.tuna.tsinghua.edu.cn/ubuntu/ bionic-backports main restricted universe multiverse" >>/etc/apt/sources.list
#RUN echo "deb https://mirrors.tuna.tsinghua.edu.cn/ubuntu/ bionic-security main restricted universe multiverse" >>/etc/apt/sources.list

#RUN sed -i 'deb https://mirrors.tuna.tsinghua.edu.cn/ubuntu/ noble main restricted universe multiverse' /etc/apt/sources.list
#RUN sed -i 'deb https://mirrors.tuna.tsinghua.edu.cn/ubuntu/ noble-updates main restricted universe multiverse' /etc/apt/sources.list
#RUN sed -i 'deb https://mirrors.tuna.tsinghua.edu.cn/ubuntu/ noble-backports main restricted universe multiverse' /etc/apt/sources.list

RUN sed -i "1ideb https://mirrors.aliyun.com/debian/ bullseye main non-free contrib" /etc/apt/sources.list
RUN sed -i "2ideb-src https://mirrors.aliyun.com/debian/ bullseye main non-free contrib" /etc/apt/sources.list
RUN sed -i "3ideb https://mirrors.aliyun.com/debian-security/ bullseye-security main" /etc/apt/sources.list
RUN sed -i "4ideb-src https://mirrors.aliyun.com/debian-security/ bullseye-security main" /etc/apt/sources.list
RUN sed -i "5ideb https://mirrors.aliyun.com/debian/ bullseye-updates main non-free contrib" /etc/apt/sources.list
RUN sed -i "6ideb-src https://mirrors.aliyun.com/debian/ bullseye-updates main non-free contrib" /etc/apt/sources.list
RUN sed -i "7ideb https://mirrors.aliyun.com/debian/ bullseye-backports main non-free contrib" /etc/apt/sources.list
RUN sed -i "8ideb-src https://mirrors.aliyun.com/debian/ bullseye-backports main non-free contrib" /etc/apt/sources.list
RUN sed -i 's/https:\/\/mirrors.aliyun.com/http:\/\/mirrors.cloud.aliyuncs.com/g' /etc/apt/sources.list
#
#RUN sed -i 's/deb.debian.org/mirrors.tuna.tsinghua.edu.cn/g' /etc/apt/sources.list && \
#    sed -i 's/security.debian.org/mirrors.tuna.tsinghua.edu.cn/g' /etc/apt/sources.list


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
