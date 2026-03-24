"""
Módulo para calcular el factorial de un número
"""

def calcular_factorial(n):
    """
    Calcula el factorial de un número
    
    Args:
        n: Número entero no negativo
        
    Returns:
        int: El factorial de n
        
    Raises:
        ValueError: Si n es negativo
    """
    if n < 0:
        raise ValueError("El número no puede ser negativo")
    
    if n == 0 or n == 1:
        return 1
    
    resultado = 1
    for i in range(2, n + 1):
        resultado *= i
    
    return resultado


def main():
    """Función principal para calcular factorial"""
    print("\n" + "=" * 40)
    print("CALCULADORA DE FACTORIAL")
    print("=" * 40)
    
    try:
        num = int(input("Ingrese un número entero positivo: "))
        
        if num < 0:
            print("Error: Ingrese un número no negativo")
        else:
            resultado = calcular_factorial(num)
            print(f"\n{num}! = {resultado}")
            print("=" * 40 + "\n")
            
    except ValueError:
        print("Error: Ingrese un número entero válido")


if __name__ == "__main__":
    main()
