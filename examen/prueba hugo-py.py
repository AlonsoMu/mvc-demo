import random

ganadores = 0
par_totales = []
print("*************************************************")
print("**************BIENVENIDO AL SORTEO***************")
print("*************************************************")

primer_premio = input("Ingrese el premio del primer puesto: ")
segundo_premio = input("Ingrese el premio del segundo puesto: ")
tercer_premio = input("Ingrese el premio del tercer puesto: ")
cuarto_premio = input("Ingrese el premio del cuarto puesto: ")
quinto_premio = input("Ingrese el premio del quinto puesto: ")

print("---->ESCRIBA 1 POR 1 LOS NMBRES DE LOS PARTICIPANTES.             "
      "UNA VEZ HAYA ACABADO ESCRIBA 'FIN'                               ")
participante = input("Ingrese el nombre del participante: ")
while participante != "fin":
     part_totales.append(participante)
     participante = input("||Ingrese el nombre del participante: ")
     while participante == "":
          participante = input("Ingrese el nombre del participante: ")
          
print("||Lista de participantes:",part_totales)
#Eleccion al azar de los ganadores
while ganadores <= 3:
     ganadores = ganadores + 1
     primer_puesto = random.choice(part_totales)
     segundo_puesto = random.choice(part_totales)
     while segundo_puesto == primer_puesto:
          segundo_puesto = random.choice(part_totales)
     tercer_puesto = random.choice(part_totales)
     while tercer_puesto == primer_puesto or tercer_puesto == segundo_puesto:
          tercer_puesto = random.choice(part_totales)
print("¡Felicidades!",primer_puesto,"Ganaste",primer_premio)
print("¡Felicidades!",segundo_puesto,"Ganaste",segundo_premio)
print("¡Felicidades!",tercer_puesto,"Ganaste",tercer_premio)
print("----GRACIAS A POR PARTICIPAR----")