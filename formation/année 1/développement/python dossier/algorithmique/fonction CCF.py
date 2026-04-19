def demander_mot_de_passe():
    
    mot_de_passe = input("Veuillez saisir votre mot de passe : ")

   
    if len(mot_de_passe) < 8:
        print("Le mot de passe doit contenir au moins 8 caractères.")
        return demander_mot_de_passe()  

    print("Mot de passe accepté.")
    return mot_de_passe



mot_de_passe = demander_mot_de_passe()

def verifier_mot_de_passe_majuscule(mot_de_passe):
    
    if mot_de_passe.isupper():
        print("Le mot de passe est valide : il contient uniquement des majuscules.")
        return True
    else:
        print("Le mot de passe est invalide : il ne contient pas uniquement des majuscules.")
        return False



mot_de_passe = input("Entrez le mot de passe à vérifier : ")
verifier_mot_de_passe_majuscule(mot_de_passe)


def crypter_mot_de_passe(mot_de_passe):
    # Décalage pour le chiffrement
    decalage = 3
    tableau_crypte = []

    for char in mot_de_passe:
       
        if 'A' <= char <= 'Z':
            char_crypte = chr((ord(char) - ord('A') + decalage) % 26 + ord('A'))
            tableau_crypte.append(char_crypte)
        else:
            tableau_crypte.append(char)

    return tableau_crypte


def verifier_et_crypter():
    mot_de_passe = input("Entrez un mot de passe uniquement en majuscules : ")

    if not mot_de_passe.isupper():
        print("Erreur : Le mot de passe doit contenir 


def mot_code(tableau_d_entier):
    mot = ''  
    nb = len(tableau_d_entier) 

    # Parcours du tableau
    for i in range(nb):
        mot += chr(tableau_d_entier[i])  

    return mot


tableau = [72, 101, 108, 108, 111] 
mot = mot_code(tableau)
print("Le mot obtenu est :", mot)
