import java.util.Scanner;

public class Exercicio3 {
    public static void main(String[] args){
        int numero;
        Scanner scanner = new Scanner(System.in);
        System.out.println("Digite seu número: ");
        numero = scanner.nextInt();

        if (numero%3==0 && numero%7==0) {
            System.out.println("Seu número é divisível por 3 e 7!");
        } else {
            System.out.println("Seu número não é divisível por 3 e 7.");
        }

    }
}
