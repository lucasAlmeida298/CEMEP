import java.util.Scanner;

public class Exercicio2 {
    public static void main(String[] args){
        int numero;
        Scanner scanner = new Scanner(System.in);

        System.out.println("Digite um número:");
        numero = scanner.nextInt();

        if (numero%2==0) {
            System.out.println("Seu número é par!");
        } else {
            System.out.println("Seu número é ímpar!");
        }
    }
}
