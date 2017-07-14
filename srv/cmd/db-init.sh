#!/bin/bash
echo "CREATE USER 'land'@'%' IDENTIFIED BY 'land'" | mysql -uroot
echo "GRANT ALL PRIVILEGES ON *.* TO 'land'@'%' WITH GRANT OPTION" | mysql -uroot
echo "CREATE DATABASE land;" | mysql -uland -pland

