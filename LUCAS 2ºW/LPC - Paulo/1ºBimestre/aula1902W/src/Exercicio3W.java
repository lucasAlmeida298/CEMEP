import java.util.Scanner;

public class Exercicio3W {
    public static void main(String[] args){
        int a, b, c;
        Scanner num = new Scanner(System.in);
        System.out.println("Digite um número inteiro: ");
        a = num.nextInt();
        b = a+1;
        c = a-1;
        System.out.println("Seu número é: "+ a);
        System.out.println("O antecessor de seu número é : "+ c);
        System.out.println("O sucessor de seu número é: "+ b);
    }
}
