import java.util.InputMismatchException;
import java.util.Scanner;

public class Calculos {
    public static void main(String[] args) {
        int a,b;
        Scanner in = new Scanner(System.in);

        System.out.println("Digite 2 números: ");
        try {
            a = in.nextInt();
            b = in.nextInt();

            System.out.println("Soma: "+ (a+b));
            System.out.println("Divisão: "+ (a/b));
        }
        catch (ArithmeticException e) {
            System.out.println("Não é possível dividir um número por 0");
            System.out.println(e.toString());
        }
        catch (InputMismatchException e) {
            System.out.println("O valor inserido deve ser um número inteiro");
            System.out.println("Erro: "+ e.toString());
        }
    }
}
