import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);


        System.out.println("Digite 1 para imóvel novo, 2 para usado: ");
        int opcao = in.nextInt();
        System.out.println("Digite o valor do imóvel: ");
        double preco = in.nextDouble();
        System.out.println("Digite o endereço do imóvel: ");
        String endereco = in.nextLine();

        Imovel imovel;

        String construtora;
        int anoConstrucao;

        if (opcao==1) {
            System.out.println("Digite o nome da construtora: ");
            construtora = in.nextLine();

        }
        else if (opcao==2) {
            System.out.println("Digite o ano de construção: ");
            anoConstrucao = in.nextInt();
        }
        else {
            System.out.println("DADO INVÁLIDO! Tente novamente!");
        }


    }
}
