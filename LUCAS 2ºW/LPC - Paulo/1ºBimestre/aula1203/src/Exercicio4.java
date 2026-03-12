import java.util.Scanner;

public class Exercicio4 {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int numero, raiz=1, d=1;
        System.out.println("Digite um número: ");
        numero = in.nextInt();
        while (numero*d!=d  || numero==-5) {
            raiz=numero%d;
            if (d>=numero) {
                numero=-5;
            }
            d++;
        }
        if (d>=numero) {
            System.out.println("Seu número não é um quadrado perfeito");
        }
        else if (raiz==0) {
            System.out.println("Seu número é um quadrado perfeito");
        }
    }
}
