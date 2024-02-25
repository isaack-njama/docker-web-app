#Using officail PHP run time image as parent image
FROM php:7.4-apache

#Set working directory
WORKDIR /var/www/html

#Copy current directory contents into the container at /var/www/html
COPY . /var/www/html/

#Install dependencies the php script might need
RUN apt-get update &&  \
    apt-get install -y curl && \
    rm -rf /var/lib/apt/lists/*

#Make port available
EXPOSE 80


#Run Php script
CMD [ "apache2-foreground" ]