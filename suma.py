"""
Módulo para calcular la suma de 2 números
"""

def sumar_numeros(num1, num2):
    """
    Calcula la suma de dos números
    
    Args:
        num1: Primer número
        num2: Segundo número
        
    Returns:
        float: La suma de los dos números
    """
    return num1 + num2


def main():
    """Función principal para calcular suma"""
    print("\n" + "=" * 40)
    print("CALCULADORA DE SUMA")
    print("=" * 40)
    
    try:
        num1 = float(input("Ingrese el primer número: "))
        num2 = float(input("Ingrese el segundo número: "))
        
        resultado = sumar_numeros(num1, num2)
        
        print(f"\n{num1} + {num2} = {resultado}")
        print("=" * 40 + "\n")
        
    except ValueError:
        print("Error: Ingrese números válidos")


if __name__ == "__main__":
    main()
