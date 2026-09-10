import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        int i;
        int acumPar=0;
        int acumImpar=0;
        int num;
        Scanner in = new Scanner(System.in);
        int[] vetor1 = new int[10];
        for (i=0;i<vetor1.length;i++) {
            System.out.println("Qual é o valor do " + (i+1) + "º número do vetor: ");
            vetor1[i] = in.nextInt();
            if (i%2==0) {
                acumPar+=vetor1[i];
            }
            else {
                acumImpar+=vetor1[i];                                                                                                                                                ];
            }
        }
        System.out.println("A média das posições pares é igual a: " + (acumPar/5));
        System.out.println("A média das posições ímpares é igual a: " + (acumImpar/5));
    }
}
