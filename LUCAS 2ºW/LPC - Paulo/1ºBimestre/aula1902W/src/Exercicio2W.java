import java.util.Scanner;
public class Exercicio2W {

    public static void main(String[] args){

        double a, b, c, x;
        Scanner num = new Scanner(System.in);
        System.out.println("Digite 3 números Reais: ");
        a = num.nextInt();
        b = num.nextInt();
        c = num.nextInt();
        x = (a + b + c) / 3;
        System.out.println("X = "+ x);

    }
}
