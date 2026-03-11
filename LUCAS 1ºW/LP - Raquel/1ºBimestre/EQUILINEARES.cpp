//Desenvolvido por Lucas Almeida - 1ºW
/*3-  Faça um programa que leia os coeficientes a, b, c, d, e, f. Calcule e exiba os valores de x e y de um sistema de equações lineares:
x= (c*e - b*f) / (a*e - b*d)
y= (a*f -c*d) / (a*e - b*d)*/
#include <stdio.h>
#include <math.h>
#include <locale.h>

main()
{
    float a, b, c, d, e, f;
    float x, y, denominador;

    printf("Digite o valor de a: ");
    scanf("%f", &a);
    printf("Digite o valor de b: ");
    scanf("%f", &b);
    printf("Digite o valor de c: ");
    scanf("%f", &c);
    printf("Digite o valor de d: ");
    scanf("%f", &d);
    printf("Digite o valor de e: ");
    scanf("%f", &e);
    printf("Digite o valor de f: ");
    scanf("%f", &f);

    denominador = a * e - b * d;
    
    x = (c * e - b * f) / denominador;
    y = (a * f - c * d) / denominador;

    printf("Valor de x: %.2f\n", x);
    printf("Valor de y: %.2f\n", y);
}
