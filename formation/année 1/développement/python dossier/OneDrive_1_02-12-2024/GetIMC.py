poids = float(input("Poids ? "))
taille = float(input("Taille ? "))
sexe = input("Sexe ? ")
age = int(input("Age ? "))
imc = poids / (taille*taille)
print("Votre IMC : {:.2f}" .format(imc))
if imc < 30 :
    msg = "Tout va bien !"
elif (sexe == "H" and age < 50) or (sexe == "F" and age < 55) :

    msg = "Vous prenez un risque !"
else :
    msg = "Ca sent le sapin !"
print(msg)