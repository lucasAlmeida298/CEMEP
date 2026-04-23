import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        Conveter convert = new Conveter();

        int moeda;
        double a, dolar, euro, iene;
        System.out.println("Digite a quantidade de dinheiro que deseja converter: ");
        a = in.nextDouble();
        System.out.println("1-Dólar 2-Euro 3-Iene");
        System.out.println("Digite para que moeda você deseja converter: ");
        moeda = in.nextInt();
        if (moeda==1) {
            dolar=convert.convertDolar(a);
            System.out.println("O valor convertido é $"+ dolar);
        }
        else if (moeda==2) {
            euro=convert.convertEuro(a);
            System.out.println("O valor convertido é €"+ euro);
        }
        else if (moeda==3) {
            iene=convert.convertIene(a);
            System.out.println("O valor convertido é ¥"+ iene);
        }
    }
}
