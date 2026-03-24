"""
Programa Principal - MIWEB GUZMAN_FABIAN
Muestra la información del desarrollador
"""

def mostrar_informacion():
    """Muestra el nombre del desarrollador"""
    nombre = "Fabian Enrique Guzman Choque"
    print("=" * 50)
    print("BIENVENIDO A MIWEB")
    print("=" * 50)
    print(f"Desarrollador: {nombre}")
    print("=" * 50)
    print("\nOpciones disponibles:")
    print("1. Calcular suma de 2 números (suma.py)")
    print("2. Calcular factorial de un número (factorial.py)")
    print("=" * 50)

if __name__ == "__main__":
    mostrar_informacion()
