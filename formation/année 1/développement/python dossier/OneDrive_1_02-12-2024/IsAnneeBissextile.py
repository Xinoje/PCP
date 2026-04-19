annee = int(input("Année ? "))
if annee % 4 == 0 :
    msg = "Année %d bissextile" %annee
else :
    msg = "Année %d non bissextile" %annee
print(msg)