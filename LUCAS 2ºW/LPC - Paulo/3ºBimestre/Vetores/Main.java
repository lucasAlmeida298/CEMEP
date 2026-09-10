import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        int i;
        int[] vetor = new int[5];
        int[] vetor2= new int[5];
        Scanner in = new Scanner(System.in);

        vetor[0] = 4;
        vetor[1] = 202;
        System.out.println("Primeira posição: " + vetor[0]);
        System.out.println("Segunda posição: " + vetor[1]);

        for(i=0;i<vetor2.length;i++){
            System.out.println("\nDigite o " + (i+1) + "º valor: ");
            vetor2[i] = in.nextInt();
        }
        for (i=0; i<vetor2.length; i++){
            System.out.println("O "+ (i+1) + "º valor é: "+ vetor2[i]);
        }

        System.out.println("\nOrdem inversa: 1");
        for (i=vetor2.length-1;i>=0; i--) {
            System.out.println("znO "+ (i+1) + "º valor é: "+ vetor2[i]);
        }
    }
}
