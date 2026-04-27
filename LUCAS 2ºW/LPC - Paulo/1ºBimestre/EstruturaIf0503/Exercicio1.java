import java.util.Scanner;

public class Exercicio1 {

    public static void main(String[] args){
        float nota1, nota2, nota3, media;

        Scanner nota = new Scanner(System.in);

        System.out.println("Digite seu nome: ");
        String nome = nota.nextLine();

        System.out.println("Digite sua primeira nota: ");
        nota1 = nota.nextFloat();

        System.out.println("Digite sua segunda nota: ");
        nota2 = nota.nextFloat();

        System.out.println("Digite sua terceira nota: ");
        nota3 = nota.nextFloat();

        media = (nota1+nota2+nota3)/3;

        if (media>10) {

            System.out.println("Dado inválido!");

        } else if (media<0) {

            System.out.println("Dado inválido");

        } else if (media<7) {

            System.out.println("Que pena "+ nome +" você foi reprovado.");

        } else if (media>=7) {

            System.out.println("Parabéns "+ nome +" você foi aprovado!");
        }

    }
}
