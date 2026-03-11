import java.util.Scanner;

public class Exercio5W {
    public static void main (String[] args){
        /*Leia um valor inteiro correspondente à idade de uma pessoa em dias e informe-a em anos, meses e dias.
        obs: Para facilitar, considere todo ano com 365 e todo mês com 30 dias. Ex: 400= 1 ano, 1 mês, 5 dias*/
        int dias, anos, meses, d, e, f;
        Scanner idade = new Scanner(System.in);
        System.out.println("Digite um número inteiro: ");
        dias = idade.nextInt();

        anos = dias/365;
        meses = (dias - anos * 365)/30;
        dias = (dias - anos * 365 - meses * 30);

        System.out.println("Anos: " + anos);
        System.out.println("Meses: " + meses);
        System.out.println("Dias: " + dias);


    }
}
