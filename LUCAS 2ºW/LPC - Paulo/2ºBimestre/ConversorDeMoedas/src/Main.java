import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        int moeda;
        double valor, valorConvertido;
        Scanner in = new Scanner(System.in);
        Conversor convert = new Conversor();
        System.out.println("Digite um valor em R$ a ser convertido: ");
        valor = in.nextDouble();
        System.out.println("1-Dólar 2-Euro 3-Iene");
        System.out.println("Digite para que moeda você deseja converter: ");
        moeda = in.nextInt();

        valorConvertido = convert.conversor(valor,moeda);
        System.out.println(valorConvertido);
    }
}
