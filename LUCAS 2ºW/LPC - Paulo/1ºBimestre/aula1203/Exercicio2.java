import java.util.Scanner;

public class Exercicio2 {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int condicao=0, contagem=0;
        float acumulador=0;
        while (condicao<=0){
            System.out.println("Digite um número real: ");
            float numero = in.nextFloat();
            acumulador = acumulador+numero;

            System.out.println("Deseja continuar?(0-Sim/1-Não): ");
            condicao = in.nextInt();

            contagem++;
        }

        float media = acumulador/contagem;
        System.out.println("Você digitou "+ contagem +" números");
        System.out.println("A média dos números digitados é: "+ media);
    }
}







