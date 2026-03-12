import java.util.Scanner;

public class Exercicio3 {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n, par=0, impar=0, zero=0;
        float x; 
        System.out.println("Digite quantos números deseja digitar: ");
        n = in.nextInt();

        int i;
        for (i=1; i<=n; i++) {
            System.out.println("Digite seu número: ");
            x = in.nextFloat();
            if (x==0) {
                zero++;
            }
            else if (x%2==0) {
                par++;
            }
            else if (x%2!=0) {
                impar++;
            }
        }

        System.out.println("O número de números pares digitados foi: "+ par);
        System.out.println("O número de números ímpares digitados foi: "+ impar);
        System.out.println("O número de zeros digitados foi: "+ zero);


    }
}
